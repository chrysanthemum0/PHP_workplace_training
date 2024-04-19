<?php

    require 'person1.php';

    $p1 = new Person; //인스턴스화 
    $p1->name = 'danaka';
    $p1->gender = 'male';
    $p1->birth_day = mktime(0, 0, 0, 6, 1, 1980);

    $p2 = new Person; //인스턴스화 
    $p2->name = 'sato';
    $p2->gender = 'male';
    $p2->birth_day = mktime(0, 0, 0, 8, 1, 1975);

    $p3 = new Person; //인스턴스화 
    $p3->name = 'suzuki';
    $p3->gender = 'female';
    $p3->birth_day = mktime(0, 0, 0, 10, 1, 1970);

    echo $p1->name . ' age is ' . $p1->getAge() . '.<br>';
    echo $p2->name . ' age is ' . $p2->getAge() . '.<br>';
    echo $p3->name . ' age is ' . $p3->getAge() . '.<br>';

?>
