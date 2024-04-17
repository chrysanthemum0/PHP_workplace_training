<?php

    //소비세 정의
    define('TAX_RATE', 1.1);

    //세금포함 금액 계산 유저정의 함수
    function includeTax($price){
        $amount = $price * TAX_RATE;
        return $amount;
    }

    //incloudTax($price) --> 가격(p태그 안에 값) 변수에 저장
    // $amount = $price * TAX_RATE; --> $amount변수에 가격 * 소비세 값 저장 
    // 마지막 반환 *(생략가능)
    
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>消費税込み : <?= includeTax(1000); ?>円</p>
    <p>消費税込み : <?= includeTax(5000); ?>円</p>
    <p>消費税込み : <?= includeTax(7500); ?>円</p>
</body>
</html>
