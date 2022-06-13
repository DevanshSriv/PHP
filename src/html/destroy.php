<?php 
session_start();
session_unset();
session_destroy();
echo '<a href="products.php">Back to Home</a>';


?>