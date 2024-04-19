<?php
class A {
    // ! 생성자
    public function __construct() {
        echo __CLASS__ . "<br/>"; // # 클래스명 출력
    }

    // ! 메서드
    public function sayHello() {
        return __METHOD__; // # '클래스명::함수' 형태로 출력
    }

    public function sayHello2() {
        return __method__; // # 대소문자 구분 X
    }

    public function test() {
        echo __LINE__ . "<br/>";
        echo __FILE__ . "<br/>";
        echo __DIR__ . "<br/>";
        echo __FUNCTION__ . "<br/>";
        echo __METHOD__ . "<br/>";
        echo __TRAIT__ . "<br/>";
        echo __NAMESPACE__ . "<br/>";
    }
}

$a = new A();

echo $a->sayHello() . "<br/>";

echo $a->sayHello2() . "<br/>";
echo "<br/>";
echo $a -> test();