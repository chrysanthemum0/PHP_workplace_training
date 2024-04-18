<?php

    $target = 'あいうえおABCDEFG1234567890'

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>置換対象文字列 : <?= $target ;?> </p>
    <p>文字数、str len : <?= mb_strlen($target); ?></p>
    <p>部分抜き出し : <?= substr($target, 15, 5); ?></p>
    <p>置換、str repalce : <?= str_replace('ABC', 'abc', $target); ?></p>
</body>
</html>
