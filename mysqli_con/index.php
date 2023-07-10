<?php
require_once('./db.php');

$user = $db->query('SELECT * FROM users WHERE id =1');




$user = $user->fetch_assoc(); 

echo '<pre>', var_dump($user['email']) , '</pre>'; 
echo $user["email"];