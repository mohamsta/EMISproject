<?php
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
		font-size: 17px;
	}
	
	</style>
	<div class="topnav">';
	if(!isset($_SESSION['loggedin'])){
		print('<a href="signIn.php">Sign In</a>');
		print('<a href="register.php">Register</a>');
		print('<a href="index.php">HomePage</a>');
	}else{
		print('<a href="signOut.php">Sign Out</a>');
		print('<a href = "activityMenu.php">Activity Menu</a>');
	}
	echo '</div>';
	echo '</head>';	
?>
