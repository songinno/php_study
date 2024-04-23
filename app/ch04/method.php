<?php

class MyClass {
    function say($string) {
        echo $string . "<br/>";
    }

    // ! 파라미터 타입, 반환 타입 지정
    function say2(string | int $str, $num) : mixed {
        $array = array($str, $num);

        return $array;
    }
}

$my_class = new MyClass();
$my_class->say("Hello World"); // Hello World

// ! 명명된 매개변수
$result = $my_class->say2(str: "hihihi", num: 123);
print_r($result);