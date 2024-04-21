<?php

// ! Hello World 출력
function hello_world() {
    echo "Hello World <br/>";
}

hello_world(); // Hello World

// ! 한 개의 매개변수 사용
function say($string) {
    echo $string;
}

say("Hello World <br/>"); // Hello World

// ! 두 개의 매개변수 사용
function profile($name, $age) {
    echo "저의 이름은 $name 이고, 나이는 $age 입니다. <br/>";
}

profile("송인노", 32); // 저의 이름은 송인노 이고, 나이는 32 입니다.

// ! 매개 변수가 없고 return을 사용하는 함수
function hello_world2() {
    return "Hello World2 <br/>";
}

echo hello_world2(); // Hello World2

// ! 한 개의 매개 변수 사용 + return 사용하는 함수
function hello_world3($say) {
    return $say;
}

echo hello_world3("Hello World3 <br/>"); // Hello World3

// ! 2개의 매개변수 사용 + return 사용하는 함수
function profile2($name, $age) {
    $my_profile = "저의 이름은 $name 이고, 나이는 $age 입니다. <br/>";
    return $my_profile;
}

echo profile2("송인노", 32); // 저의 이름은 송인노 이고, 나이는 32 입니다.

// ! 2개의 매개변수 사용 + 배열을 return하는 함수
function profile3($name, $age) {
    $my_profile = array($name, $age);

    return $my_profile;
}

$result = profile3("송인노", 32);
print_r($result); // Array ( [0] => 송인노 [1] => 32 )
echo "<br/>";

// ! 매개변수에 기본값을 설정한 함수
function say2($str = "Hello World") {
    echo $str . "<br/>";
}

say2(); // Hello World

// ! spread(...) 연산자를 파라미터로 사용한 함수
// # PHP 5.5 이하
function old_sum() {
    $sum = 0;
    foreach(func_get_args() as $n) {
        $sum += $n;
    }
    return $sum;
}

echo old_sum(1,2,3) . "<br/>"; // 6

// # PHP 5.6 이상
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1,2,3,4,5); // 15
echo "<br/>";

// ! 매개변수로 받을 값들의 데이터 유형을 미리 지정
function myFunc(
    string $str,
    int $int,
    float $float,
    array $array,
    object $object,
    mixed $mixed // PHP 8 ~
) {
    return;
}

// ! Union Type의 매개변수를 사용한 함수
function myFunc2(string | int | float | array | object $data) {
    return $data;
}

// ! 반환 유형을 선언한 함수
function myFunc3(mixed $number) : int | string {
    return $number;
}

echo myFunc3(1.5); // # 1.5 -> 1(int)로 변환 => 1
echo "<br/>";

// ! 명명된 매개변수 기능을 사용한 함수
function myFunc5($name, $age) {
    echo "저의 이름은 {$name}이고, 나이는 {$age}입니다. <br/>";
}
myFunc5(name: "송인노", age: 32);
myFunc5(age: 32, name: "송인노");

function out() {
    echo "out <br/>";

    function in() {
        echo "in <br/>";
    }
}

out(); // out
in(); // in



