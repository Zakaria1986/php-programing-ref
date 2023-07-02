<?php

/*
** Intermediate PHP concepts
** PDO CONCEPTS
*/
// require_once('dbcon.php');


// $query = "SELECT * FROM `users`";
//  $result = $conn->query($query);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " <br>Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>" . $row["created"]. "<br><br>";
//     }
//   } else {
//     echo "0 results";
//   }

//   $conn->close();


// ini_set('despaly_errors', "On"); 

//creating PDO database connection, below we are connecting to mysql,
// pdo_drivers() this give you array of drivers this gets the first times on the array which is mysql: pdo_drivers()[0]
try{
$db = new PDO(pdo_drivers()[0].':host=localhost;dbname=users','root', 'root'); 
// var_dump($db);
}catch(PDOEception $e){
  // var_dump($e->getMessage());
  die('Site is down');
}



