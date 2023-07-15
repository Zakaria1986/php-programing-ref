<!-- http://localhost:8888/php_prac/php-programing-ref/mysqli_&_PHP_integration/index.php -->

<?php
// Loading database
require_once('./db.php');
?>
<!-- prepared statement, you bind some value so you don't have to use real_escape_string() -->

<?php 
$userQuery = $db->query("SELECT * FROM users"); 
$userQuery->fetch_object()->email;
echo var_dump($userQuery); 

// Use free free() up query everytime you fetch a result. 
$userQuery->free(); 
?>