<?php

    $arr = [10, 20, 30, 40, 50];
    var_dump($arr);

    echo '<br>';

    unset($arr[1]);
    unset($arr[3]);

    var_dump($arr); // not change idnex 

?>