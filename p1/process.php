<?php

session_start();

function isPalindrome($inputString)
{
    if($inputString != ''){
        $lowerString = strtolower($inputString);
        
        $noSpaces = str_replace(' ', '', $lowerString); 
        $reverseString = strrev($noSpaces); 
        $switchBack = strrev($reverseString);
        if($switchBack == $reverseString){
            return ($inputString . ' Spelled backwards is: ' . $reverseString . '. You have entered a palindrome.');
        } else {
            return ($inputString . ' is not a palindrome.');
        }
    } else{
        return('Please enter a word or phrase.');
    }
}

function isVowelCount($inputString)
{
     if($inputString != ''){
        $lowerString = strtolower($inputString);
        //$myArray = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
        $aCount = substr_count($lowerString, 'a');
        $eCount = substr_count($lowerString, 'e');
        $iCount = substr_count($lowerString, 'i');
        $oCount = substr_count($lowerString, 'o');
        $uCount = substr_count($lowerString, 'u');
        $totalCount = $aCount + $eCount + $iCount + $oCount + $uCount;
        return ("Your submission has " . $totalCount . " vowel(s).");
       
        //return ("There are " . $aCount . " A's, " . $eCount . " E's, ". $iCount . " I's, " . $oCount . " O's, ". $uCount . " U's ");
        
    } else{
        return('Please enter a word or phrase.');
    }
}

function isLetterShift($inputString)
{
    //$letterScramble = $inputString;
    //$aToZ = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    //$zToA = ['z', 'y', 'x', 'w', 'v', 'u', 't', 's', 'r', 'q', 'p', 'o', 'n', 'm', 'l', 'k', 'j', 'i', 'h', 'g', 'f', 'e', 'd', 'c', 'b', 'a', 'Z', 'Y', 'X', 'W', 'V', 'U', 'T', 'S', 'R', 'Q', 'P', 'O', 'N', 'M', 'L', 'K', 'J', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];
    //$aToZ = 'abcdefghijklmnopqrstuvwxyz';
    //$zToA = 'zyxwvutsrqponmlkjihgfedcba';
    //$newLetters = str_replace($aToZ, $zToA, $inputString);
    $words = strstr($inputString);
    $trans = ['a' => 'z', 'b' => 'y', 'z' => 'a', 'y' => 'b'];
    $newWord = strstr($words, $trans);
    return ($newWord);
   
    //return ($newLetters);
}

function isBigWord($inputString)
{
    return strlen($inputString) > 7;
}

$inputString = $_GET['inputString'];
$isBigWord = isBigWord($inputString); # true/false
$isPalindrome = isPalindrome($inputString);
$isVowelCount = isVowelCount($inputString);
$isLetterShift = isLetterShift($inputString);

$_SESSION['results'] = [
    'isPalindrome' => $isPalindrome,
    'isBigWord' => $isBigWord,
    'inputString' => $inputString,
    'isVowelCount' => $isVowelCount,
    'isLetterShift' => $isLetterShift,
];
 
header('Location: index.php');

// var_dump($inputString);
// var_dump($isBigWord);

//  foreach (count_chars($lowerString, 1) as $i => $val){
//             $message = ('There were ' . $val . ' instance(s) of ' . chr($i) . ' in the string.');
//             return $message;
//         }
        

// ==================================
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

