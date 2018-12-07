<?php
include("ActivityBar.php");
include("moAlender.php");
echo'
<html>
<div class="main">
<body>
<h3>Pick a date to schedule an appointment!</h3>
<form method="post">
<label>Date: </label>
<input type="text" placeholder="new" name="pass"><br/>
</form>
Calender:';
//echo draw_calendar(12,2018);
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Icon trigger</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
  </script>
</head>


<p>Date: <input type="text" id="datepicker"></p>




echo'
</div>
</body>
</html>

';


?>

