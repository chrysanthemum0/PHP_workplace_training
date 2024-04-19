<?php

class Myclass { // class라는 키워드로 Myclass라는 클래스 정의 
    public $num1; //클래스 내에서 속성, 프로퍼티(변수) 정의 
    public $num2; //클래스 내에서 속성, 프로퍼티(변수) 정의 

    public function plus() { //클래스 내에서 메서드 (함수) 정의 
        return $this->num1 + $this->num2;
    }

    public function minus(){ //클래스 내에서 메서드 (함수) 정의  
        return $this->num1 - $this->num2; //$this 함수는 클래스 내에서 자기, 자신의 프로퍼티, 메서드 액세스 가능하게 함
    }
}

$obj1 = new Myclass; // Myclass를 가져와 ojb1이라는 인스턴스 생성  
$obj1->num1 = 100;
$obj1->num2 = 50;

$obj2 = new Myclass; // Myclass를 가져와 ojb2이라는 인스턴스 생성  
$obj2->num1 = 60;
$obj2->num2 = 30;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自身のクラスの参照</title>
</head>
<body>
    <h1>result object1</h1>
    <p>plus method print : <?= $obj1->plus(); ?></p>
    <p>minus method print : <?= $obj1->minus(); ?></p>

    <h1>result object2</h1>
    <p>plus method print : <?= $obj2->plus(); ?></p>
    <p>minus method print : <?= $obj2->minus(); ?></p>
</html>
