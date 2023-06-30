<?php

// function name($string,){
//     $result = array(
//        "upper" => strtoupper($string),
//         "lower" => strtolower($string)
//     );
//     return $result;
//    }

//   $name = name('Alex'); 
//   echo $name['lower'];

function string($string, $callback){
    $result = array(
       "upper" => strtoupper($string),
        "lower" => strtolower($string)
    );
    if(is_callable($callback)){
        call_user_func($callback, $result);
    }
   }

string('Alex', function($name){
   // print_r($name);
    echo $name['upper'];
});