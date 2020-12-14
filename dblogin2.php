<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-9ZfPnbegQSumzaE7mks2IYgHoayLtuto3AS6ieArECeaR8nCfliJVuLh/GaQ1gyM" crossorigin="anonymous">
	</head>
    <body class="new-account">

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

        <h2>CREATE NEW ACCOUNT</h2>
        <img src="images/user+.png" height="20"><input class="username" type="text" placeholder="Username" name="username">&nbsp;&nbsp; 
            <br>
            <br>
        <img src="images/key.png" height="20"><input class="password" type="password" placeholder="Password" name="password">&nbsp;&nbsp; 
            <br/>
            <br>
        <img src="images/profile.png" height="20"><input class="name" type="text" placeholder="Name" name="name">&nbsp;&nbsp; 
            <br>
            <br>
        <input type="submit" class="submit" name="submit" value="Register">
        </form>
       
</center>

<!--- Form --->

    </body>
</html>

<?php 
    // Registration form
    if(isset($_POST['submit']))
    {
        require_once('dblogin1.php');
        // remove special characters
        // adding basic security (mysqli_real_escape_string) to avoid SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_POST['username']);
        // adding basic password hash encryption
        $password = sha1($_POST['password']);
        $name = $conn->real_escape_string($_POST['name']);
        // check if username exist, else insert
        $check = $conn->query("SELECT username from user WHERE username = '$username' LIMIT 1");
        if ($check->num_rows == 1) echo "<p>Username already exists!</p>";
        else 
        {
            $insert = "INSERT INTO user (id, username, password, name) VALUES (NULL, '$username', '$password', '$name')";
            if($conn->query($insert))
            {
                echo "New user witn name = " . $name . " registered!";
            }
            else
            {
                echo "Something went wrong";
            }
        }
        $conn->close();
    }
?>