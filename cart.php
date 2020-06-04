<?php 
  session_start();
?>

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
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="product.php">Product</a>
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                    <a class="nav-item nav-link" href="checkout.php">Checkout</a>
                    <a class="nav-item nav-link active" href="cart.php"><i class="fa fa-shopping-cart"></i> 
                    <span id="cart-item" class="badge badge-danger"></span></a>
                </div>
            </div>
    </nav> 

    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div style="display:<?php if(isset($_SESSION['showAlert'])) { echo $_SESSION['showAlert']; } 
            else { echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']; } unset($_SESSION['showAlert']); ?></strong> 
            </div>
             <div class="table-responsive mt-3">
                 <table class="table table-bordered table-striped text-center">
                   <thead>
                   <tr>
                      <td colspan="7">
                        <h4 class="text-center text-muted m-0">Products in your cart!</h4>
                      </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>
                            <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear all your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                        </th>
                    </tr>
                   </thead>
                   <tbody>
                       <?php 
                          require 'config.php';
                          $stmt = $conn->prepare("SELECT * FROM cart");
                          $stmt->execute();
                          $result = $stmt->get_result();
                          $total_amount = 0;
                          while($row = $result->fetch_assoc()):
                       ?>
                       <tr>
                       <td><?= $row['id'] ?></td>
                       <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                       <td><img src="<?= $row['product_image'] ?>" width="50" alt=""></td>
                       <td><?= $row['product_name'] ?></td>
                       <td>$<?= $row['product_price'] ?></td>

                       <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                       <!-- Quantity button -->
                       <td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:78px;"></td>
                       <td>$<?= $row['total_price'] ?></td>
                       <td><a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item');"><i class="fa fa-trash"></i></a></td>
                       </tr>
                       <?php $total_amount += (float)$row['total_price']; ?>
                          <?php endwhile; ?>
                          <tr>
                              <td colspan="3">
                                  <a href="product.php" class="btn btn-success"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                              </td>
                              <td colspan="2"><b>Total Amount</b></td>
                              <td>$<?= $total_amount ?></td>
                              <td>
                                  <a href="checkout.php" class="btn btn-success <?= ($total_amount >1)? "" : "disabled" ?>"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                              </td>
                          </tr>
                   </tbody>
                 </table>
             </div>
         </div>
     </div>
   </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">

      // Ajax code.
       $(document).ready(function(){

           $(".itemQty").on('change', function() {
               var $el = $(this).closest('tr');

               var pid = $el.find(".pid").val();
               var pprice = $el.find(".pprice").val();
               var qty = $el.find(".itemQty").val();
               location.reload(true);

             // sending the request to server for the qty item.
               $.ajax({
                   url: 'action.php',
                   method: 'post',
                   cache: false,
                   data: {qty:qty, pid:pid, pprice:pprice},
                   success: function(response) {
                       console.log(response);
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