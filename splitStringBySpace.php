<?php

/*
** Intermediate PHP concepts
** Include and Require method php
*/

$string = trim(' Blue   car   sale');

// $keywords = explode('  ', $string); 

// Preg_split method, takes an expresion, and remove unessesary white space before returning the value
$keywords = preg_split('/[\s]+/', $string); 