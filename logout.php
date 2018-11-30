<?php
/**
 * Created by PhpStorm.
 * User: zoeya
 * Date: 11/30/2018
 * Time: 12:55 PM
 */

session_start();
$_SESSION = array();
session_destroy();
header("location: signIn.php");
exit;
?>