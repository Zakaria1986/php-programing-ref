<?php
require_once('./db.php');


// Concating names into full name while making the query
$userCount = $db->query('SELECT id, email, created, CONCAT(first_name," ", last_name) as fullName,  FROM users');

// var_dumply the database return data
echo '<br>', var_dump($userCount);

// Here getting the num of rows which show the number of user, var_dum dumps out objects and object in php are access via arrow '->'
echo '<br><br>  We have total of ', $userCount->num_rows, " ueser.";
     
// Fetching dabase base data as arrays
while($rows = $userCount->fetch_array()): 

?>

<h5><?php echo $rows['id'] ?></h5>
<h5><?php echo $rows['fullName'] ?></h5>
<h5><?php echo $rows['email'] ?></h5>
<h5><?php echo $rows['created'] ?></h5>

<?php endwhile ?>