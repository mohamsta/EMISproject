
<?php
include("ActivityBar.php");
echo'
<html>
<div class="main">
<h1>Update Account Details</h1>
<body>
<h2>General: </h2>
<p>New name on account:</p>

	<div class="input-grooup">
	  <input type="text" id="name"/>
	</div>

	<button onclick="myFunction()">Disable Text field</button>
	<script>
	function myFunction() {
    		document.getElementById("name").disabled = true;
	}
	</script>
<p>New email on account(log in): </p>

	<div class="input-grooup">
	  <input type="text" id="email"/>
	</div>
	
	<button onclick="myFunction1()">Disable Text field</button>
	<script>
	function myFunction1() {
    		document.getElementById("email").disabled = true;
	}
	</script>
	
<h3>Personal</h3>';
echo'
<p>New birthday</p>
	<div class="input-grooup">
	  <input type="text" placeholder = "For corrections"  id="bday"/>
	</div>
	
	<button onclick="myFunction2()">Disable Text field</button>
	<br>
	<script>
	function myFunction2() {
    		document.getElementById("bday").disabled = true;
	}
	</script>
	<br>

<form method="post">
<label> Password </label>
<br>
<input type="text" placeholder="Veify Identity" name="password"><br/>
	<br>
	<div class="input-group">
	  <button type="submit" class="btn" name="submit">Submit information</button>
	</div>
	</br>
</form>
</div>
</body>
</html>

';


?>
