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

