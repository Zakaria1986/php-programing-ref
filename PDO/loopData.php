<?php

/*
** Intermediate PHP concepts
** Looping through the data
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

// fetchAll gets all the array values
// while($usersVal =$users->fetchObject()){
//    echo $usersVal->email,"<br>";
// };

// while($usersVal =$users->fetchObject()){
//    echo $usersVal->email,"<br>";
// };



// echo $usersVal[0],'<br>';
// echo $usersVal['first_name'].'<br>';
// echo $usersVal['last_name'],'<br>';
// echo $usersVal['email'],'<br>';
// echo $usersVal['created'],'<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PDO</title>
</head>
<body>

<!-- Here we have looped through some objects and outputted the object data into browser  -->
<?php while($usersVal = $users->fetchObject()): ?>
   <div class='user'>
      <h4>User Id: <?php echo $usersVal->id ?> </h4>
   <p>User name: <?php echo $usersVal->first_name, " ",  $usersVal->last_name ?> </hp><br/>
   <p>User email: <?php echo $usersVal->email ?> </hp><br/>
   <p>User created: <?php echo $usersVal->created ?> </hp><br/>
</div><br/>
   <?php endwhile ?>
</body>
</html>