<?php
session_start();

include('topMenu.php');

require_once "config.php";

echo'<body>
	<div style="margin: auto; text-align: left;">
	
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

echo'<h1> what you enetered </h1> <br>';
echo $UsrName;
echo '<br/>';
echo $Pswrd;
echo '<br/>';


?>

