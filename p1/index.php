<?php

function isPalindrome($inputString)
{

}

function vowelCount($inputString)
{
    echo $inputString;
    $inputString = strtolower($inputString);
    //$count = count($inputString);
    echo $inputString;
}

vowelCount("Hello World");

$result = 40;

if($result < 20 or $result >= 40){
    $answer = "true";
} else {
    $answer = "false";
}

var_dump($result . " is " . $answer);




require 'index-view.php';