<?php

$loggedin = true;
session_start();
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true){
    $loggedin = true;
}
echo '<h1>I Secure</h1>
<nav>
    <ul>';
    echo '
        <li><a href="login.php">Login</a></li>
        <li><a href="singin.php">Sing in</a></li>';

        if($loggedin == true){
        echo '<li><a href="welcome.php">Welcome</a></li>
        <li><a href="logout.php">Logout</a></li>';
         }
    echo '</ul>
</nav>';

?>