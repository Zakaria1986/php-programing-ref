<?php
$host = 'localhost'; 
$user = 'root'; 
$password = 'root'; 
$database = 'user'; 

$db = new mysqli($host, $user, $password, $database); 

if($db ->connect_errno !== 0){
    die('We are down at the moment, try again in a week time'); 
}

// Fetching the data
$user = $db->query('SELECT * FROM users');







// phpinfo(); 
// echo "<a>http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']."</a>";
// echo $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME'];
// $name = setcookie('name', 'Flavio');

