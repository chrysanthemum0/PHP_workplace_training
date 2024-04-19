<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$money = $_POST["money"];
$price = 120;

if ($money < $price) {
    echo 'お金がたりません。';
} elseif($money >= $price){
    $result = $money - $price;
    echo '購入できました。おつりは' . $result . '円です。';
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
    お金を入れてください。
    <form action="" method="post">
        <input type="number" name="money">
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
