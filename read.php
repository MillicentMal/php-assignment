<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .image {
        width: 500px;
        height: 500px;
    }
</style>
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
            <a class="nav-link active text-light" href="insert.php" tabindex="-1" aria-disabled="true">Add A new Hero</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <main style="height:100vh;">
    <?php
    error_reporting(0);
    include "connect_mysql.php";

    $query = "SELECT * FROM heroes_table;";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo "id: $row[id] <br>hero_name: $row[hero_name]<br> real name: $row[real_name]<br>
            // short bio: $row[short_bio]<br>long bio: $row[long_bio]";

            echo "<div class='container-md'>
            <div class='row gx-5'>
                <div class='col-3 col-sm'>
            <div class='card' style='width: 18rem;'>
            <img src='uploads/$row[image]' name='image' class='card-img-top img-fluid'>
              <div class='card-body'>
                <h5 class='card-title'>$row[hero_name].: $row[real_name]</h5>
                <p class='card-text'>$row[short_bio]</p>
              </div>
               <div class='card-body'>
               <p class='card-text'>$row[long_bio]</p>
              </div>
            </div>
            </div>
            </div>
            </div>";
        }
    }
    else {
    ?>
    <section class='fallback'>
        <div class='container'>
            <div class='card'>
                
        <img class='img-fluid' style='width:50vw; height:50vh;' src="styles/images/img/pictures/Marvel-Professor-X-Cerebro.webp" alt="">
            <h5 class='card-title'>
                PROFESSOR X </h5>
            <p class='card-text'>

            Xavier is a member of a subspecies of humans known as mutants, who are born with superhuman abilities. He is an exceptionally powerful telepath, who can read and control the minds of others. To both shelter and train mutants from around the world, he runs a private school in the X-Mansion in Salem Center, located in Westchester County, New York.[1] Xavier also strives to serve a greater good by promoting peaceful coexistence and equality between humans and mutants in a world where zealous anti-mutant bigotry is widespread.

Throughout much of the character's history in comics, Xavier is a paraplegic using a standard or modified wheelchair. One of the world's most powerful mutant telepaths, Xavier is a scientific genius and a leading authority in genetics. He has devised Cerebro and other equipment to enhance psionic powers and detect and track people with the mutant gene.

From a social policy and philosophical perspective, Xavier deeply resents the violent methods of those like his former close friend and occasional enemy, the supervillain Magneto. Instead, he has presented his platform of uncompromising pacifism to see his dream to fruition – one that seeks to live harmoniously alongside humanity with full civil rights and equality for mutants. Xavier's actions and goals have been compared to those of Martin Luther King Jr. and the American civil rights struggle,[2] whereas Magneto is often compared with the more militant civil rights activist Malcolm X.[2]

The character's creation and development occurred during the civil rights struggle of the early 1960s; Xavier's first appearance was in 1963. The fictionalized plight of mutantkind faced with intolerance and prejudice was meant to illuminate to audiences of the day what was transpiring across the United States and to promote ideals of tolerance and equality for all.[3]
    </p>            
</div>
</div>
    </section>
    <?php
    }


?>
</main>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>