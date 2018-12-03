<?php
session_start();
session_destroy();
echo'You have Been logged out, in 3 seconds you should be redirected to the homepage';
header( "refresh:2;url=index.php" );
?>;
