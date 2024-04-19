<?php

    //clear 
    $name ='';
    $address ='';
    $tel ='';

    //need to info POST
    if(isset($_POST['name']) === true){
        $name = $_POST['name'];
    }
    if(isset($_POST['address']) === true){
        $address = $_POST['address'];
    }
    if(isset($_POST['tel']) === true){
        $tel = $_POST['tel'];
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <h1>8.1.1確認画面</h1>
    <p>以下の内容と間違いはないかご確認ください。</p>
    <dl>
        <dt>お名前 : </dt>
        <dt><?= $name; ?></dt><br>
        <dt>ご住所 : </dt>
        <dt><?= $address; ?></dt><br>
        <dt>電話番号 : </dt>
        <dt><?= $tel; ?></dt>
    </dl>

    <form action="hidden3.php" method="post" >
        <input type="hidden" name="name" value="<?= $name; ?> ">
        <input type="hidden" name="address" value="<?= $address; ?> ">
        <input type="hidden" name="tel" value="<?= $tel; ?> ">
        <p><input type="submit" value="この内容を登録する"></p>
    </form>
</body>
</html>
