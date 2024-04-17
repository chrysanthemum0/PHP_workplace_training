<?php

    $arr = [10, 20, 30, 40, 50];
    var_dump($arr);

    echo '<br>';
    array_splice($arr, 1, 3); // 10 50 -> splice index 1~3
    var_dump($arr); 
?>