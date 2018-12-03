<?php
include("ActivityBar.php");
include("moAlender.php");
echo'
<html>
<div class="main">
<h1>Pick a date to Cancel</h1>
<body>
<form method="post">
<label>Date: </label>
<input type="text" placeholder="new" name="pass"><br/>
</form>';
echo draw_calendar(12,2018);
echo'
</div>
</body>
</html>

';


?>

