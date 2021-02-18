<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    // $isBigWord = $_SESSION['results']['isBigWord'];
    // $isPalindrome = $_SESSION['results']['isPalindrome'];
    // $inputString = $_SESSION['results']['inputString'];

    extract($results);
    
    $_SESSION['results'] = null;
}

require 'index-view.php';


// function vowelCount($inputString)
// {
//     echo $inputString;
//     $inputString = strtolower($inputString);
//     //$count = count($inputString);
//     echo $inputString;
// }


//vowelCount("Hello World");


// $result = 40;

// if($result < 20 or $result >= 40){
//     $answer = "true";
// } else {
//     $answer = "false";
// }

// var_dump($result . " is " . $answer);