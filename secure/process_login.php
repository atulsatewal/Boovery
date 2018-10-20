<?php


include 'db_connect.php';
include 'functions.php';
sec_session_start(); // Our custom secure way of starting a php session. 
 
if(isset($_POST['email'], $_POST['p'])) { 
    print_r($_POST);
   $email = $_POST['email'];
   $password = $_POST['p']; // The hashed password.
   if(login($email, $password, $mysqli) == true) {
      // Login success
      print_r ($_SESSION);
    switch ($_SESSION['role']) {

        case 'user':
            header("Location: '..\..\..\dashboard_user.php");
            break;
        case 'admin':
            header("Location: '..\..\..\dashboard_admin.php");
            break;
        default:
           
           header("Location: '..\..\..\index.php?error=2");
}
    
   } else {
      // Login failed
    
    header("Location: '..\..\..\index.php?error=1");

   }
} else { 
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}




;?>