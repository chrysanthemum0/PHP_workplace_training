<?php

    //clear
    $arr = array();
    $err_msg = '';

    //read form
    if(isset($_POST['hobby']) === true) {
        $arr = $_POST['hobby'];
    } else {
        $err_msg = 'Please Choose Element';
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8.2.1 選択された趣味の項目</title>
</head>
<body>
    <h1>選択された趣味の項目</h1>
    <?php
        foreach ($arr as $value) {
            echo $value . '<br>';
        }
    ?>
    <?= $err_msg; ?>
</body>
</html>
