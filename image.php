<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <button name="upload">submit</button>
    </form> -->

    
    <?php 
    if(isset($_POST["submit"])) {
        $image = $_FILES["image"];
        $imageName = $_FILES["image"]["name"];
        $imagetype = $_FILES["image"]["type"];
        $imagetmpname = $_FILES["image"]["tmp_name"];
        $imageError = $_FILES["image"]["error"];
        $imageSize = $_FILES["image"]["size"];

        $imageExt = explode(".", $imageName);
        $imageActualExt = strtolower(end($imageExt));
    
        $fileExt = array("jpg", "jpeg", "png");
        if(in_array($imageActualExt, $fileExt)) {
            if($imageError === 0) {
                if($imageSize < 10000000) {
                    $imageNewName = uniqid("IMG-", true). ".". $imageActualExt;
                    $imageDestination = "uploads/".$imageNewName;
                    move_uploaded_file($imagetmpname, $imageDestination);

                }
                else {
                    echo "image too large size!!";
                }
            }
            else {
                 echo "there was an error uploading this file!!";
            }
        }
        else {
            echo "you can't upload files of this type!!";
        }
    }
    
    ?>
</body>
</html>