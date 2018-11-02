<?php
echo '<head>
	<div id = "top_bar">
	<div id="top_bar">
	<div class="title" id="name_title">
	<h1>hi</h1>';
	if(!isset($_SESSION['loggedin'])){
		print('<a href="signIn.php">Sign In</a>');
		print('<a href="register.php">Register</a>');
	}else{
		print('<a href="signOut.php">Sign Out</a>');
	}
	

?>
