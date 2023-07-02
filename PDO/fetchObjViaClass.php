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



<?php

class UserCl{
   public function getId(){
      return  $this->id; 
     }

  public function getNames(){
   return  $this->first_name ." ". $this->last_name; 
  }

  public function getEmail(){
   return  $this->email; 
  }

  public function getCreated(){
   return  $this->created; 
  }
}
// this line binds the class with the $users database query
$users->setFetchMode(PDO::FETCH_CLASS, 'UserCl');
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
<h4>Pulling in data from database via class methods:</h4>
<?php
// using foreach loop:
   
while( $usersVal = $users->fetch() ): ?>
   <div class='user'>
     
      <p><strong>User id:</strong> <?php echo $usersVal->getId() ?> </hp><br/>
      <p><strong>User name:</strong> <?php echo $usersVal->getNames() ?> </hp><br/>
      <p><strong>User email:</strong> <?php echo $usersVal->getEmail() ?> </hp><br/>
      <p><strong>User created:</strong> <?php echo $usersVal->getCreated() ?> </hp><br/>

      </div><br/>
   <?php endwhile ?>

</body>
</html>