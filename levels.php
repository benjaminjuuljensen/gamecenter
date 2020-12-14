<?php
    // Secret page
    session_start();
    if ($_SESSION['logged_in'] == true)
    { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-9ZfPnbegQSumzaE7mks2IYgHoayLtuto3AS6ieArECeaR8nCfliJVuLh/GaQ1gyM" crossorigin="anonymous">
</head>
<body class="levels">


<!-- Navbar -->  

<nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="game.php">
                        <img src="images/logo.png" height="15" alt="" loading="lazy">
                      </a>
                <form class="form-inline">
                  <img src="images/trust-pilot.png" height="20">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <img src="images/search.png" height="20">
                  <img src="images/profile.png" height="20">
                  <a href="index.html">
                  <img src="images/logout.png" height="20">
                  </a>
                </form>
              </nav>
<!-- Navbar --> 



<!--- Carousel --->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/jungle-carousel.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Rumble in the Jungle</h3>

          <a href="levels.php"><button type="button" class="btn btn-primary">PLAY NOW</button></a>
        </div>
      </div>
      
     
    </div>
   
  </div>

  <!--- Carousel --->

  <!--- Heading --->

  <center>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Choose a level</h5>
  </div>
</div>
    </center>

  <!--- Heading --->

  <!--- Card --->

  <center>
  <br>
  <div class="row row-cols-1 row-cols-md-6 g-4">
  <div class="col">
    <div class="card">
    <p>Level 1</p> 
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <a href="game.php">
      <i class="fas fa-lock-open-alt"></i>
    </a>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
          </ul>
    
  </div>
  <div class="col">
    <div class="card">
    <p>Level 2</p> 
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-open-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 3</p>  
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-open-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 4</p>  
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-open-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-6 g-4">
  <div class="col">
    <div class="card">
    <p>Level 5</p> 
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-open-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 6</p> 
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 7</p>  
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 8</p>   
      <div class="card-body" style="background-image: url(images/jungle-1.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-6 g-4">
  <div class="col">
    <div class="card">
    <p>Level 9</p> 
    <div class="card-body" style="background-image: url(images/jungle-1-blur.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 10</p>  
    <div class="card-body" style="background-image: url(images/jungle-1-blur.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
    <p>Level 11</p> 
    <div class="card-body" style="background-image: url(images/jungle-1-blur.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
  <div class="col">
    <div class="card">
      <p>Level 12</p>
      <div class="card-body" style="background-image: url(images/jungle-1-blur.png)">
      <i class="fas fa-lock-alt"></i>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
            <li class="list-group-item"><img src="images/half-star.png" height="15"></li>
          </ul>
  </div>
</div>
    
</center>
</div>
    
<!--- Card --->
  
<!-- Footer -->

<footer class="page-footer">
    <div class="container-fluid text-center text-md-left">
        <div class="row">

            <div class="col-md-4 mt-md-0 mt-3">
                 <h5 class="text-uppercase font-weight-bold"><img src="images/award.png" height="30">BECOME PREMIUM FROM 5$</h5>
                     <p>Get full access to all games</p>
                </div>

            <div class="col-md-4 mb-md-0 mb-3">
                  <h5 class="text-uppercase font-weight-bold"><img src="images/envelope.png" height="20">JOIN OUR MAILING LIST</h5>
                      <form class="form-inline">
                          <div class="form-group mb-2">
                              <label for="staticEmail2" class="sr-only">Email</label>
                          </div>

            <div class="form-group mx-sm-3 mb-2">
                  <input type="text" class="form-control" id="inputEmail2" placeholder="Email">
                     </div>
                         <button type="submit" class="btn btn-primary mb-2">SEND</button>
                    </form>
                </div>
          
        
            <div class="col-md-4 mb-md-0 mb-3">
                  <h5 class="text-uppercase font-weight-bold"><img src="images/thumbs-up.png" height="30">FOLLOW US ON OUR SOCIAL</h5>
                       <ul class="list-group list-group-horizontal">
                          <li class="list-group-item"><img src="images/facebook.png" height="30"></li>
                             <li class="list-group-item"><img src="images/tik-tok.png" height="30"></li>
                                 <li class="list-group-item"><img src="images/instagram.png" height="30"></li>
                                    <li class="list-group-item"><img src="images/youtube.png" height="30"></li>           
                               </ul>
                          </div>
                     </div>

            <!--- Copyright ---> 
    
            <center> 

            <div class="footer-copyright">© 2020 Copyright:
                  <a href="https://benjaminjuuljensen.dk">All Rights Reserved Benjamin Juul Jensen</a>
                    </div>

            </center>

            <!--- Copyright ---> 
  </footer>
  
  <!--- Footer --->

</body>
</html>

<?php
    }
        else 
    {
        header("location: dblogin3.php");
    }
?>