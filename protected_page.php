<?php
session_start();
if (isset($_SESSION["loggedIn"])) {
} else {
  header("Location:index.php?message=protected_page");
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

      <?php
        $pageToInclude = $_SESSION["currentUser"];
        include ("page_" . $pageToInclude . ".html");
       ?>










    </section><!-- MAIN CONTAINER -->
  </body>
</html>
