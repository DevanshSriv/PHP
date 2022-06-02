<?php 
session_start();
session_unset();
session_destroy();
echo '<a href="todoA.php">Back to Home</a>';


?>