<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
<link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    require('connect_mysql.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($connection, $username);
        $userPassword = stripslashes($_REQUEST['password']);
        $userPassword = mysqli_real_escape_string($connection, $userPassword);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $user = mysqli_fetch_assoc($result);
        if ($rows == 1 && password_verify($userPassword, $user['password'])) {
            $_SESSION['username'] = $username;

            // Redirect to user dashboard page
            header("Location: display.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>
                  <p class='link'>Click here to <a href='read.php'>Just view our X-Men</a>.</p>
                  </div>";


        }
  
    } else {
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">X-Men</a>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
          <li class="nav-item">
            <a class="nav-link active text-light" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="read.php">View X-Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="public.php" tabindex="-1" aria-disabled="true">Learn More</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<section class="background-image">
   
</section>

<form class="form" method="post" name="signup">
<div class="form-group">
        <h1 class="login-title text-success">Signup</h1>
        <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" >
        </div>

            <div class="mb-3">
            
        <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
        
     
        
            <button type="submit" class="btn btn-primary">Login</button>
        <p class="link"><a href="signup.php">No Account? SignUp</a></p>

  </form>
  
 
<?php
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>