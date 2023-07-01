<?php

/*
** Making code shorter by using php turnary operator
*/

// age set to legal age
$age = 18; 

// evaluates to either true of false based on the condition, in this case true
$old_enough = $age >= 18 ? true: false;  // Tanary operator

// if($age >= 18){$old_enough = true;
// }

/// Shortening the code with tanary operator
// if($old_enough == true){
//     echo 'old enough';
// }else{
//     echo "Not old enough";
// }

// $old_enough = $age >= 18 ?  'Old enough' : "Not old enough";

// executes the code ' Old enough' as it evaluates to true.
// different ways of checking if its true or not,
    // 1. by default it evaluates to true
    // 2. if its sect to zoro it false but if its set to 1 or -1 it checks to if its true
    // 3. just write the word 'true'
echo ($old_enough == -1) ?  'Old enough' : "Not old enough";

// echo $old_enough ?  'Old enough' : "Not old enough";
