<?php

function name($string){
 $result = array(
    'upper' => strtoupper($string),
     'lower' => strtolower($string)
 )
 return $result;
}