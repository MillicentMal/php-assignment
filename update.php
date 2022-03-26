<?php 
    include "connect_mysql.php";
    error_reporting(0);
    if(isset($_GET["updateId"])) {
        $getid = $_GET["updateId"];

        $query = "SELECT * FROM heroes_table WHERE id=$getid";

        if($result = mysqli_query($connection, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                // $valueId = $row["id"];
                // echo $valueId;
                $valueHero = $row["hero_name"];
                // echo $valueHero;
                $valueReal = $row["real_name"];
                // echo $valueReal;
                $valueShort = $row["short_bio"];
                // echo $valueShort;
                $valueLong = $row["long_bio"];
                
                // echo $valueLong;
            }
            
        }
          
        else {
            echo "no such id";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
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
  <section class="background-image update">
   
</section>

    <form class="form-update" action="update.php" method="post" enctype="multipart/form-data">
  
            <h1>ADD NEW HERO</h1>
            <div class='form-group'>
            <input class='form-control' type="hidden" name="id" value=<?php echo $getid ?>>
            <label for="heroe-name">
                <p>Hero name</p>
  </div>
              <div class='form-group'>
                <textarea id="hero-name" cols="20" rows="1.5" name="hero_name"><?php echo $valueHero?></textarea>
                <p3>Hero real name</p3>
  </div>
  <div class='form-group'>
                <textarea id="hero-real-name" cols="20" rows="1.5" name="real_name"><?php echo $valueReal?></textarea>
            </label>
            <br>
            <br>
            <label for="heroe-bio">
                <p1>Hero short bio</p1>
                <br>
                <textarea id="hero-short" cols="20" rows="5" name="short_bio"><?php echo $valueShort?></textarea>
                <br>
                <p2>Hero Long bio</p2>
                <br>
                <textarea id="hero-long" cols="30" rows="7" name="long_bio"><?php echo $valueLong?></textarea>
            </label>
            <br>
            <label for="hero-img">
                <p4>Add new hero image :</p4>
                <input type="file" id="hero-img" name="image" accept="image/*">

            </label>
            <br>
            <button type="submit" name="submit"><p>SUBMIT</p></button>
        </div>
    </form>

    <?php
    include "image.php";
    if(isset($_POST["submit"])) {
        $id = $_POST["id"];

        $hero_name = $_POST["hero_name"];
        // echo $hero_name;
        $real_name = $_POST["real_name"];
        // echo $real_name;
        $short_bio = $_POST["short_bio"];
        // echo $short_bio;
        $long_bio = $_POST["long_bio"];
        $queryUpdate = "UPDATE heroes_table SET hero_name='$hero_name', real_name='$real_name', short_bio='$short_bio', long_bio='$long_bio', image='$imageNewName' WHERE id='$id'";

        $result = mysqli_query($connection, $queryUpdate);
        if($result) {
            echo "data updated";
            // header("location: read.php");
        }
        else {
            echo "error in update". mysqli_error($connection);
        }
    }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<footer>
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
</footer>
</body>
</html>