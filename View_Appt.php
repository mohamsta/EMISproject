<?php
include("ActivityBar.php");
include("moAlender.php");

echo'
<html>
<div class="main">
<body>
<h3>Herer you can view all the appointments you are part of!</h3>
<form method="post">
<p>To cancel or create new click the sidebar<p>
<input type="text" placeholder="new" name="pass"><br/>
</form>';
echo draw_calendar(12,2018);
echo'
</div>
</body>
</html>

';


?>

