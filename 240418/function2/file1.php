<?php

    $data = "PHPによってファイルに書き込まれた文字列\n";
    $arr = array();

    $fp = fopen('./data/test.txt', 'a'); // open file 

    fputs($fp, $data);
    fputs($fp, $data);
    fputs($fp, $data);


    fclose($fp); //close file

    $fp = fopen('./data/test.txt', 'r'); // open file *only read
    while (!feof($fp)) {
        $arr[] = fgets($fp);
    }

    fclose($fp); // close file 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ファイルの内容</h1>
    <?php
    foreach ($arr as $line) { ?>
        <p><?= $line; ?></p>
    <?php } ?>
</body>
</html>
