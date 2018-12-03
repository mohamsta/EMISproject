
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

	
	<button onclick="myFunction()">Disable Text field</button>
	<script>
	function myFunction() {
    		document.getElementById("email").disabled = true;
	}
	</script>
	
<h3>Personal</h3>';
echo'
<p>New birthday</p>
	<div class="input-grooup">
	  <input type="text" id="bday"/>
	</div>

	
	<button onclick="myFunction()">Disable Text field</button>
	<script>
	function myFunction() {
    		document.getElementById("bday").disabled = true;
	}
	</script>
<form method="post">
<label>pass: </label>
<input type="text" placeholder="new" name="password"><br/>
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
