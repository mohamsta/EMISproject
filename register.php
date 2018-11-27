<?php
session_start();

include('topMenu.php');

$servername ="localhost";
$username="EMISAdmin";
$password="adPass";
try	{
		$conn = new PDO("mysql:host=$servername;dbname=EMISdb", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo"REGISTRATION";

	}
catch(PDOException $e){
		echo "Connection failed: " .$e->getMessage();
	}

echo'<body>
	<div style="margin: auto; text-align: left;">
	<form method="post">
	<br/><br/><br/><label>First Name:</label>
	<input type="text" placeholder="First Name" name="First Name"><br/>
	<br/>
	<label>Last Name:</label>
	<input type="text" placeholder="Last Name" name="Last Name"><br/>
	<br/>
	<label>Email:   </label>
	<input type="text" placeholder="Email" name="Email"><br/>
	<br/>
	<label>Birth Date:   </label>
	<input type="text" placeholder="Birth Date" name="BDay"><br/>
	<br/>

	<input type="radio" name="gender" />  Female</>
	<input type="radio" name="gender" />  Male</>
	<input type="radio" name="gender" />  Other</>
	</form>


	<label>Work Number:   </label>
	<input type="text" placeholder="Work Number" name="WorkNum"><br/>
	<br/>
	<label>Cell Number:   </label>
	<input type="text" placeholder="Cell Number" name="CellNum"><br/>
	<br/>
	<label>SSN:   </label>
	<input type="text" placeholder="Social Security Number" name="SSN"><br/>
	<br/>
	<label>User Name:   </label>
	<input type="text" placeholder="New User Name" name="UsrName"><br/>
	<br/>
	<label>Password:   </label>
	<input type="text" placeholder="Password" name="Pswrd"><br/>
	<br/>
	<label>Password:   </label>
	<input type="text" placeholder="Verify Password" name="Pswrd"><br/>
	<br/>
	<input type="submit" value="Register">
	</form>
	</div>
	</body>';
?>
