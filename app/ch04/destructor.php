<?php

class Example {
    public function __construct()
    {
        echo "생성자 호출! <br>";
    }

    public function task() {
        echo "task() 함수 호출! <br>";
    }

    public function __destruct()
    {
        echo "소멸자 호출! <br>";
        echo "(인스턴스가 곧 사라집니다....)";
    }
}

$example = new Example();
$example->task();
