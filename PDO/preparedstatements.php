<?php

/*
** Intermediate PHP concepts
** PDO CONCEPTS: prepared statement is used to update, delete, insert, crate. 
** perpared statement proves that extra bit of security 
*/

try{
$db = new PDO('mysql:host=localhost; dbname=user', 'root', 'root');
}catch(PDOException $e){
    die ('could not connect...'. $e->getMessage());
}

// prepared statement example 
// if(!empty($_GET("user")))
// {
// $user = $db->prepare("SELECT * FROM users WHERE id = :user_id"); 

// $user->is_execut(
//     [
//         'user_id'=> $_GET['user'],
//     ]
//     );
// var_dump($user->fetchObject());
// }


// Inserting 

if(!empty($_POST)){
    $firstName = $_POST['first_name']; 
    $lastName = $_POST['last_name']; 
    $email = $_POST['email']; 

    $userInput = $db->prepare(
        "
        INSERT INTO users(first_name, last_name, email)
        VALUE(:first_name, :last_name, :email); 
        ");

        $userInput->execute([
            'first_name' => $firstName, 
            'last_name' => $lastName,
            'email' => $email
        ]);

            // this line get the user id after resgistering
        $userID = $db->lastInSertId();
        echo $userID; 
        die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form autocomplete="off" action="$_SERVER['PHP_SELF']" method="post">
    <label for="">First Name</label>
    <input type="text" name="first_name" id="first_name">
    <label for="">Last Name</label>
    <input type="text" name="last_name" id="last_name">
    <label for="">Email Name</label>
    <input type="email" name="email" id="email">
    <button type='submit'>Enter</button>
    </form>
</body>
</html>