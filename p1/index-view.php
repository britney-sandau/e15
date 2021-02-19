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

    <p class='para'>What's in a word? Type a word or phrase to find out if it is a palindrome and how many vowels it contains.</p>

    <form method='GET' action='process.php'>
        <input type='text' name='inputString'>

        <button type='submit'>Submit</button>
 </form>   

    <div class='results'>

        <?php if (isset($inputString)): ?>
        You submitted: 
        <div class='outcome'>
        <?php echo $inputString ?>
        </div>

    </div>

    <div class='results'>
        
        Is it a palindrome? 
        <div class='outcome'>
        <?php echo $isPalindrome; ?>
        </div>
    
    </div>
    
    <div class='results'>
        
        Are there any vowels? 
        <div class='outcome'>
        <?php echo $isVowelCount; ?>
        </div>
        <?php endif ?>

    </div>
    
</div>
</body>

</html>