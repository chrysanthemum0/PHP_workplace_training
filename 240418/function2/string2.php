<?php
    $text = '';
    if(isset($_POST['text']) === true){
        $text = $_POST['text'];
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
    <form action="string2.php" method="post" novalidate>
        <p><textarea name="text" cols="40" rows="5"></textarea></p>
        <p><input type="submit" value="送信"></p>
    </form>

    <p>before :<?= $text; ?> </p>
    <p>after :<?= nl2br($text); ?></p>

</body>
</html>
