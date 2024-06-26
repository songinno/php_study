<?php

/* 문자열 관련 함수 */

// ! 배열 내 문자열 결합
$arr = ["hi", "hello", 123, true];

echo join($arr) . "\n";
echo implode("+", $arr) . "\n";

echo "-------------------------" . "\n";

// ! 문자열 분리
$str = "www.naver.com";

$explode_str = explode(".", $str);

print_r($explode_str);

$str2 = "1.2.3.4.5.6.7.8.9.10";

$explode_str2 = explode(".", $str2, 3);
print_r($explode_str2);

$explode_str3 = explode(".", $str2, -5);
print_r($explode_str3);

echo "-------------------------" . "\n";

// ! 문자열 길이
$str1 = "abcdefg";
echo strlen($str1) . "\n"; // 7

$str2 = "안녕하세요";
echo strlen($str2) . "\n"; // 15

echo mb_strlen($str2) . "\n"; // 5
echo mb_strlen($str2, 'utf8') . "\n"; // 5
echo mb_strlen($str2, 'x-euc-kr') . "\n"; // 10

echo "-------------------------" . "\n";

// ! 문자열 비교
echo strcmp("localhost", "localhost") . "\n"; // # 완전 일치 -> 0

echo strcmp("localhost2", "localhost1") . "\n"; // # 앞이 더 큰 경우 -> 양수(1)

echo strcmp("localhost1", "localhost5") . "\n"; // # 뒤가 더 큰 경우 -> 음수(-1)

echo strcmp("localhost2", "localhost1000000000"). "\n"; // # 2 > 1 -> 1

echo strcmp("zibra", "antzczczczczczczczc") . "\n"; // # z > a -> 1

echo strcmp("Zibra", "zibra") . "\n"; // Z < z -> -1


// # 대소문자 구분 X
echo strcmp("abc", "ABC") . "\n"; // 1
echo strcasecmp("abc", "ABC") . "\n"; // 0

echo "-------------------------" . "\n";

// ! 문자열 찾기
$str = "ABCxyzxyzabcxyzxyzAbCabcdEfG";

echo strstr($str, "abc") . "\n"; // abcxyzxyzAbCabcdEfG
echo strstr($str, "abc", true) . "\n"; // ABCxyzxyz

echo strchr($str, "abc") . "\n"; // abcxyzxyzAbCabcdEfG
echo strchr($str, "abc", true) . "\n"; // ABCxyzxyz

echo strrchr($str, "abc") . "\n"; // abcdEfG

echo stristr($str, "abc") . "\n"; // ABCxyzxyzabcxyzxyzAbCabcdEfG
