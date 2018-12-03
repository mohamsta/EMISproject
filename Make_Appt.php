<?php
include("ActivityBar.php");
include("moAlender.php");
echo'
<html>
<div class="main">
<body>
<h3>Pick a date to sign up</h3>
<form method="post">
<label>Date: </label>
<input type="text" placeholder="new" name="pass"><br/>
</form>
Calender:';
echo draw_calendar(12,2018);
echo'
</div>
</body>
</html>

';


?>

