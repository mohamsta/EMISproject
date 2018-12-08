<?php
include("ActivityBar.php");
include("moAlender.php");
include("form.php");
?>

<html lang ="en">
<div class="main">
<body bgcolor="67e5b7">
<h3>Pick date to schedule appointment now!</h3>
<form method="post">
<label>Date: </label>
<input type="text" placeholder="new" name="pass"><br/>
</form>
<!--alender:';-->
<!--//echo draw_calendar(12,2018);-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Display button bar</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                showButtonPanel: true
	});
	});
    </script>

</head>
<p>Date: <input type="text" id="datepicker"></p>

<button onclick="myFunction()">Set Appointment Time</button>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Resizable - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            #resizable { width: 150px; height: 150px; padding: 0.5em; }
            #resizable h3 { text-align: center; margin: 0; }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#resizable" ).resizable();
            } );
        </script>
    </head>

    <div id="resizable" class="ui-widget-content">
        <h3 class="ui-widget-header">Resizable</h3>
    </div>



</div>
</body>
</html>








