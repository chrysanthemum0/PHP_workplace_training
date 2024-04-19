<?php

class Person {
    //속성 프로퍼티 
    public $name;

    public $gender;

    public $birth_day;

    //메소드 함수 / 무슨 동작을 할 것인지 ~~
    public function getAge(){
        return floor((time() - $this->birth_day) / 31536000);
    }
}

?>
