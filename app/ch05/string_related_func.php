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

$str = "aoaoa";

echo "-----------strpos--------------" . "\n";

echo strpos($str, "a") . "\n"; // 0
echo strpos($str, "a", 1) . "\n"; // 2
echo strpos($str, "a", 2) . "\n"; // 2
echo strpos($str, "a", 3) . "\n"; // 4

var_dump(strpos($str, "x")) . "\n"; // false

echo "-----------strrpos--------------" . "\n";
echo strrpos($str, "a") . "\n"; // 4
echo strrpos($str, "a", 1) . "\n"; // 4
echo strrpos($str, "a", 2) . "\n"; // 4
echo strrpos($str, "a", 3) . "\n"; // 4
echo strrpos($str, "a", 4) . "\n"; // 4

echo strrpos($str, "a", -1) . "\n"; // 4
echo strrpos($str, "a", -2) . "\n"; // 2
echo strrpos($str, "a", -3) . "\n"; // 2
echo strrpos($str, "a", -4) . "\n"; // 0

echo "-----------substr--------------" . "\n";
$str = 'Hello World';

// 인덱스 0부터, 5글자 자르기
echo substr($str, 0, 5) . "\n"; // Hello

// 인덱스 6부터 끝까지 자르기
echo substr($str, 6) . "\n"; // World

// 끝에서 3글자만 자르기
echo substr($str, -3) . "\n"; // rld
echo substr($str, -3, 4) . "\n"; // rld (length 의미 없음)

// 인덱스 0부터 끝까지 자르되, 마지막 3글자 생략
echo substr($str, 0, -3) . "\n"; // Hello Wor

// 인덱스 2부터 끝까지 자르되, 마지막 2글자 생략
echo substr($str, 2, -2) . "\n"; // llo Wor

// 끝에서 5글자를 자르고, 마지막 3글자 생략
echo substr($str, -5, -3) . "\n"; // Wo

// 문자열이 offset보다 작으면 false 반환
var_dump(substr($str, 20)) . "\n"; // false

echo "-----------대소문자 변경--------------" . "\n";

$str = "abcdEFG";

// # 대문자로 변경
echo strtoupper($str) . "\n"; // ABCDEFG

// # 소문자로 변경
echo strtolower($str) . "\n"; // abcdefg

// # 첫 글자만 대문자로 변경
echo ucfirst($str) . "\n"; // AbcdEFG

// # 각 단어의 첫글자를 대문자로 변경
$str = "abc def ghi" . "\n";
echo ucwords($str); // Abc Def Ghi

echo "-----------문자열 치환--------------" . "\n";
$str = "abcdefg";

// str_replace(찾을 문자열, 변경할 문자열, 문자열 원본)

echo str_replace("abc", "ABC", $str) . "\n"; // ABCdefg

// strtr(문자열 원본, 찾을 문자열, 변경할 문자열)

echo strtr($str, "abc", "ABC") . "\n"; // ABCdefg

// substr_replace(문자열 원본, 변경할 문자열, 시작 인덱스, 변경될 문자 개수)

// 0번 인덱스부터 끝까지(전체 문자열) *로 치환
echo substr_replace($str, "*", 0) . "\n"; // *

// 첫번째, 마지막 글자 빼고는 *로 치환
echo substr_replace($str, "*", 1, strlen($str) - 2) . "\n"; // a*g

// c 앞에 * 추가
echo substr_replace($str, "*", 2, 0); // ab*cdefg




