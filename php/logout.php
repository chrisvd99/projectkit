<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
      
  </body>
</html>
<?php
  $_SESSION['ingelogd'] = 0;
  unset($_SESSION['studentPsNummer']);
  header('Location: ../index.php');
?>