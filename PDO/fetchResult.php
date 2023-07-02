<?php

/*
** Intermediate PHP concepts
** Basic query
*/
// require_once('dbcon.php');



//creating PDO database connection, below we are connecting to mysql,
// pdo_drivers() this give you array of drivers this gets the first times on the array which is mysql: pdo_drivers()[0]

ini_set('display_error', 'On');

$db = new PDO(pdo_drivers()[0].':host=localhost;dbname=user','root', 'root'); 

// Selecting database results
$users = $db->query("
   SELECT * FROM users
");

// echo '<pre>',var_dump($users->fetch(PDO::FETCH_OBJ)),'</pre>';
// echo '<pre>',var_dump($users->fetchOBJECT()->email),'</pre>';

// fetchAll gets all the array values
$usersVal =$users->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>', var_dump($usersVal), '</pre>';

// echo $usersVal[0],'<br>';
// echo $usersVal['first_name'].'<br>';
// echo $usersVal['last_name'],'<br>';
// echo $usersVal['email'],'<br>';
// echo $usersVal['created'],'<br>';
