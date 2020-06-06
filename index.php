<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Coffee Prince is a Alberta's Coffee supplier and roasty.">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- This is our first favicon! -->
    <link rel="shortcut icon" type="images/favicon/jpg" href="./images/cafeicon4.jpg">
    
    <!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="./css/main.css">

    <script src="https://kit.fontawesome.com/d291abbb8d.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>

    <title>Coffee Prince</title>
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
           <img src="./images/coffee-shop1.jpg" alt="Coffee Shop">
          </div>
            <div class="carousel-item">
              <img src="./images/coffee-shop2.jpg" alt="Coffee Shop">
            </div>
         <div class="carousel-item">
             <img src="./images/coffee.shop.jpg" alt="Coffee Shop">
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
        <h4>A one Stop shopping for your Coffee needs</h4>
        <p>These exceptional tasting coffees originate from a single estate, or farm, in a specific growing area. The growing conditions like soil, altitude, climate, shade in these areas are considered ideal for creating premium, specialty coffees. These pure coffees capture the unique essence of a particular plant variety and region.</p>
      </div>
            <a href="product.php" class="btn btn-success">Shop Now</a>
    </div>

    <div class="container text-muted">
      <h4 class="text-center mb-4">Featured Products</h4>
      <!-- cards -->
        <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <img src="./images/coffee_bean1.jpg" class="card-img-top img-fluid" alt="Coffee Bean">
            <div class="card-body">
              <h3 class="card-title">Coffee Arabica</h3>
              <p>Slightly larger, oval shaped. This top-notch arabica coffee is so palatable; It has a subtle, softer, and sweeter flavor. When roasted, there is a note of perfumey smell with a fruity, sugary tone in the berries.</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <img src="./images/coffee_bean2.jpg" class="card-img-top img-fluid" alt="Coffee Bean">
            <div class="card-body">
              <h3 class="card-title">Coffee Robusta</h3>
              <p>Smaller in size with round shape. Robusta has a delicate, sharp taste, often bitter and harsher, so adding cream or sugar does not alter the taste. It contains high caffeine and less sugar and thus making it perfect for espresso.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card">
            <img src="./images/coffee_bean5.jpg" class="card-img-top img-fluid" alt="Coffee Bean">
            <div class="card-body">
              <h3 class="card-title">Coffee Liberica</h3>
              <p>Larger in size with almoned shaped. This type of coffee has an exceptional taste profile. Liberica is said to have a woody, nutty flavor, with a smoky note in its full body with a floral, fruity aroma.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card">
            <img src="./images/coffee_bean6.jpg" class="card-img-top img-fluid" alt="Coffee Bean">
            <div class="card-body">
              <h3 class="card-title">Coffee Excelsa</h3>
              <p>Average size with mostly almond shaped. It has a flavor of both light roast and dark roast coffee—feels like tart, fruity, and somehow dark. It is the distinct flavor that persuades coffee enthusiasts to seek and try this drink from around the world.</p>
            </div>
          </div>
        </div>
      </div>

        <h3 class="display-4 text-center py-5 my-4">Learn More About Our Product</h3>
        <nav class="nav justify-content-center nav-pills flex-column flex-md-row">
          <a class="nav-link active" href="#arabica" data-toggle="tab">Coffee Arabica</a>
          <a class="nav-link" href="#robusta" data-toggle="tab">Coffee Robusta</a>
          <a class="nav-link" href="#liberica" data-toggle="tab">Coffee Liberica</a>
          <a class="nav-link" href="#excelsa" data-toggle="tab">Coffee Excelsa</a>
        </nav>
          
        <div class="tab-content py-5">
            <div class="tab-pane active" id="arabica">
              <h3>Coffee Arabica</h3>
              <p>Arabica is the most popular type of coffee, Arabica beans have a sweeter, more complex flavor that you can drink straight. Compared to Robusta, Arabica tends to have more acidity, less caffeine, and smoother taste. However, the distinctive flavor of Arabica coffee might change when it is brewed cold or with crema.  Arabica is the finest quality of the coffee bean. The growing conditions of the plant and the amazing flavor of this coffee species makes it more expensive than all other coffee species. Coffee shops typically use arabica bean blends to serve the consumers with the best quality flavorful coffee. The origin of Arabica Coffee is the highlands of present Ethiopia (formerly the kingdom of Kefa). It was then consumed by the Oromo tribe as a stimulant. But coffee arabica was named after this species and has got its popularity in Yemen and lower Arab. Now Arabica is regarded as the most consumed coffee bean ( about or above 60%) throughout the world.</p>
            </div>
            <div class="tab-pane" id="robusta">
              <h3>Coffee Robusta</h3>
              <p>Robusta is the second most-produced coffee bean in the world. Robusta is cheaper and stronger. Because of its bitter flavor, you’ll typically see Robusta used for espresso drinks and in instant coffee mixes. If your Monday morning is lagging, reach for a cup of coffee that uses Robusta beans. Robusta beans are also sold with Arabica as espresso blend to give the coffee a rich, deep flavor. Their high caffeine content will wake you right up! Robusta coffees are mainly grown in Africa and Indonesia.</p>
            </div>
            <div class="tab-pane" id="liberica">
              <h3>Coffee Liberica</h3>
              <p>Liberica coffee is a species of coffee plant that was first discovered in Liberia which gives it its name. It's a much larger plant/tree than other species, growing to 20m in height and producing coffee beans that are much larger than other varieties. Liberica is a distinct species in world coffee consumption. This coffee is now cultivated mainly in Philippine, Indonesia, and Malaysia.</p>
            </div>
            <div class="tab-pane" id="excelsa">
              <h3>Coffee Excelsa</h3>
              <p>Excelsa coffee plant is now considered to be the species of the Liberica family. Excelsa plants are mainly found in Southeast Asia, and the beans are mostly used as blending coffee. Excelsa has a unique taste profile, somewhat mysterious; it has a flavor of both light roast and dark roast coffee—feels like tart, fruity, and somehow dark. Excelsa plants are mainly found in Southeast Asia, and the beans are mostly used as blending coffee.</p>
            </div>
      </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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