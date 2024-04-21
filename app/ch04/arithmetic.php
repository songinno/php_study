<?php
$a = 5;
$b = 3;

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;
$c6 = 0;
$c7 = 0;

$c1 = $a + $b; // 8
$c2 = $a - $b; // 2
$c3 = -$a; // -5
$c4 = $a * $b; // 15
$c5 = $a ** $b; // 125
$c6 = $a / $b; // 1.6666666666667
$c7 = $a % $b; // 2

echo "- 산술연산자 - <br/>";
echo "a + b = {$c1} <br/>";
echo "a - b = {$c2} <br/>";
echo "-a = {$c3} <br/>";
echo "a * b = {$c4} <br/>";
echo "a ** b = {$c5} <br/>";
echo "a / b = {$c6} <br/>";
echo "a % b = {$c7} <br/>";
