<!doctype html>
<html lang="en">

<head>
    <title>E15 Project 1</title>
    <meta charset="UTF-8">
    <link href=data:, rel=icon>
    <link href='/css/p1.css' rel='stylesheet'>
    <img src='images/letters.jpg' alt='Seize the Day'>

</head>

<body>
<div class='main'>
    <h1>Project 1: A play on words.</h1>
    
    <p>Type in a set of words to find out if it is a palindrome and how many vowels it contains.</p>

    <form method='GET' action='process.php'>
        <input type='text' name='inputString'>

        <button type='submit'>Submit</button>

    </form>

    <?php if (isset($inputString)): ?>
    <div>
        You submitted: <?php echo $inputString ?>
    </div>
    <div>
    Is big word?
    <?php if ($isBigWord) { ?>
    Yes
    <?php } else { ?>
    No <?php } ?>
    </div>
    <div>
    Here is a test: <?php echo $isPalindrome; ?>
    </div>
    <div>
    Are there any vowels? <?php echo $isVowelCount; ?>
    </div>
    <div>
    Each letter has moved over by one. <? echo $isLetterShift; ?>
    <?php endif ?>
    </div>


</div>
</body>

</html>