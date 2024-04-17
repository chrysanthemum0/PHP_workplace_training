<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = $_POST["score"];
//ここにコードを記述

    if($score >= 90){
        echo 'very good';
    } else if($score >= 80 && $score < 90){
        echo 'good';
    } else if($score >= 60 && $score < 80) {
        echo 'pass';
    } else{
        echo 'try again';
    }

    exit();

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>

</body>
</html>
