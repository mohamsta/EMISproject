<?php
session_start();

include('topMenu.php');

echo'<body>
	<div style="margin: auto; text-align: center;">
	<form method="post">
	<label>Username:</label>
	<input type="text" placeholder="username" name="username"><br/>
	<br/>
	<label>Password:</label>
	<input type="text" placeholder="password" name="password"><br/>
	<br/>
	<input type="submit" value="Sign In">
	</form>
	<br/><a href="register.php" style="text-decoration: none;">Register here</a>
	<br/><a href="forgotpassword.php" style="text-decoration: none;">Forgot Password</a>
	</div>
	</body>';
?>
