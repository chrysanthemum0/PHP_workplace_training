<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가감연산자</title>
</head>
<body>
    <pre><?php
            $a = 10;
            $b = 10;
            $c = ++$a; // 선처리 연산자의 특징 
            $d = $b++; // 후처리 연산자의 특징

            /* 
               선 처리 연산자 - 먼저 증감하고 값을 반환
               후 처리 연산자 - 값을 우선 반환한 후 증감
            */

            echo '$a =' . $a . "<br>"; // 11
            echo '$b =' . $b . "<br>"; // 11
            echo '$c =' . $c . "<br>"; // 11
            echo '$d =' . $d . "<br>"; // 10 

            // $a = 5;
            // echo "Should be 5: " . $a++ . "<br />\n";
            // echo "Should be 6: " . $a . "<br />\n";

            // ++$a	Pre-increment	$a를 1 증가하고, $a를 반환.
            // $a++	Post-increment	$a를 반환하고, $a를 1 증가.
            // --$a	Pre-decrement	$a를 1 감소하고, $a를 반환.
            // $a--	Post-decrement	$a를 반환하고, $a를 1 감소.
        ?>
    </pre>
</body>
</html>