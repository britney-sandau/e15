<!doctype html>
<html lang="en">

<head>
    <title>e15 Project 1</title>
    <meta charset="UTF-8">
    <link href=data:, rel=icon>

</head>

<body>

    <h1>e15 Project 1</h1>

    <form method='GET' action='process.php'>
        <input type='text' name='inputString'>

        <button type='submit'>Process string</button>

    </form>

    <?php if (isset($inputString)): ?>
    <div>
        String: <?php echo $inputString ?>
    </div>
    Is big word?
    <?php if ($isBigWord) { ?>
    Yes
    <?php } else { ?>
    No <?php } ?>
    <?php endif ?>


</body>

</html>