<?php
// ! 익명 함수
$lambda = function ($name) {
    return $name;
};

echo $lambda("홍길동") . "<br/>";

// ! 화살표 함수
$lambda = fn () => "홍길동";
echo $lambda() . "<br/>";

// ! 익명 함수를 다른 함수에 인수로 전달
function say($lambda) {
    echo $lambda();
}

say(function() { return 'Hello World1 <br/>'; }); // Hello World1

say(fn () => "Hello World2 <br/>"); // Hello World2

// ! 함수의 결과 값으로 익명 함수 반환
function say2() {
    return function() { return "Hello World3 <br/>"; };
}

$lambda = say2(); // # 반환된 익명 함수를 변수에 할당한 후 호출
echo $lambda(); // Hello World3

// ! 익명 함수 생성 시, 다른 변수로의 영향
$x = 1;

$lambda = fn () => $x++;
$lambda();

echo $x . "<br/>";

// ! 익명 함수로 정의된 closer에서 외부 변수 사용
$sep = ', ';

function myFunc() {
    global $sep; // # global 키워드로 전역 변수로 선언
    $wor = "World";

    return function ($hel) use ($sep, $wor) { // # use 키워드를 사용하여, 익명 함수에서 사용할 변수 가져옴
        $exc = '!';
        return $hel . $sep . $wor . $exc;
    };
}

$hello = myFunc();
echo $hello("Hello") . "<br/>"; // Hello, World!

// ! 화살표 함수와 외부 함수
$sep = ', ';

function myFunc2() {
    global $sep; // # 전역 변수는 global 키워드로 지정 필요
    $wor = "World";

    // # 같은 scope에 있는 변수는 use 키워드 사용 X
    return fn ($hel) => $hel . $sep . $wor . "!";
}

$hello2 = myFunc2();
echo $hello2("Hello"); // Hello, World!