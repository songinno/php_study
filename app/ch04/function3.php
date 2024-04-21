<?php
// ! 값 전달
function increment($param) {
    $param++; // $value 값을 복사하여 increment() 함수에 인수로 전달
    return $param;
}

$value = 1;

echo increment($value) . "<br/>"; // 2
echo $value . "<br/>"; // 1

// ! 참조 전달
function increment2(&$param) {
    $param++;
    return $param;
}

$value2 = 1;

echo increment2($value2) . "<br/>"; // 2
echo $value2 . "<br/>"; // 2

// ! 디폴트 매개변수
function sum($value1, $value2 = 2, $value3 = 3) {
    return $value1 + $value2 + $value3;
}

echo sum(1) . "<br/>"; // 6

function sum2($value1 = 1, $value2, $value3 = 3) {
    return $value1 + $value2 + $value3;
}

echo sum2(1,2,3) . "<br/>";
echo sum2(1,2);
// echo sum2(1); // 오류 발생

function sum3($value1 = 1, $value2) {
    return $value1 + $value2;
}

echo sum3(1,2);
// echo sum3(1); // 오류 발생