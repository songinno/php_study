<?php
const CONSTANT = '안녕하세요 <br/>';

function myFunc() {
    // const MESSAGE = "저는 PHP를 공부합니다."; // # 에러 발생
}

class MyClass {
    public const MESSAGE = "저는 PHP를 공부합니다.";

    public static function foo() {
        // const BYE = "안녕히 가세요"; // # 에러 발생
    }
}

echo CONSTANT;
echo MyClass::MESSAGE;