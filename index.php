<?php
  session_start();
  /*Choose which error message to display, under login screen*/
  switch (@$_GET['message']) {
    case 'wrong_credentials':
      $logInMessage = "Incorrect password.";
      break;

    case 'protected_page':
      $logInMessage = "This is a protected page. You must login first!";
      break;

      case 'invalid_username':
        $logInMessage = "This username does not exist.";
        break;

    default:
      $logInMessage = "";
      break;
  }

/*Show a message if user is already logged in. Otherwise show a login form.*/
if (isset($_SESSION["loggedIn"])) {
    $currentlyLoggedIn = $_SESSION["currentUser"];
    $contentToDisplay = '<h1 style="text-align: center;">You are currently <br>logged in as ' . ucwords($currentlyLoggedIn) . '</h1>';
} else {
  $contentToDisplay = <<<LOGIN_FORM
  <p class="warning">$logInMessage</p>
  <h1>Please login</h1>
  <br>
  <form action="login_respose.php" method="post">
    <input autocomplete="off" type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="" value="Send">
  </form>
  <br>

  LOGIN_FORM;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Redressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="classes.css">
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
  </head>
  <body>
    <?php include("navbar.html"); ?> <!--Include main navigation bar-->
    <section class="content"><!-- MAIN CONTAINER -->


      <div class="login_form">
        <?php echo $contentToDisplay; ?><!-- Display either a log in form or a message. -->
      </div>

    </section><!-- MAIN CONTAINER -->
  </body>
</html>
