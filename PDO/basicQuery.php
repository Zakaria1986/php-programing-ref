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


// var dumping db connection, now we know PDO is an object method and its has variety methods on it, example would be different drivers. 
// var_dump($db);

// updating database
// $udpateUser = $db->query("
//     UPDATE users
//     SET last_name = 'Khan' 
//     WHERE id = 1 
// ");

// var_dump($udpateUser);

// Selecting database results
$udpateUser = $db->query("
   SELECT * FROM users
");

var_dump($udpateUser);