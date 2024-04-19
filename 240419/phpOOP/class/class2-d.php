<?php

class MyClass{
    private $name;
    private $age;


public function __set($var, $value) {
    switch ($var) {
        //이름 프로퍼티 값 체크
        case 'name':
        if(strlen($var) > 50){
            exit('its too much long');
        }
            break;
        
        case 'age':
        if(!is_numeric($value)){
            exit('error age : please enter to nember');
        } else if($value < 0){
            exit('error age : check your age');
        }

        default:
        exit('not found property');
            break;
    }
    $this->{$var} = $value;
}
}


class MyClass1{
public function __get($var){
    //retun public 
    return $this->{$var};
    }
}

$obj = new MyClass;
$obj->name = 'YAMADA';
$obj->age = 20;
    echo 'Name' . $obj->name . '<br>';
    echo 'Age' . $obj->age;
?>
