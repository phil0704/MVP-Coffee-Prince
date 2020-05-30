<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Coffee Prince</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">Coffee Prince</div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="products.php">Products</a>
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                    <a class="nav-item nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></span></a>
                </div>
            </div>
    </nav> 

    <div class="container">
      <div id="message"></div>
    <div class="row">
     <?php
        include 'config.php';
        $stmt = $conn->prepare("SELECT * FROM product");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
      ?>
     <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
       <div class="card-deck">
         <div class="card p-2 border-secondary mb-2">
           <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250" alt="">
           <div class="card-body p-1">
             <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
             <h5 class="card-title text-center text-info">$<?= $row['product_price'] ?></h5>
           </div>
           <div class="card-footer p-1">
             <form action="" class="form-submit">
               <input type="hidden" class="pid" value="<?= $row['id'] ?>">
               <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
               <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
               <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
               <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
               <button class="btn btn-info btn-block addItemBtn"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
             </form>
           </div>
         </div>
       </div>
     </div>
        <?php endwhile; ?>
    </div>
  </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">

       $(document).ready(function(){
         $(".addItemBtn").click(function(e){
           e.preventDefault();
           var $form = $(this).closest(".form-submit");
           var pid = $form.find(".pid").val();
           var pname = $form.find(".pname").val();
           var pprice = $form.find(".pprice").val();
           var pimage = $form.find(".pimage").val();
           var pcode = $form.find(".pcode").val();
           
           console.log($form,pid,pname,pprice,pimage,pcode);

           $.ajax({
             url: './action.php',
             method: 'post',
             data: { pid:pid, pname:pname, pprice:pprice, pimage:pimage, pcode:pcode },
             success: function(response){
               console.log(response);
               $("#message").html(response);
               load_cart_item_number();
             },
             error: function(error){
               console.log(error);
             }
           });
         });

         load_cart_item_number();

         function load_cart_item_number(){
           $.ajax({
             url: 'action.php',
             method: 'get',
             data: {cartItem: "cart_item"},
             success: function(response){
               $("#cart-item").html(response);
             }
           });
         }

       });
    </script>
    <footer class="card bg-light text-center py-5">
        <p>Copyright 2020. Coffee Prince. All Rights Reserved</p>
      </footer>
  </body>
</html>