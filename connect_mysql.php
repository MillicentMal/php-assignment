<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbname = "heroes";
    //Connecting to the database 
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbname);
    
    //Checking to see if the database has been connected successful. 
    if($connection) {
        // echo "database connected";
    }

    else {
        // echo "database not connected";
    }

    ?>
</body>
</html>