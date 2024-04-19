<?php

    //clear 
    $name ='';
    $address = '';
    $tel = '';

    // POST로 폼 항목 취득 
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
    <title>登録完了画面</title>
</head>
<body>
    <p>ご意見ありがとうございます。<br>
    以下の内容をご登録させていただきます。</p>
    <dl>
        <dt>お名前 : </dt>
        <dt><?= $name; ?></dt><br>
        <dt>ご住所 : </dt>
        <dt><?= $address; ?></dt><br>
        <dt>電話番号 : </dt>
        <dt><?= $tel; ?></dt>
    </dl>
</body>
</html>
