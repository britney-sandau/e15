<?php

session_start();

function isPalindrome($inputString)
{
    if($inputString != ''){

        /* The following code lowercases the input, trims off whitespaces and 
        reverses it.*/
        
        $lowerString = strtolower($inputString);
        $noSpaces = str_replace(' ', '', $lowerString); 
        $reverseString = strrev($noSpaces); 
        $switchBack = strrev($reverseString);

        if($switchBack == $reverseString){
            return ($inputString . ' Spelled backwards is ' . $reverseString . '. You have entered a palindrome.');
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

        /* The following variables check for vowels. I know there has to be a 
        better way to shorten the code and will look to do so in the futrue. */
        $aCount = substr_count($lowerString, 'a');
        $eCount = substr_count($lowerString, 'e');
        $iCount = substr_count($lowerString, 'i');
        $oCount = substr_count($lowerString, 'o');
        $uCount = substr_count($lowerString, 'u');

        $totalCount = $aCount + $eCount + $iCount + $oCount + $uCount;

        return ("Your entry has " . $totalCount . " vowel(s).");
    } else{
        return ('Enter a word or phrase to find out.');
    }
}

$inputString = $_GET['inputString'];
$isPalindrome = isPalindrome($inputString);
$isVowelCount = isVowelCount($inputString);


$_SESSION['results'] = [
    'isPalindrome' => $isPalindrome,
    'inputString' => $inputString,
    'isVowelCount' => $isVowelCount,
];
 
header('Location: index.php');

