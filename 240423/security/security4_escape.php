<?php

$comment = '';
if(isset($_POST['comment']) === true){
    $comment = trim($_POST['comment']);
}
//<?= htmlspecialchars($comment, ENT_QUOTES)
// HTML코드의 출력을 이스케이프 하기 위해서는 위의 함수를 사용함

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出力エスケープ</title>
</head>
<body>
    <form action="security4_escape.php" method="post" >
    <p><lable>メッセージ
        <textarea name="comment" rows="3" cols="40"></textarea>
    </lable></p>    

        <p><input type="submit" value="送信"></p>
    </form>

    <p><?= htmlspecialchars($comment, ENT_QUOTES); ?></p>
</body>
</html>
