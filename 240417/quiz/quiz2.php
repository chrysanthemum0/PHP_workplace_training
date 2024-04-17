<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$number = $_POST["number"];
//ここにコードを記述


    if($number == 7){
        echo '大当り';
    } else if(($number % 7) == 0){
        echo '当たり';
    } else{
        echo 'ハズレ';
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
        <input type="number" name="number">
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
