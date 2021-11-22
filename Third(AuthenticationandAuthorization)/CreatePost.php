<?php
include "connection.php";
session_start();

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['desc'];
        // $file = $_FILES['file'];
        
        // //getting the name of the file
        // $fileName = $_FILES['file']['name'];

        // //getting the extension of the file
        // $extension = explode('.',$fileName);

        // $file_extension = end($extension);

        // //Rename the file
        // $fileName = "Uploaded_FILE_".rand(000,999).".".$extension;
        
        // //find the source path of the image
        // $sourcePath = $_FILES['file']['tmp_name'];

        // //The path where image will be stored
        // $destinationPath = "../Uploads".$fileName;

        // //Upload the Image
        // $upload = move_uploaded_file($sourcePath, $destinationPath);

        // //Check File is uploaded or not
        // if($upload == false){
        //     echo "File could not be uploaded! Please try again";
        //     die();
        // }

        $sql = "SELECT * FROM user_details WHERE Username = '{$_SESSION['user']}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $userid = $row['id'];
        echo $userid;
        
        $insertSql = "INSERT INTO `user_posts` VALUES('0','$userid','$title','$description')";
        $insertResult = mysqli_query($conn, $insertSql);
        if($insertResult){
            header("location:home.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Create Post</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>Title of the Post: </label><input type="text" name="title"><br>
        <!-- <label>Description: </label><input type="text" name="desc"><br> -->
        <label>Description: </label><textarea name="desc" cols="30" rows="10"></textarea><br>   
        <label>Image: </label><input type="file" accept="image/*" name="file"><br>
        <button name="submit">Submit</button>
    </form>    
</body>
</html>