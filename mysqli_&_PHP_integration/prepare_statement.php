<!-- http://localhost:8888/php_prac/php-programing-ref/mysqli_&_PHP_integration/index.php -->

<?php
// Loading database
require_once('./db.php');
?>
<!-- prepared statement, you bind some value so you don't have to use real_escape_string() -->

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


   $l_name = $_POST['last_name'];  
   $f_name = $_POST['first_name']; 
   $email =  $_POST['email']; 

    $insert = $db->prepare("INSERT INTO users (first_name, last_name, email) VALUES(?,?,?)"); 

//    bind_param("sss", $f_name, $l_name,  $email);
   $insert-> bind_param("sss", $f_name, $l_name, $email);


    $insert->execute();; 
    $insert->close();
}