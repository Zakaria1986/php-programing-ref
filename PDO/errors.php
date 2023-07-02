<?php

/*
** Intermediate PHP concepts
** PDO CONCEPTS and work flow of dabases connection
*/
// require_once('dbcon.php');



//creating PDO database connection, below we are connecting to mysql,
// pdo_drivers() this give you array of drivers this gets the first times on the array which is mysql: pdo_drivers()[0]

ini_set('display_error', 'On');

$db = new PDO(pdo_drivers()[0].':host=localhost;dbname=user','root', 'root'); 

// ways to controle error message in php
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// try control is another way to catch errors 
try(
    $db->query("INVALID"); 
)catch(PDOException $e){
    var_dump($e->getMessage()); 
}