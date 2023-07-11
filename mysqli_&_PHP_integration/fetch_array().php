<?php
require_once('./db.php');

// Fetching dabase base data as arrays
while($rows = $user->fetch_array()): ?>

<h5><?php echo $rows['id'] ?></h5>
<h5><?php echo $rows['first_name'], " ", $rows['last_name'] ?></h5>
<h5><?php echo $rows['email'] ?></h5>
<h5><?php echo $rows['created'] ?></h5>

<?php endwhile ?>
