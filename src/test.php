<?php 

session_start();
// var_dump( $_SESSION).'<br>';
session_unset();
session_destroy();
var_dump( $_SESSION);
echo  '<br><a href="index.php">push for home</a>'
?>