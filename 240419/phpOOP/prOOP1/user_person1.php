<?php

require 'person1.php'; // 파일 불러오기* 이 클래스 쓰기 

$p = new Person; // 변수에 클라스 담기 
$p->name = 'danaka'; // 클래스의 이름 속성에 넣기 
$p->gender = 'male'; //
$p->birth_day = mktime(0, 0, 0, 6, 1, 1980); // 메소드에 mktime 함수 사용  

echo $p->name . ' age is ' . $p->getAge() . '.';
?>
