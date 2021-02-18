<?php

session_start();

function isPalindrome($inputString)
{
}

function isBigWord($inputString)
{
    return strlen($inputString) > 7;
}

$inputString = $_GET['inputString'];
$isBigWord = isBigWord($inputString); // true/false

$_SESSION['results'] = [
    'isPalindrome' => true,
    'isBigWord' => $isBigWord,
    'inputString' => $inputString,
];
 
header('Location: index.php');

var_dump($inputString);
var_dump($isBigWord);