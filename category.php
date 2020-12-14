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
<body class="category">


<!-- Navbar -->  


<nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="menu.php">
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

<!-- Carousel-->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/jungle-carousel.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Rumble in the Jungle</h3>
          <a href="levels.php">
          <button type="button" class="btn btn-primary">PLAY NOW</button>
         </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/chinese-landscape.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Kung Fu Shaolin</h3>
          <button type="button" class="btn btn-primary">PLAY NOW</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cementery.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Zombie Cementery</h3>
          <button type="button" class="btn btn-primary">PLAY NOW</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--- Carousel --->

  <!--- Heading --->

<center>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Choose a game</h5>
  </div>
</div>
    </center>

  <!--- Heading --->
  
  <!--- Search --->

<center>
  <form>     
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputState">CATEGORY</label>
           <select id="inputState" class="form-control">
             <option selected>Choose...</option>
             <option>Escapr</option>
             <option>Fighting</option>
             <option>Thinking</option>
             <option>War</option>
             <option>Escape</option>
          </select>
      </div>

    <div class="form-group col-md-3">
        <label for="inputState">PLAYER</label>
           <select id="inputState" class="form-control">
             <option selected>Choose...</option>
             <option>Multiplayer</option>
             <option>Singleplayer</option>
          </select>
      </div>

  <div class="form-group col-md-3">
        <label for="inputState">TYPE</label>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">     
      </div>


  <div class="form-group col-md-3">
        <label for="inputState">SEARCH</label>
          <button class="btn btn-outline-success mr-sm-2" type="submit"><i class="fas fa-search"></i></button>
      </div> 
  </form>
  </center>

  <!--- Search --->


  <!--- Card --->

    <div class="card-deck">
        <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-image: url(images/rumble-in-the-jungle.png)">
                  <h5 class="card-title">Rumble in the Jungle</h5>
            
                  <a href="levels.php" class="btn btn-primary">PLAY NOW</a>
                </div>
              </div>
              
              <div class="card" style="width: 18rem;">
                    <div class="card-body" style="background-image: url(images/chinese-landscape.png)">
                      <h5 class="card-title">Kung Fu Shaolin</h5>
  
                      <a href="#" class="btn btn-primary">PLAY NOW</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                        <div class="card-body" style="background-image: url(images/cementery.png)">
                          <h5 class="card-title">Zombie Cemetery</h5>
                    
                          <a href="#" class="btn btn-primary">PLAY NOW</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body" style="background-image: url(images/wild-west.png)">
                          <h5 class="card-title">Wild West</h5>
                    
                          <a href="#" class="btn btn-primary">PLAY NOW</a>
                        </div>
                      </div>
                  </div>
                   
                      <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-image: url(images/pirate.png)">
                              <h5 class="card-title">Pirate</h5>

                              <a href="#" class="btn btn-primary">PLAY NOW</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                                <div class="card-body" style="background-image: url(images/dracula.png)">
                                  <h5 class="card-title">Dracula</h5>

                                  <a href="#" class="btn btn-primary">PLAY NOW</a>
                                </div>
                              </div>
                              <div class="card" style="width: 18rem;">
                                <div class="card-body" style="background-image: url(images/soldier.jpg)">
                                  <h5 class="card-title">Soldier Survival</h5>

                                  <a href="#" class="btn btn-primary">PLAY NOW</a>
                                </div>
                              </div>
                              <div class="card" style="width: 18rem;">
                                    <div class="card-body" style="background-image: url(images/leprechaun-bg.jpg)">
                                      <h5 class="card-title">The Leprechaun Village</h5>

                                      <a href="#" class="btn btn-primary">PLAY NOW</a>
                                    </div>
                                  </div>
                                </div>
                                  <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-image: url(images/grandma-rollin.jpg)">
                              <h5 class="card-title">Grandma Rollin'</h5>

                              <a href="#" class="btn btn-primary">PLAY NOW</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-image: url(images/on-the-run.jpg)">
                              <h5 class="card-title">On the Run from Police</h5>

                              <a href="#" class="btn btn-primary">PLAY NOW</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-image: url(images/thief-in-the-night.jpg)">
                              <h5 class="card-title">Thief in the Night</h5>

                              <a href="#" class="btn btn-primary">PLAY NOW</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-image: url(images/out-of-space.png)">
                              <h5 class="card-title">Out of Space</h5>

                              <a href="#" class="btn btn-primary">PLAY NOW</a>
                            </div>
                          </div>
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
    
            <center>

            <div class="footer-copyright">© 2020 Copyright:
                  <a href="https://benjaminjuuljensen.dk">All Rights Reserved Benjamin Juul Jensen</a>
                    </div>

            </center>
  </footer>
  
  <!--- Footer --->

  <!--- Carousel --->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--- Carousel --->

</body>
</html>

<?php
    }
        else 
    {
        header("location: dblogin3.php");
    }
?>