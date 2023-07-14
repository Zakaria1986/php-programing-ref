<!-- http://localhost:8888/php_prac/php-programing-ref/mysqli_&_PHP_integration/index.php -->

<?php
require_once('./db.php');

$insertData = "INSERT INTO users (email, first_name, last_name) VALUES('Tom','Alex','tome@hotmail.com')";

$db->query($insertData);

if($db->query($insertData) === true){

    echo 'Entered successfully'; 
}else{
    $db->error; 
}