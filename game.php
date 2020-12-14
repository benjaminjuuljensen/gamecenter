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

<!--- Counter --->

<body class="game" onload="countDown();">

<!--- Counter --->


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

   <!--- Pagination --->
    
   <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="levels.php"><i class="far fa-arrow-alt-left"></i>Previous</a></li>
  </ul>
</nav>

   <!--- Pagination --->

<!--- Game header --->

<center>
    <div class="header" width="1000" height="100" style="background-image: url(images/map.png)">
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">Level 1</li>
               <li class="list-group-item">
                   <div class="countdown">  
                       <input class="minutes" id="minutes" type="text"> :
                           <input class="seconds" id="seconds" type="text"> 
                      </div>
                   </li>
                   <img src="images/ruby.png" height="20"><li id="rubyCollector" class="list-group-item">0</li>
          </ul>
     </div>



<!--- Game header ---> 

<!--- Canvas --->


        <canvas width="1000" height="500" id="canvas"></canvas>
           
<!--- Canvas --->            

<!--- Game footer --->   

 <div class="footer" width="1000" height="100" style="background-image: url(images/map.png)">
          <button id="mute"><i class="fas fa-volume-slash"></i></button>
             <button id="replay"><i class="fas fa-redo"></i></button>           
  </div>

<!--- Game footer --->  

   
    </center>
  
  


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

<script src="main.js"></script>    
</body>
</html>

<?php
    }
        else 
    {
        header("location: dblogin3.php");
    }
?>