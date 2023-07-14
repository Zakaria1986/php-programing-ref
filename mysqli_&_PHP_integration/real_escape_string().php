<!-- http://localhost:8888/php_prac/php-programing-ref/mysqli_&_PHP_integration/index.php -->

<?php
// Loading database
require_once('./db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String escaping</title>
</head>
<body>
        <form action="index.php" method="post" autocomplete="off">
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name" >
            <input type="text" name='last_name' id='last_name' placeholder="Enter last name">
            <input type="text" name='email' id='' placeholder="Enter email address">
            <input type="submit" name='submit'>
        </form>
</body>
</html>

<?php 

if(!empty($_POST['submit'])){
    // var_dump($_POST);
    $l_name = $db->real_escape_string($_POST['last_name']);  
    $f_name = $db->real_escape_string($_POST['first_name']); 
    $email = $db->real_escape_string($_POST['email']); 

    $insert = "INSERT INTO users (first_name, last_name, email) VALUES('$l_name','$f_name','$email')"; 

    if($db->query($insert) === true){
        echo 'Success'; 
    }
}




?>