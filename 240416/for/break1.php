<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break_continue</title>
</head>
<body>
    <?php
    // 반복문으로 1부터 200까지 돌리고 2로 나눴을때 컨티뉴, 제어문으로 100미만 브레이크 
    for($i = 1; $i <= 200; $i++){
        if($i % 2 === 0){
            continue;
        }
        if($i > 100){
            break;
        }
        echo $i . "<br>";
    }   

    // 컨티뉴는 조건 만족하면 스킵
    // 브레이크는 조건 만족하면 빠져나옴
    ?>
</body>
</html>