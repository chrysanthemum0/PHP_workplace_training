<?php

    $arr1 = ['color' => 'red', 10, 20];
    $arr2 = ['color' => 'green', 30, 40]; // red -> green 

    $result = array_merge($arr1, $arr2);
    var_dump($result); 

?>