<?php
// * 정수형
echo PHP_INT_MAX . "<br/>"; // 9223372036854775807

echo 125 . "<br/>"; // 10 진수 양수
echo -125 . "<br/>"; // 10 진수 음수
echo 0377 . "<br/>"; // 8진수로 10진수의 255
echo 0xFF . "<br/>"; // 16 진수로 10진수의 255
echo 0b11111111 . "<br/>"; // 2진수로 10진수의 255

// * 실수형
echo 1.234 . "<br/>"; // 1.234
echo 1.2e3 . "<br/>"; // 1200
echo 7E-10 . "<br/>"; // 7.0E-10

// * 논리형
echo true . "<br/>"; // 1
echo false . "<br/>"; // 아무것도 출력되지 않음

// * 문자열
echo '작은 따옴표 입니다. <br/>';
echo "큰 따옴표 입니다. <br/>";

echo '작은 따옴표 안에 작은 따옴표\' <br/>';
echo "큰 따옴표 안에 큰 따옴표\" <br/>";

echo '작은 따옴표 안에 줄\n 바꿈 <br/>';
echo "큰 따옴표 안에 줄\n 바꿈 <br/>";

// * 배열
$array = array("사과", 5, "바나나", 1, 3.14, "수박");
echo "<pre>";
print_r($array);
echo "</pre>";

$array = ["사과", 5, "바나나", 1, 3.14, "수박"];
echo "<pre>";
print_r($array);
echo "</pre>";

$arr = array("a", "b", "c", "d", "e");
echo $arr[0] . "<br/>";
echo $arr[1] . "<br/>";
echo $arr[2] . "<br/>";
echo $arr[3] . "<br/>";
echo $arr[4] . "<br/>";

// ! 연관 배열
$arr = array(
    "key1" => "사과",
    "key2" => "5",
    "key3" => "바나나",
    "key4" => 1,
    "key5" => 3.14,
    "key6" => "수박"
);

$arr = [
    "key1" => "사과",
    "key2" => "5",
    "key3" => "바나나",
    "key4" => 1,
    "key5" => 3.14,
    "key6" => "수박"
];

echo $arr["key1"] . "<br/>";
echo $arr["key2"] . "<br/>";
echo $arr["key3"] . "<br/>";
echo $arr["key4"] . "<br/>";
echo $arr["key5"] . "<br/>";
echo $arr["key6"] . "<br/>";