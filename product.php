<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- This is our first favicon! -->
    <link rel="shortcut icon" type="images/favicon/jpg" href="./images/cafeicon4.jpg">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    
    <script src="https://kit.fontawesome.com/d291abbb8d.js" crossorigin="anonymous"></script>

    <title>Coffee Prince</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Brand -->
      <div><img src="./images/cafeicon4.jpg" style="height: 30px;" class="pr-0" alt=""></div>
        <div class="container">Coffee Prince</div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="product.php">Product</a>
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                    <a class="nav-item nav-link" href="checkout.php">Checkout</a>
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
         <div class="card p-2 border-secondary mt-4 mb-2">
           <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250" alt="">
           <div class="card-body p-1">
             <h4 class="card-title text-center text-muted"><?= $row['product_name'] ?></h4>
             <h5 class="card-title text-center text-muted">$<?= $row['product_price'] ?></h5>
           </div>
           <div class="card-footer p-1">
             <form action="" class="form-submit">
               <input type="hidden" class="pid" value="<?= $row['id'] ?>">
               <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
               <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
               <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
               <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
               <button class="btn btn-success btn-block addItemBtn"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
             </form>
           </div>
         </div>
       </div>
     </div>
        <?php endwhile; ?>
    </div>
      
    <div class="container text-muted">
    <h4 class="text-center mb-4">Coffee Prince Roaster... Opening Soon</h4>
    <p>Our passion is to highlight exciting flavours while caring for our producers, partners and community.</p>
    <h4>Highlights</h4>
    <p>We are giving a free Coffee and Donut for the first 50 customer.</p>
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
    
    <footer>
      <div class="row bg-light text-center">
        <div class="col-md-4 smed">
          <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="https://youtu.be/N8meCjVsJWI" target="_blank"><i class="fab fa-youtube-square"></i></a>
       </div>
       <div class="col-md-4">
         <p class="text-center mb-2 p-4">Copyright 2020. Coffee Prince. All Rights Reserved</p>
       </div>
       <div class="col-md-4 ml-auto">
           <a class="" href="#"><img src="./images/cafeicon4.jpg" style="height: 30px;" alt="logo"></a><p>Coffee Prince</p>
         </div>
     </div>
    </footer>

  </body>
</html>