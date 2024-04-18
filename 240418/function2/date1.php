<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function time</title>
</head>
<body>
    <dt>date関数による日付文字列</dt>
    <dd><?= date('Y/m/d H:i:s'); //2024/04/18 04:01:13 ?></dd> 
    <dt>date関数による日付文字列</dt>
    <dd><?= date('M, d, Y h:i:s'); //Apr, 18, 2024 04:01:13 ?></dd>

    <dt>getdate関数による日付文字列</dt>
    <dd><pre><?php print_r(getdate());//getdate()함수 날짜 정보 불러와 분할해서 베열로 반환 ?></pre></dd>
    
    <dt>time関数による日付文字列</dt
    <dd><?= time(); //1970년 1월 1일부터 지금까지의 경과를 초로 출력 ?></dd>
</body>
</html>
