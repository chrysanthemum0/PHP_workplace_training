<?php
    //세율 정의 
     define('REDUCED_RATE', 1.08);

    // 유저 정의 함수
    function includeTax($price, $tax_rate = REDUCED_RATE){
    $amount = $price * $tax_rate;
    return $amount;
 }
 // 인수 디폴트 값 
 // 디폴트 값 정의는 마지막 인수 자리에 넣을것 
 // *참고 페이지 63p
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>消費税込み（軽減税率）: <?= includeTax(1000); ?>円</p>
    <p>消費税込み : <?= includeTax(5000, 1.1); ?>円</p>
</body>
</html>
