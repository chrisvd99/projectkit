<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css"/>
    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
      var slider = document.getElementById("myRange");
      var output = document.getElementById("demo");
      output.innerHTML = slider.value; // Display the default slider value

      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function() {
        output.innerHTML = this.value;
      } 
    </script>
    <style>
      .left {
        float: left;
        margin-left: 10px;
      }
      .right {
        float: right;
        margin-right: 10px;
      }
      .inner {
        margin-left: 15.2%;
      }
      .outer {
        margin-left: 15.5%;
      }
      .middle {
        margin-left: 15%;
      }
    </style>
    <link rel="stylesheet" href="../css/slider.css"/>
    <title>KIT</title>
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
              <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/summa.html">Summa</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="card m-5">
        <div class="card-body">
          <p class="card-text" style="float: left">Beroep 1</p>
          <p class="card-text" style="float: right">Beroep 2</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="7" value="4" class="slider" id="myRange">
          </div>
          <div class="">
            <span class="left">1</span>
            <span class="outer">2</span>
            <span class="inner">3</span>
            <span class="middle">4</span>
            <span class="inner">5</span>
            <span class="outer">6</span>
            <span class="right">7</span>
          </div>
        </div>
      </div>
      <div class="card m-5">
        <div class="card-body">
          <p class="card-text" style="float: left">Beroep 1</p>
          <p class="card-text" style="float: right">Beroep 2</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="7" value="4" class="slider" id="myRange">
          </div>
          <div class="">
            <span class="left">1</span>
            <span class="outer">2</span>
            <span class="inner">3</span>
            <span class="middle">4</span>
            <span class="inner">5</span>
            <span class="outer">6</span>
            <span class="right">7</span>
          </div>
        </div>
      </div>
      <div class="card m-5">
        <div class="card-body">
          <p class="card-text" style="float: left">Beroep 1</p>
          <p class="card-text" style="float: right">Beroep 2</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="7" value="4" class="slider" id="myRange">
          </div>
          <div class="">
            <span class="left">1</span>
            <span class="outer">2</span>
            <span class="inner">3</span>
            <span class="middle">4</span>
            <span class="inner">5</span>
            <span class="outer">6</span>
            <span class="right">7</span>
          </div>
        </div>
      </div>
      <div class="card m-5">
        <div class="card-body">
          <p class="card-text" style="float: left">Beroep 1</p>
          <p class="card-text" style="float: right">Beroep 2</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="7" value="4" class="slider" id="myRange">
          </div>
          <div class="">
            <span class="left">1</span>
            <span class="outer">2</span>
            <span class="inner">3</span>
            <span class="middle">4</span>
            <span class="inner">5</span>
            <span class="outer">6</span>
            <span class="right">7</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a class="btn btn-primary w-25 p-3" href="uitslag.php">Uitslag</a>
    </div>
  </body>
</html>