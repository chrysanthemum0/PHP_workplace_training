<?php

    require 'folderfunction/tax.php';

?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>requir, include file(function)</title>
</head>
<body>
    <p>消費税込み : <?= includeTax(3000); ?>円</p>
    <p>消費税込み : <?= includeTax(10000); ?>円</p>
</body>
</html>
