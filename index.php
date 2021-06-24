<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css"/>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
  </head>
  <body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">KIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="html/summa.html">Summa</a>
            </li>
            <?php
              if ($_SESSION['ingelogd'] == 1) {
                echo "<li class='nav-item'><a class='nav-link' href='php/kit.php'>De test</a></li>";
                echo "<li class='nav-item'><h5 class='navbar-brand' style='color: white; margin-left: 5%;'>Ingelogd als ";
                echo $_SESSION['studentPsNummer'];
                echo "</h5></li>";
              }
            ?>
          </ul>
        </div>
      </div>
      <div>
        <!-- Button trigger modal -->
        <?php 
          if (isset($_SESSION['ingelogd'])) {
            if ($_SESSION['ingelogd'] == 1) {
              echo "<form action='php/logout.php' method='get'><input type='submit' class='btn btn-primary' style='margin-right: 5px;' value='Uitloggen'/></form>";
            }
            else
            {
              echo "<button type='button' class='btn btn-primary' style='margin-right: 5px;' data-bs-toggle='modal' data-bs-target='#loginScreen'>Inloggen</button>";
            }
          }
        ?>
  
        <!-- Modal -->
        <div class="modal fade" id="loginScreen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginScreenLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="loginScreenLabel">Inloggen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action='php/login.php' method="POST">
                  <div class="mb-3">
                    <label for="psNummer" class="form-label">PSnummer</label>
                    <input type="text" class="form-control" id="psNummer" name="psNummer" aria-describedby="PSnote"/>
                    <div id="PSnote" class="form-text">
                      Vul je studentennummer in.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" id="wachtwoord" name="wachtwoord"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Inloggen</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-sm text-center">
      <h1 class="p-5">Welkom bij de Korte Interesse Test van het Summa College!</h1>
    </div>
    <div class="container p-lg-5 w-50" style="background-color: plum;">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.summacollege.nl/images/default-source/logo's/logo-summa-ict.jpg" style="width:640px; height:360px;" class="img-fluid w-100 h-50" alt="...">
            <h2 class="text-center">Handige feedback</h1><br>
          </div>
          <div class="carousel-item">
            <img src="https://hatrabbits.com/wp-content/uploads/2018/10/risky-assumptions.jpg" style="width:640px; height:360px;" class="img-fluid w-100 h-50" alt="...">
            <h2 class="text-center">Snel resultaat</h1><br>
          </div>
          <div class="carousel-item">
            <img src="https://i.pinimg.com/736x/4b/0e/79/4b0e79bd737a5d9509abb285a4bf11ff.jpg" style="width:640px; height:360px;" class="img-fluid w-100 h-50" alt="...">
            <h2 class="text-center">Makkelijk in te vullen</h1><br>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </body>
</html>