<?php

session_start();

// If the user is not logedin or the session is not set then the if statement will be execute
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome <?php echo $_SESSION['username'];?></title>
</head>
<body>
<?php
    require "partials/nav.php";
    ?>

    <h1>Welcome to the page <?php echo $_SESSION['username'];?></h1>

</body>
</html>