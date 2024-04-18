<?php

    error_reporting(E_CORE_WARNING);

    if(isset($_POST['comment'])) { //폼으로 부터 전송된 데이터가 있다면 
        file_put_contents('./data/text2.txt', //데이터 폴더의 텍스트2의 폴더에 추가 
    $_POST['comment'] . "\n", FILE_APPEND); //파일 어팬드 추가 기재 
    }

    $data = file_get_contents('./data/text2.txt'); // 파일 모든 내용 취득 

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FILE</h1>
    <p><?php 
    if(!$data){ //만약 파일을 찾지 못하면 밑에거 찾지 못함 출력 
        echo "We cant find file or not exist.";
    } else {
        echo nl2br($data); // 표시 
    }
    ?></p>
    <hr>
    <form action="file2.php" method="post" >
        <p><label>Comment : <input type="text" name="comment" size="40"</label>
        <input type="submit" value="書き込み"></p>
    </form>
</body>
</html>
