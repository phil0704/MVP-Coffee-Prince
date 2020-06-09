<?php 
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   $conn = new mysqli('localhost', 'root', 'root', 'cart_system');
   if($conn->connect_error){
       die('connection Failed!'.$connect_error);
   }

   // Site Settings
   $siteName = 'MVP-Coffee-Prince';
   $siteEmail = 'ashphil07@gmail.com';

   $siteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'])?'https://': 'http://';
   $siteURL = $siteURL.$_SERVER['SERVER_NAME'].dirname($_SERVER['REQUEST_URI']). '/';
?>