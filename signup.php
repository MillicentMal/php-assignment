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
error_reporting(0);
require("connect_mysql.php");
if(isset($_POST["submit"])) {
        // $id = $_POST["id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users(first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

        if(mysqli_query($connection,  $query)) {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
  }
        
        else {
            echo "<h1> THE X-MEN GALLERY.</h1>";

        }
    }

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
            <input type="text" class="form-control" name="last_name" placeholder="Last name" >
            </div>
            <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First name" >
            </div>
            <div class="mb-3">
            
        <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
        
     
        <button type="submit" class="btn btn-primary">SIGNUP</button>
        <p class="link"><a href="signup.php">New Registration</a></p>
        </div>
  </form>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>