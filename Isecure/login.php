<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require "partials/dbconn.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
    $result = mysqli_query($conn,$sql);

    // This is the main method always remember this...
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "user is found";
        session_start();
        $_SESSION['loggedin'] = true ; 
        $_SESSION['username'] = $username ; 
        $_SESSION['password'] = $password ; 

        // To redirect the user. This is the main method for rediricting the user form one page to the other page
        // Syntax : header("location : file_name.php");
        
        header("location: welcome.php");

    }
    else{
        echo "not found";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
    require "partials/nav.php";
    ?>
    <h1>Login Page</h1>

    <div class="container">
    <form action="/Isecure/login.php" method="post">
    <input type="text" name="username" placeholder="username" id="">
    <input type="password" name="password" placeholder="Password" id="">
    <button type="submit">Sing in</button>
    </form>

</body>
</html>