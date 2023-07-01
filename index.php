<?php

/*
** Intermediate PHP concepts
** Include and Require method php
*/

// Code knows to only execute on line of code
// require_once('includeRequire.php');
// require_once('splitStringBySpace.php');
require_once('generateRandomNum.php');
//  include_once('includeRequire.php');
//  include_once('includeRequire.php');

// below code is going through error if the line is repeated however the code above doesn't 
    //  require('includeRequire.php');
    //  require('includeRequire.php');
    //  include('includeRequire.php');


    // code still works and returns 6
//    echo add(3,3);

// splitStringBySpace.php
//    echo print_r($keywords);

//generateRandomNum 

echo $rand . " number generated 0 to 6:  \n". $randWithVal;