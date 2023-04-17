<?php
    $text= $_GET['text'];
    $badword= $_GET['badword'];
    $text_length= strlen($text);
    $text_censored= str_replace($badword, '***', $text);
    $text_censored_length =  strlen($text_censored)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $text;?></p>
    <p>Lunghezza paragrafo: <?php echo $text_length;?></p>
    <p><?php echo $text_censored;?></p>
    <p>Lunghezza paragrafo censurato: <?php echo $text_censored_length;?></p>
</body>
</html>