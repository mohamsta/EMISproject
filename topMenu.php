<?php
session_start();

echo '<html>
	<head>
	<style>
	.container {
		position: relative;
		text-align: center;
		color: black;
	}
	.centered{
		postion: absolute;
		top: 0%;
		left:50%
		transform: translate(-50%, -50%);
	}
	.topnav{
		position: relative;
		background-color: #000000;
		overflow: hidden;
	}
	.topnav a {
		float: right;
		color: #f2f2f2;
		padding: 10px 12px;
		text-decoration: none;
		font-size: 18px;
	}
	</style>
	<div class="topnav">';
	print('<a href="aboutUs.php">About Us</a>');
	if(!isset($_SESSION['loggedin'])){
		print('<a href="signIn.php">Sign In</a>');
		print('<a href="regTes.php">Register</a>');
	}else{
		echo"yoo $sessionId";
		print('<a href="signOut.php">Sign Out</a>');
	}
	print('<a href="Main_Prof.php">ActivityPage</a>');
	print('<a href="index.php">HomePage</a>');
	echo '</div>';
	echo '</head>';	
?>
