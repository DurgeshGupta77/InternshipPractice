<?php
    require "connection.php";

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $emailID = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $password = $_POST['pwd'];
        $confirmPassword = $_POST['confirmPWD'];

        $sql = "INSERT INTO `user_details`(`Username`, `EmailID`, `PhoneNumber`, `Address`, `pwd`) VALUES ('$userName','$emailID','$phoneNumber','$address','$password')";

        if(mysqli_query($conn, $sql)){
            echo "New Record added successfully";
        }
        else{
            echo "Error: ".$sql ."<br>".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Registration Page</title>
</head>
<body>
    <form method="post">
        <label>UserName: </label><input type="text" name="userName" placeholder="Enter Your Username:" autocomplete="off"><br>
        <label>Email Address: </label><input type="email" name="email" placeholder="Enter your Email ID" autocomplete="off"><br>
        <label>Phone Number: </label><input type="number" name="phoneNumber" placeholder="Enter your Phone Number" autocomplete="off"><br>
        <label>Address: </label><input type="text" name="address" placeholder="Enter your address" autocomplete="off"><br>
        <label>Password: </label><input type="password" name="pwd" placeholder="Enter your Password" autocomplete="off"><br>
        <label>Confirm Password: </label><input type="password" name="confirmPWD" placeholder="Confirm your Password" autocomplete="off"><br>
        <button name="submit">Submit</button>        
    </form>    
</body>
</html>