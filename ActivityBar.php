<?php
include("topMenu.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 170px;
    position: fixed;
    z-index: 1;
    top: 40;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818182;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 175px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="Main_Prof.php">Main Prof</a>
  <a href="Acount_Details.php">Account Details</a>
  <a href="Make_Appt.php">Make Appt.</a>
  <a href="View_Appt.php">View Appt.</a>
  <a href="Cancel_Appt.php">Cancel Appt.</a>
  <a href="Update_Info.php">Update Info</a>>
  <a href="chatBox.php">Chat Box</a>
<?php
	print('<a href="Todays_Appt.php">Today\'s Appointment</a>>');
?>
</div>

     
</body>
</html> 
