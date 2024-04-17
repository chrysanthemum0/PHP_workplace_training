<?php

    $a = 30;
    $msg = ''; //初期化

    if($a === 10){
        $msg = '$a number is 10';
    } else if($a === 20){
        $msg = '$a number is 20';
    } else {
        $msg = 'Check Your Number!';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR if</title>
</head>
<body>
    <?= $msg; ?>
</body>
</html>