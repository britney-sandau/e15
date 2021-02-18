<?php

session_start();

$answer = $_POST['answer'];

if ($answer == 'pumpkin') {
    $results = 'Correct!';
} else {
    $results = 'Incorrect!';
}

$_SESSION['results'] = $results;

# Redirect
header('Location: done.php');

// var_dump($_GET);
// var_dump($_GET['answer']);

// if($_GET['answer'] == '') {
//     var_dump('You didn’t enter a guess');
// }
// else if($_GET['answer'] == 'pumpkin') {
//     var_dump('Correct!');
// }
// else {
//     var_dump('Incorrect');
// } 