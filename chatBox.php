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

<div class="containerBox">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="containerBox darker">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="containerBox">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="containerBox darker">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>
</div>
</body>
</html>

