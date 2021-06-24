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
  if (isset($_POST['psNummer']))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kit";

    $ps = $_POST['psNummer'];

    //Maak connectie
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check of connectie werkt
    if ($conn->connect_error)
    {
      die("Connection faild: " . $conn->connect_error);
    }

    //Get hashed password
    $sql = "SELECT studentPassword FROM studenten WHERE studentPsNummer = '$ps'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      $row = $result->fetch_assoc();
      $hashed = $row['studentPassword'];
    }

    if ($hashed == $_POST['wachtwoord'])
    {
      echo "Inloggen gelukt!";
      $_SESSION['ingelogd'] = 1;
      $_SESSION['studentPsNummer'] = $_POST['psNummer'];
      header('Location: ../index.php');
    }
  }
?>