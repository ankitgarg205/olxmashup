<?php
session_start();
session_unset();
$_SESSION['FBID']=NULL;
$_SESSION['FULLNAME']=NULL;
$_SESSION['EMAIL']=NULL;
?>
<a href="indexfb.php">Login with Facebook</a></div>