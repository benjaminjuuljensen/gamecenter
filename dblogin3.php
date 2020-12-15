<?php
    // Login form
    if (isset($_POST['submit'])) { //tjekker om variable er defineret
        require_once("dblogin1.php");
        // remove special characters
        // adding basic security (mysqli_real_escape_string) to avoid SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_POST['username']);
        $password = sha1($_POST['password']);

        $read = "SELECT * FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = $conn->query($read);
        $conn->close();
        // if the query is NOT returning anything there is no match in the database
        if (!$result->num_rows == 1) 
        {
            echo "<p>Invalid username/password</p>";
        } 
        else 
        {
            // start a PHP session
            session_start(); //i en session åbner du, gemmer, og lukker. computeren ved hvem du er
            $_SESSION['logged_in'] = true;
            //redirect and stop present code
            header("Location: menu.php"); 
            exit();      
        }
    }
?>

<html>
    <head>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-9ZfPnbegQSumzaE7mks2IYgHoayLtuto3AS6ieArECeaR8nCfliJVuLh/GaQ1gyM" crossorigin="anonymous">
    </head>
    <body class="login">

    <!--- Navbar --->
    <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                        <img src="images/logo.png" height="15" alt="" loading="lazy">
                      </a>
                <form class="form-inline">
                        <img src="images/dk.png" height="10">
                        <img src="images/usa.svg" height="10">
                </form>
              </nav>

    <!--- Navbar --->

    <!--- Pagination --->

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="index.html"><i class="far fa-arrow-alt-left"></i>Previous</a></li>
  </ul>
</nav>

<!--- Pagination --->

   <!--- Form --->
   <center>
       
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <img src="images/logo.png" height="30">
       <p>PLAY GAMES ONLINE</p>

       <h2>LOGIN</h2>
       <img src="images/profile.png" height="20"><input class="username" type="text" placeholder="Username" name="username">&nbsp;&nbsp; 
           <br>
           <br>
       <img src="images/key.png" height="20"><input class="password" type="password" placeholder="Password" name="password">&nbsp;&nbsp; 
           <br/>
           <br> 
       <input type="submit" class="submit" name="submit" value="Login">
       </form>
      
</center>

<!--- Form --->



</body>
</html>
