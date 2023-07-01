<?php

/*
** A quick return true or false from a function
*/


function equals_one($value){
     if ($value == 1 ){
       return true;
    }
    return $value; 
}

echo equals_one(false);

// debugging tool
var_dump(equals_one(1));