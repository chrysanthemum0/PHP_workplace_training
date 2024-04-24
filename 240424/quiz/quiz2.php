<?php
/*
function sum($num) {
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        echo $i . '<br>';
        $sum += $i;
    }
    return $sum;
}

echo sum(10);

*/


$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
    $sum += $i;
}

echo '合計: ' . $sum;


?>
