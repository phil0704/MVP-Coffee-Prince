<?php
  require 'config.php';

  $total_amount = 0;
  $allItems = '';
  $items = array();

  $sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
      $total_amount +=(float)$row['total_price'];
      $items[] = $row['ItemQty'];
  }
  $allItems = implode(",", $items);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equi="X-UA-Compatible" content="ie-edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- This is our first favicon! -->
    <link rel="shortcut icon" type="images/favicon/jpg" href="./images/cafeicon4.jpg">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <script src="https://kit.fontawesome.com/d291abbb8d.js" crossorigin="anonymous"></script>

    <title>Checkout Form</title>
  </head>
  <body data-spy="scroll" data=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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

    <div class="container1">
       <div class="row1 justify-content-center">
          <div class="col-log-6 px-4 pb-4" id="order">
            <h4 class="text-center text-muted p-2">Complete your Order!</h4>
            <div class="jumbotron p-3 mb-2 text-center">
                <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
                <h6 class="lead"><b>Delivery Charge : </b>Free of Charge</h6>
                <h5><b> Total Amount Payable : </b>$<?= ($total_amount) ?></h5>
            </div>
            <form action="" method="post" id="placeOrder">
               <input type="hidden" name="products" value="<?= $allItems; ?>">
               <input type="hidden" name="total_amount" value="<?= $total_amount; ?>">

               <div class="row1">
                 <div class="col-75">
                    <div class="container">
                       <div class="row1">
                           <div class="col-50 text-center text-muted">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="​​john@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Edmonton">
                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">Province</label>
                                            <input type="text" id="state" name="state" placeholder="AB">
                                       </div>
                                    <div class="col-50">
                                            <label for="zip">Postal Code</label>
                                            <input type="text" id="zip" name="zip" placeholder="T6G 2B7">
                          </div>
                     </div>
                 </div>
                               <div class="col-50 text-center text-muted">
                                  <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                  <div class="icon-container">
                                     <i class="fa fa-cc-visa" style="color:navy;"></i>
                                     <i class="fa fa-cc-amex" style="color:blue;"></i>
                                     <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                     <i class="fa fa-cc-discover" style="color:orange;"></i>
                                  </div>
                                     <label for="cname">Name on Card</label>
                                     <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                     <label for="ccnum">Credit card number</label>
                                     <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                     <label for="expmonth">Exp Month</label>
                                     <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                  <div class="row">
                                      <div class="col-50">
                                          <label for="expyear">Exp Year</label>
                                          <input type="text" id="expyear" name="expyear" placeholder="2018">
                                      </div>
                                      <div class="col-50">
                                          <label for="cvv">CVV</label>
                                          <input type="text" id="cvv" name="cvv" placeholder="352">
                                      </div>
                                  </div>
                              </div>
                  </div>
                  
                                    <label>
                                     <input type="checkbox" checked="checked" name="sameadr"> 
                                         Shipping address same as billing
                                     </label>
                                     <input type="submit" value="Continue to checkout" class="btn btn-success">
                          </div>
                     </div>
                 </div> 
                                    
            </form>
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
    

       $(document).ready(function(){
           $("#placeOrder").submit(function(e){
               e.preventDefault();
               $.ajax({
                   url: 'action.php',
                   method: 'post',
                   data: $('form').serialize()+"&action=order",
                   success: function(response){
                       $("#order").html(response);
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
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://twitter.com/explore" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram-square"></i></a>
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