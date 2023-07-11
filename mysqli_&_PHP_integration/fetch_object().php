<?php
require_once('./db.php');

<?php while($rows = $user->fetch_object()) : ?>
    <h5><?php echo $rows->id; ?></h5>
    <h5><?php echo $rows->first_name, " ",  $rows->last_name; ?></h5>
    <h5><?php echo $rows->email; ?></h5>
    <h5><?php echo $rows->created; ?></h5>
 <hr class="solid">
    <?php endwhile ?>

<h2>fetching data as array</h2>
    <?php     
    while($rows = $user->fetch_array()) : ?>
        <?php echo var_dump($rows); ?>

    <?php endwhile ?>




