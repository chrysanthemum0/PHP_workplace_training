<?php

//private내에서 엑세스 하는 법 

class Myclass {
    private $name;
    
    //캡슐화한 이름(변수) 값을 대입 
    public function setName($v){
        $this->name = $v;
    }

    //캡슐화한 이름(변수) 값 참조 
    public function getName(){
        return $this->name;
    }
}

$obj = new Myclass;
$obj->setName('YAMADA');
print($obj->getName(). '<br>');
var_dump($obj->getName());


?>
