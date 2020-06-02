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


    <title>Coffee Prince</title>
  </head>
  <body data-spy="scroll" data=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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

    <div class="jumbotron jumbotron-fluid bg-dark text-white text-center">
      <div class="container">

      <div id="demo" class="carousel slide" data-ride="carousel">

         <!-- Indicators -->
       <ul class="carousel-indicators">
         <li data-target="#demo" data-slide-to="0" class="active"></li>
         <li data-target="#demo" data-slide-to="1"></li>
         <li data-target="#demo" data-slide-to="2"></li>
       </ul>

        <!-- The slideshow -->
      <div class="carousel-inner mt-2 mb-2">
         <div class="carousel-item active">
           <img src="./images/coffee-farm3.jpg" alt="Coffee Farm">
          </div>
            <div class="carousel-item">
              <img src="./images/coffee-farm4.jpg" alt="Coffee Farm">
            </div>
         <div class="carousel-item">
             <img src="./images/coffee-factory1.jpg" alt="Coffee Factory">
         </div>
         <div class="carousel-item">
             <img src="./images/coffee-factory2.jpg" alt="Coffee Factory">
         </div>
      </div>

        <!-- Left and right controls -->
       <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
       </a>
       <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
       </a>

    </div>
        
        <h1>Welcome To Coffee Prince</h1>
        <p>These exceptional tasting coffees originate from a single estate, or farm, in a specific growing area. The growing conditions like soil, altitude, climate, shade in these areas are considered ideal for creating premium, specialty coffees. These pure coffees capture the unique essence of a particular plant variety and region.</p>
      </div>
            <a href="product.php" class="btn btn-primary">Shop Now</a>
    </div>

    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <h2>About</h2>
                    <p>James Sebastian Dean, Owner and Entrepreneur. After finishing his degree in Univeristy of Alberta major in Business Administration. He pursue his dream to own a business. Being a Coffee Lover, Coffee Prince was introduced and established in July 2017 selling and importing coffee bean from different Continents to offer the best quality of coffee bean here in Canada.
                    Coffee Prince imports Brazilian, Costa Rican, The Philippines, Indonesian, Colombian, and African beans. All beans are roasted in small batches weekly to produce the freshest, highest quality coffees.
                    We are very proud of our personal and direct trade relationship with the other company around the world. 
                    In September 2018, Coffee Prince opened it's first Coffee Bar in Edmonton, AB Canada. The shop has quickly become known for it's exquisite pour-overs, open-concept roastery, exceptional service and fresh and pure coffees.
                   </p>
                </div>
                  <figure>
                    <img src="./images/coffee-owner.jpg" alt="Company Owner">
                  </figure>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <footer class="card bg-light text-center py-5">
        <p>Copyright 2020. Coffee Prince. All Rights Reserved</p>
      </footer>
  </body>
</html>