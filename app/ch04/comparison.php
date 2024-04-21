<?php

$a = 5;
$b = 3;
$c = "5";

echo ($a <> $b) . "<br/>"; // 값만 비교 -> 1(true)
echo ($a <> $c) . "<br/>"; // 값만 비교 -> (false)
echo ($a == $c) . "<br/>"; // 값만 비교 -> 1(true)
echo ($a === $c) . "<br/>"; // 데이터 타입 + 값 비교 -> (false)

var_dump(0 < true); // false < true -> true
echo "<br/>";

var_dump("123abc" == 123);
// ! PHP 8버전 미만 : "123" == 123 -> true
// ! PHP 8버전 이상 : false
echo "<br/>";

var_dump("123abc" === 123); // 데이터 타입이 같지 않음 -> false
echo "<br/>";

$arr_01 = array("a" => 10);
$arr_02 = array("a" => 5);
$arr_03 = array("a" => 5, "c" => 7);
$arr_04 = array("a" => 10, "c" => 10);

var_dump($arr_01 >= $arr_02); // a : 10 > 5 -> true
echo "<br/>";

var_dump($arr_01 >= $arr_03); // key가 맞지 않음, $arr_03의 요소 개수가 더 많음 -> false
echo "<br/>";

var_dump($arr_03 < $arr_04); // a: 5 < 10, c : 7 < 10 -> true
echo "<br/>";

var_dump("문자열" < $arr_01); // (객체 제외) 배열이 항상 큰 것으로 판단 -> true