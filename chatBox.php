<?php
include("ActivityBar.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.containerBox {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.containerBox::after {
  content: "";
  clear: both;
  display: table;
}



.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>
<div class = main>
<h2>Chat Messages</h2>
  <p>Due to privacy your messages will be removed on refresh/leave<p>
  <p>Enter Message</p>
<form method="POST" action=''>  
<?php
echo'
<div class="input-group"> 
 <input type="text" name="chatIn"/></div>
 <div class="input-group"> 
<input type="submit" class="btn" name="submit">
</form>';
$sendMe = $_POST["chatIn"];
$submit = $_POST["submit"];
if(isset($submit)==TRUE){
	echo'
    <div class="containerBox">
  <p>'. $sendMe .'</p>
    <span class="time-right">11:02</span>
  </div>';
unset($submit);
}
?>
</div>
</body>
</html>

