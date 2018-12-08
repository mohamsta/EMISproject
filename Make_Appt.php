<?php
include("ActivityBar.php");
include("moAlender.php");
?>

<html lang ="en">
<div class="main">
    <body>
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


    

</div>
</body>
</html>






