<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display/heroe</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body {

    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">X-Men</a>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="signup.php">Create Account</a>
          </li>
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

    <div class="container-md">
        <div class ="hero-img">
            <img src="./uploads/heroe.png" alt="img" class="img-fluid">
        </div>
        <div class="hero-info">
            <h1>Hero name</h1>
            <br>
            <h1>Real name</h1>
            <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. 
                Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s......</p>
            <p></p>
            <br>
            <button type="reset" class="btn-1"><a href="update.php">Update</a> </button>
        </div>
    </div>
    <br>
    <br>

    <?php
    error_reporting(0);
    include "connect_mysql.php";

    $query = "SELECT * FROM heroes_table;";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {


            echo "<div class='container'>
            <div class='row row-cols-2'>
           <div class='col'>
            <div class ='cols-3'>
            <div class='col'>
             <img src='./uploads/$row[image]' class='img-fluid' alt='Hero Images'>
            </div>
          
            <div class='col'>
                <h1>$row[hero_name]</h1>
            </div>
            <div class='col'>
                <h1>$row[real_name]</h1>
            </div>
            <div class='col'>
                <p>$row[short_bio]</p><br><br>
            </div>
            <div class='col'>
                <p>$row[long_bio]</p>
            </div>
            </div>
        </div>";
        }
    }
    else {
 
    }
    ?>
  <footer>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">X-Men</a>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="signup.php">Create Account</a>
          </li>
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

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>