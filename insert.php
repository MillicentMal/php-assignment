<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- // enctype helps to submit the form to the server. -->
    <form action="main.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>ADD NEW HERO</h1>
            <label for="hero-name">
                <p0>Hero name</p0>
                <br>
                <textarea id="hero-name" cols="20" rows="1.5" name="hero_name"></textarea>
                <br>
                <p3>Hero real name</p3>
                <br>
                <textarea id="hero-real-name" cols="20" rows="1.5" name="real_name"></textarea>
            </label>
            <br>
            <br>
            <label for="heroe-bio">
                <p1>Hero short bio</p1>
                <br>
                <textarea id="hero-short" cols="20" rows="5" name="short_bio"></textarea>
                <br>
                <p2>Hero Long bio</p2>
                <br>
                <textarea id="hero-long" cols="30" rows="10" name="long_bio"></textarea>
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
    //importing other php files 
    include "connect_mysql.php";
    error_reporting(0);
    include "image.php";
    
    //Checking whether any information has been submitted.
    if(isset($_POST["submit"])) {
        // $id = $_POST["id"];
        $hero_name = $_POST["hero_name"];
        $real_name = $_POST["real_name"];
        $short_bio = $_POST["short_bio"];
        $long_bio = $_POST["long_bio"];
        // Inserting the values from the form into the database
        $query = "INSERT INTO heroes_table(hero_name, real_name, short_bio, long_bio, image) VALUES ('$hero_name', '$real_name', '$short_bio', '$long_bio', '$imageNewName')";
        
        //Checks if the connection was successful.
        if(mysqli_query($connection,  $query)) {
            echo "data inserted successfully";
            // header("location:read.php")
        }
        else {
            echo "data not inserted ". mysqli_error($connection);
        }

        // echo "$id<br>$hero_name<br> $real_name<br> $short_bio<br> $long_bio";
        // echo "id: " . $_POST["id"]. " hero name: ". $_POST["hero_name"];
    }
    ?>
</body>
</html>