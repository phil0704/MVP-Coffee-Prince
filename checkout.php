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
      $total_amount +=$row['total_price'];
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- This is our first favicon! -->
    <link rel="shortcut icon" type="images/favicon/jpg" href="./images/cafeicon4.jpg">
    
    <!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="./css/main.css">


    <title>Checkout</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Brand -->
      <div><img src="./images/cafeicon4.jpg" style="height: 30px; border-right: 1px solid #333;" class="pr-3" alt=""></div>
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
        <div class="row justify-content-center">
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
               <div class="form-group">
                   <input type="text" name="firstName" class="form-control mb-3" placeholder="First Name" required>
                   <input type="text" name="lastName" class="form-control  mb-3" placeholder="Last Name" required>
                   <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
                   <input type="tel" name="phone" class="form-control  mb-3" placeholder="Telephone #" required>
                   <textarea name="address" class="form-control" cols="10" rows="3" placeholder="Address"></textarea>
               </div>
               <div class="form-group">
                   <input type="text" name="first_name" class="form-control mb-3" placeholder="Card Name" required>
                   <div id="card-element" class="form-control">
                      <!-- a Stripe Element will be inserted here.-->
                   </div>
                      <!-- Used to display errors -->
                   <div id="card-errors" role="alert"></div>
               </div>
               <h6 class="text-center lead">Select Payment Mode</h6>
               <div class="form-group">
                   <select name="pmode" class="form-control">
                   <option value="" select disabled>-Select Payment Mode-</option>
                   <option value="cards">Debit/Credit Card</option>
                   </select>
               </div>
               <div class="form-group">
                   <input type="submit" name="submit" value="Submit Payment" class="btn btn-primary btn-block">
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
    <footer class="card bg-light text-center py-5">
        <p>Copyright 2020. Coffee Prince. All Rights Reserved</p>
      </footer>
  </body>
</html>