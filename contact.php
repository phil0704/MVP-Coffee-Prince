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
    
    <section>
      <figure class="text-center">
        <img src="./images/coffee-cupbean.jpg" class="img-fluid" alt="Coffee Cup">
      </figure>
   </section>

   <section class="card bg-light text-center py-5">
     <div class="col -md-4 pd-3 pf">
       <h3 class="text-center text-muted">Our new Store Location. Opening Soon</h3>
        <div class="p-4 mt-4">
          <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJudnwZ_kboFMRHEleSMazhpk&key=AIzaSyAw-QgwU5AzE8zBUEMUaxatpNEA0uS1z7k" allowfullscreen></iframe>
       </div>
     </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <section class="subscribe-area pb-45 pt-65">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="subscribe-text mb-15">
            <span>JOIN OUR NEWSLETTER</span>
            <h2>Subscribe Newsletter</h2>
          </div>
        </div>
        <div class="c0l-md-8 col-sm-12 col-xs-12">
        <div class="subscribe-wrapper subscribe2-wrapper mb-15">
        <div class="subscribe-form">
           <form action="#" id="subscribeBtn" method="post">
          <input placeholder="enter your email address" type="email" id="email"required>
          <button id="submitbtn"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </div>
      </div>
      </div>
      </div>
      </div>
    </section>

    <script>
$(document).ready(function(){
    $('#subscribeBtn').on('submit', function(e){ e.preventDefault();
        // Remove previous status message
        $('.status').html('');
		
        // Email and name regex
        var regEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
       
		
        // Get input values
       
        var email = $('#email').val();
		
        // Validate input fields
      
        if(email.trim() == '' ){
            alert('Please enter your email.');
            $('#email').focus();
            return false;
        }else if(email.trim() != '' && !regEmail.test(email)){
            alert('Please enter a valid email.');
            $('#email').focus();
            return false;
        }else {
          console.log('submitting form');
            // Post subscription form via Ajax
            $.ajax({
                type:'POST',
                url:'subscription.php',
                dataType: "json",
                data:{subscribe:1,email:email},
                beforeSend: function () {
                    $('#subscribeBtn').attr("disabled", "disabled");
                    $('.content-frm').css('opacity', '.5');
                },
                success:function(data){
                    if(data.status == 'ok'){
                        $('#subsFrm')[0].reset();
                        $('.status').html('<p class="success">'+data.msg+'</p>');
                    }else{
                        $('.status').html('<p class="error">'+data.msg+'</p>');
                    }
                    $('#subscribeBtn').removeAttr("disabled");
                    $('.content-frm').css('opacity', '');
                    console.log("sent");
                },
                error:function(error) {
                  console.log(error);
                }
            });
        }
    });
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