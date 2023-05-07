<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "partials/dbconn.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    // To check the user is exist or not 
    // $existuser = "SELECT * FROM `user` WHERE username = $username";
    // $result = mysqli_query($conn , $existuser);
    // $numexistrow = mysqli_num_rows($result);
    // if($numexistrow > 0){
    //     echo "Username is already exist";
    // }
    // else{
    // }
    if($password == $cpassword){
    $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')"; 
    $result = mysqli_query($conn, $sql);
    echo "User is created";         
    }else{
        echo "Password do not match";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing In</title>
</head>
<body>
<?php
    require "partials/nav.php";
    ?>
  <h1>Sing in </h1>
<div class="container">
    <form action="/Isecure/singin.php" method="post">
    <input type="text" name="username" placeholder="username" id="">
    <input type="password" name="password" placeholder="Password" id="">
    <input type="password" name="cpassword" placeholder="Confirm Password" id="">
    <button type="submit">Sing in</button>
    </form>
</div>

</body>
</html>