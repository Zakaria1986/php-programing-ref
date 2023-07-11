<!-- http://localhost:8888/php_prac/php-programing-ref/mysqli_&_PHP_integration/index.php -->

<?php
require_once('./db.php');

// update rows 
$updateUser = $db->query('UPDATE users SET last_name = "Ahmed" WHERE id = 1'); 
var_dump($updateUser); 