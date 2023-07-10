<?php
$host = 'localhost'; 
$user = 'root'; 
$password = 'root'; 
$database = 'user'; 

$db = new mysqli($host, $user, $password, $database); 

if($db ->connect_errno !== 0){
    die('We are down at the moment, try again in a week time'); 
}


// echo '<pre>', var_dump($db) , '</pre>'; 