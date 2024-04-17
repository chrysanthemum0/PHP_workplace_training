<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>取り込まれたプログラム</title>
</head>
<body>
    <h1>6.2.3 file取り込み</h1>
    <h2>include_once * 3</h2>
    <?php
        include_once 'folderfunction/once.php';
        include_once 'folderfunction/once.php';
        include_once 'folderfunction/once.php';
    ?>
    <h2>include関数 * 3</h2>
    <?php
        include 'folderfunction/once.php';
        include 'folderfunction/once.php';
        include 'folderfunction/once.php';
    ?>
</body>
</html>
