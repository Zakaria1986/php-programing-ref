<?php
require_once('./db.php');

$user = $db->query('SELECT * FROM users');
// $user = $user->fetch_assoc(); 

// echo '<pre>', var_dump($user) , '</pre>'; 
// echo $user["email"];

// while($rows= $user->fetch_assoc()){
//     echo '<pre>',var_dump($rows), '</pre>';
// }

while($rows = $user->fetch_assoc()): ?>

<h4>User id: <?php echo $rows['id'] ?></h4>
<h4>Full Name: <?php echo  $rows['first_name'] .' '. $rows['last_name']?></h4>
<h4>Email: <?php echo $rows['email']?></h4>
<h4>User Created: <?php echo $rows['created']?></h4><br>



<?php endwhile ?>