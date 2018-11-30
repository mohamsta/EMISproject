<?php
/**
 * Created by PhpStorm.
 * User: zoeya
 * Date: 11/25/2018
 * Time: 6:06 PM
 */

//Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'EMISAdmin');
define('DB_PASSWORD', 'adPass');
define('DB_NAME', 'EMISdb');

try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>