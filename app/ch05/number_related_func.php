<?php

/* * 숫자 관련 함수 */

// ! 내림, 올림, 반올림

// # floor() : 내림
$num1 = 10;
$num2 = 10.05;
$arr1 = [];
$num3 = -11;
$num4 = -11.94;
var_dump(floor($num1)); // float(10)
var_dump(floor($num2)); // float(10)
var_dump(floor($arr1)); // bool(false)
var_dump(floor($num3)); // -11
var_dump(floor($num4)); // -12

echo "----------------------\n";

// # ceil() : 올림
$num1 = 10;
$num2 = 10.05;
$arr1 = [];
$num3 = -11;
$num4 = -11.94;
var_dump(ceil($num1)); // float(10)
var_dump(ceil($num2)); // float(11)
var_dump(ceil($arr1)); // bool(false)
var_dump(ceil($num3)); // -11
var_dump(ceil($num4)); // -11

echo "----------------------\n";

// # round() : 반올림
$num1 = 5193.141592;
var_dump(round($num1)); // float(5193)
var_dump(round($num1, 0)); // # 1의 자리에서 반올림(default) -> float(5193)
var_dump(round($num1, 1)); // # 2의 자리에서 반올림 -> float(5193.1)
var_dump(round($num1, 2)); // # 3의 자리에서 반올림 -> float(5193.14)
var_dump(round($num1, 3)); // # 4의 자리에서 반올림 -> float(5193.142)
var_dump(round($num1, 4)); // # 5의 자리에서 반올림 -> float(5193.1416)

var_dump(round($num1, -1)); // # 소수점 앞, 1단위에서 반올림 -> float(5190)
var_dump(round($num1, -2)); // # 소수점 앞, 10단위에서 반올림 -> float(5200)
var_dump(round($num1, -3)); // # 소수점 앞, 100단위에서 반올림 -> float(5000)
var_dump(round($num1, -4)); // # 소수점 앞, 1000단위에서 반올림 -> float(10000)

echo "----------------------\n";

// ! number_format()
$num = 2022.0108;

echo number_format($num) . "\n"; // 2,022
echo number_format($num, 2) . "\n";
echo number_format($num, 4) . "\n";
echo number_format($num, 4, "!", "@") . "\n"; // 2@022!0108

echo "----------------------\n";

// ! 최댓값, 최솟값, 절댓값

// # max()
echo max([1, 2, 3, 4, 5]) . "\n"; // 5

echo max(1, 2, 3, 4, 5) . "\n"; // 5

//echo max(["abc", 0, [], 50.333]) . "\n"; // Array (Notice: Array to string conversion in ...)
//echo max([1, 2, 3], [3, 4, 5]); // Array (Notice: Array to string conversion in)

echo max("abc", 0, true, false) . "\n"; // abc

//echo max([]) . "\n"; // PHP Warning:  max(): Array must contain at least one element

// ! 진수 변환
$num = 255;
// # 10진수 -> 2진수
echo decbin(255) . "\n"; // 11111111

// # 2진수 -> 10진수
echo bindec("11111111") . "\n"; // 255

// # 10진수 -> 8진수
echo decoct($num) . "\n"; // 377

// # 8진수 -> 10진수
echo octdec("377") . "\n"; // 255

// # 10진수 -> 16진수
echo dechex($num) . "\n"; // ff

// # 16진수 -> 10진수
echo hexdec("ff") . "\n"; // 255

// # base_convert
echo base_convert($num, 10, 16) . "\n"; // ff

echo base_convert("ff", 16, 10) . "\n"; // 255

echo "----------------------\n";

// ! 난수(랜덤)

for ($i = 0; $i < 5; $i++) {
    if ($i > 2) srand(1);
    echo rand() . "\n";
}
