<?php
include "connect_mysql.php";
if(isset($_GET["deleteId"])) {  # get method helps access the params in header
    $delId = $_GET["deleteId"];
    $query = "DELETE FROM heroes_table WHERE id=$delId";

    if(mysqli_query($connection, $query)) {
        // header("Location:read.php");
        echo "<h1>section deleted</h1>";
    }
    else {
        echo "not deleted";
    }
}


?>