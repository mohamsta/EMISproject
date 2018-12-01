<?php include('topMenu.php'); 
require_once"config.php";?>
<!DOCTYPE html>
<html>
<body>
  <div class="header">
	<h2>Register</h2>
  </div>

  <form method="post" action="regTes.php">
	<?php include('errors.php'); ?>
	<div class="input-grooup">
	  <label>Name</label>
	  <input type="text" name="name" value="<?php echo $name?>">
	</div>
	<br/>
	<div class="input-group">
	  <label>Username</label>
	  <input type="text" name="username" value="<?php echo $username; ?>">
	</div><br/>
	<div class="input-group">
	  <label>Email</label>
	  <input type="email" name="email" value="<?php echo $email; ?>">
	</div><br/>
	<div class="input-grooup">
	  <label>Birthday</label>
	  <input type="text" name="birth" value="<?php echo $birth?>">
	</div>
	<br/>
	<input type="radio" name="gender" />  Female</>
	<input type="radio" name="gender" />  Male</>
	<input type="radio" name="gender" />  Other</>
	<br/><br/><div class="input-grooup">
	  <label>SSN</label>
	  <input type="text" name="ssn" value="<?php echo $ssn?>">
	</div><br/>
	<div class="input-group">
	  <label>Password</label>
	  <input type="password" name="Pswd">
	</div><br/>
	<div class="input-group">
	  <label>Confirm password</label>
	  <input type="password" name="password_2">
	</div><br/>
	<div class="input-group">
	  <button type="submit" class="btn" name="submit">Register</button>
	</div><br/>
<?php
if(array_key_exists('submit',$_POST)){
	echo"reached hererereree";
	$sql = "INSERT INTO Users ( username, password, access)
	VALUES ($username, $Pswd, 1)";
	$pdo->exec($sql);
}
?>
  </form>
</body>
</html>
