<?php
session_start();

$enteredName =  trim(strtolower($_POST['username']));
$enteredPassword = $_POST['password'];





//Checks who is logged in. Then checks their password. Else returns wrong_credentials
//or invalid_username
switch ($enteredName) {
  case 'yaroslav':
    if ($enteredPassword == "123") {
      $_SESSION["loggedIn"] = "true";
      $_SESSION["currentUser"] = "$enteredName";
      header ("Location:protected_page.php");
    } else {
      header ("Location:login_page.php?message=wrong_credentials");
    }
    break;

  case 'tanja':
    if ($enteredPassword == "123") {
      $_SESSION["loggedIn"] = "true";
      $_SESSION["currentUser"] = "$enteredName";
      header ("Location:protected_page.php?message=wrong_credentials");
    } else {
      header ("Location:login_page.php?message=wrong_credentials");
    }
    break;

  default:
    header ("Location:login_page.php?message=invalid_username");//username not found
    break;
}


 ?>
