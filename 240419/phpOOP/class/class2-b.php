<?php

class Myclass {
    private $name;
    private $age;
}

$obj = new Myclass; 
$obj->name = 'YAMADA';
$obj->age = -5;

echo 'Name : ' . $obj->name . '<br>';
echo 'Age : ' . $obj->age . '<br>';


?>