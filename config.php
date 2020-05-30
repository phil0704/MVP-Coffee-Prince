<?php 
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   $conn = new mysqli('localhost', 'root', 'root', 'cart_system');
   if($conn->connect_error){
       die('connection Failed!'.$connect_error);
   }
?>