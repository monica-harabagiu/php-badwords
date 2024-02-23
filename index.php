<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <form action="badwords.php" method="GET">
        <textarea type="text" name="paragraph" placeholder="Your paragraph" rows="8" cols="50"></textarea>
        <br>
        <input type="text" name="censor" placeholder="Word to censor" size="52">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>