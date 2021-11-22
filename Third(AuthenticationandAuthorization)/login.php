<?php
    require 'connection.php';
    session_start();
    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $remember = $_POST['remember'];

        if($remember == 1){
            setcookie('username', $userName, time()+60*60*24*10, "/");//for 10 days
            setcookie('usermail', $email, time()+60*60*24*10, "/");//for 10 days
            setcookie('userpassword', $password, time()+60*60*24*10, "/");//for 10 days
        }
        else{
            //Destroying the Cookie by the setting time to less than one hour
            setcookie('username', $userName, time()-3600, "/");
            setcookie('usermail', $email, time()-3600, "/");
            setcookie('userpassword', $password, time()-3600, "/");
        }

        $sql = "SELECT * FROM `user_details` WHERE `Username` = '$userName' AND `EmailID` = '$email' AND `pwd` = '$password'";
        echo $sql;

        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Error: ".$sql ."<br>".mysqli_error($conn);
        }
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            $_SESSION['user'] = $userName;
            echo "Session Created in the name of {$userName}";
            header("location: home.php");
        }
        else{
            echo "<br>";
            echo "Total Count is: {$count}";
            echo "<br>";
            echo "{$userName} Not found";
            echo "<br>";
            echo "{$email} Not found";
            echo "<br>";
            echo "{$password} Not found";
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
    <title>Login Page</title>
</head>
<body>
<form method="post">
        <label>UserName: </label><input type="text" name="userName" placeholder="Enter Your Username:" autocomplete="off" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>"><br>
        <label>Email Address: </label><input type="email" name="email" placeholder="Enter your Email ID" autocomplete="off" value="<?php if(isset($_COOKIE['usermail'])) echo $_COOKIE['usermail'] ?>"><br>
        <label>Password: </label><input type="password" name="pwd" placeholder="Enter your Password" autocomplete="off" value="<?php if(isset($_COOKIE['userpassword'])) echo $_COOKIE['userpassword'] ?>"><br>
        <input type="checkbox" name="remember" value="1"> <label>Remember Me</label><br>
        <button name="submit">Submit</button>        
    </form>    
</body>
</html>