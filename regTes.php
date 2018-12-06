<?php include('topMenu.php'); 
require_once"config.php";?>
<!DOCTYPE html>
<html>
<body>
  <div class="header">
	<h2>Register</h2>
  </div>

  <form method="post" action="regTes.php">
	<div class="input-grooup">
	  <label>Name</label>
	  <input type="text" name="name"/>
	</div>
	<br/>
	<div class="input-group">
	  <label>Username</label>
	  <input type="text" name="userIn"/>	</div><br/>
	<div class="input-group">
	  <label>Email</label>
	  <input type="email" name="email">
	</div><br/>
	<div class="input-grooup">
	  <label>Birthday</label>
	  <input type="text" name="birth"/> 
	</div>
	<br/>
	<input type="radio" name="gender" />  Female</>
	<input type="radio" name="gender" />  Male</>
	<br/><br/><div class="input-grooup">
	  <label>SSN</label>
	  <input type="text" name="ssn"/>
	</div><br/>
	<div class="input-group">
	  <label>Password</label>
	  <input type="password" name="Pswd"/>
	</div><br/>
	<div class="input-group">
	  <label>Confirm password</label>
	  <input type="password" name="password_2">
	</div><br/>
	<div class="input-group">
	  <button type="submit" class="btn" name="submit">Register</button>
	</div><br/>
  </form>
<?php
$servername = "localhost";
$userDB = "EMISAdmin";
$password = "adPass";
$dbname = "EMISdb";
$user=$_POST["userIn"];
$Pswd=$_POST["Pswd"];
$ac=1;
if(array_key_exists('submit',$_POST)){
	echo".$user.";
	
	try{
		$con = new mysqli("localhost","EMISAdmin","adPass","EMISdb");
		$sql = "INSERT INTO Users (username, password, access)
		VALUES ('$user', '$Pswd', '$ac')";
		echo"--touched--";
		$con->query($sql);
		echo"--Registed Successfully--";
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
		echo"--NOT REGISTERED--";
	}

}
?>
</body>
</html>
