<?php
session_start();

include('topMenu.php');

$servername ="localhost";
$username="EMISAdmin";
$password="adPass";
try	{
		$conn = new PDO("mysql:host=$servername;dbname=EMISdb", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo"Connected successfully";

	}
catch(PDOException $e){
		echo "Connection failed: " .$e->getMessage();
	}

echo'<body>
	<div style="margin: auto; text-align: center;">
	<form method="post">
	<br/><br/><br/><label>Username:</label>
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
