<?php

//브라우저 내에서 의도하지 않은 코드가 실행될 가능성이 있음
//자바스크립트 등 css 등 
$comment = '';
if(isset($_POST['comment']) === true){
    $comment = trim($_POST['comment']);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出力エスケープ</title>
</head>
<body>
    <form action="security4.php" method="post" >
    <p><lable>メッセージ
        <textarea name="comment" rows="3" cols="40"></textarea>
    </lable></p>    

        <p><input type="submit" value="送信"></p>
    </form>

    <p><?= $comment; ?></p>
</body>
</html>
