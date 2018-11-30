<?php
/**
 * Created by PhpStorm.
 * User: zoeya
 * Date: 11/30/2018
 * Time: 12:42 PM
 * This file is just to test the logout function
 */

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true){
    header("location: signIn.php");
    exit;
}
?>
<html lang="en">
<body>
    <div style="padding-bottom: 9px; margin: 40px 0 20px; border-bottom: 1px solid #eee;">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]);?>
            </b>Welcome to our site</h1>
    </div>
    <p>
        <a href="logout.php" style="...">Log Out></a>
    </p>
</body>
</html>
