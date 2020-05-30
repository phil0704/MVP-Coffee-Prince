<?php 
   $conn = new mysqli('localhost', 'root', 'root', 'cart_system');
   if($conn->connect_error){
       die('connection Failed!'.$connect_error);
   }
?>