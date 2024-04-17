<?php

    $month = 1;
    $msg = ''; //初期化

    if($month >= 1 && $month <= 12){
        $msg = 'correct month!';
    } else {
        $msg = 'discorrect month!';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR if(difficult)</title>
</head>
<body>
    <?= $msg; ?>
</body>
</html>