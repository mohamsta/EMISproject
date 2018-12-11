<?php
include("topMenu.php");
?>

<?php
echo'
 <h2> Contact Us </h2>';
echo'</p>'
?>

<?php

<div id="chatbox"><?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?></div>
