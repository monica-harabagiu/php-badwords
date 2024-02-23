<?php

$your_paragraph = $_GET["paragraph"];
$censured_word = $_GET["censor"];
$censured_paragraph = str_replace($censured_word, '***', $your_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words - badwords</title>
</head>
<body>

    <h2>Your paragraph</h2>
    <p><?php echo $your_paragraph ?></p>
    <hr>
    <span>Paragraph length: <?php echo strlen($your_paragraph)?></span>

    <h2>Your censured paragraph</h2>
    <p><?php echo $censured_paragraph ?></p>
    <span>Paragraph length: <?php echo strlen($censured_paragraph)?></span>
    
</body>
</html>