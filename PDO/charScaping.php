<?php

/*
** Intermediate PHP concepts
** PDO CONCEPTS: 
*/


$db = new PDO('mysql:host=localhost; dbname=user', 'root', 'root');


if(!empty($_GET("query"))){
    echo $userId = (int)($_GET["query"]); 
    $query = $db->query('SELECT * FROM users WHERE id = 1');
    $result = $query->fetchObject(); 
    var_dump($result);
}