<?php

$str1 = "Hello World";
$str2 = "PHP";

$result1 = $str1 ?? $str2; // $str1 값이 존재하고 null이 아님 -> "Hello World"
echo $result1 . "<br/>";

$str3 = $str1;
$str4 = null;

$result2 = $str3 ?? $str4; // "Hello World"
echo $result2 . "<br/>";

$str5 = null;
$str6 = $str2;

$result3 = $str5 ?? $str6; // "PHP"
echo $result3 . "<br/>";