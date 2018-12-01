<?php
/**
 * Created by PhpStorm.
 * User: zoeya
 * Date: 11/30/2018
 * Time: 12:42 PM
 * This file is just to test the logout function
 */

include('topMenu.php');

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true){
    header("location: signIn.php");
    exit;
}
else if (isset($_SESSION["username"])) {
    if ((time() - $_SESSION["loggedin_time"]) > 5) {
        header("location:logout.php");
        exit;
    } else {
        $_SESSION["loggedin_time"] = time();
    }
}
?>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="900">
</head>
<body>
    <div style="padding-bottom: 9px; margin: 40px 0 20px; border-bottom: 1px solid #eee;">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]);?>
            </b>Welcome to our site</h1>
    </div>
    <p>
        <a href="logout.php" style="...">Log Out ></a>
    </p>
</body>
</html>
