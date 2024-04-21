<?php

$a = true;
$b = false;

echo "- 논리연산자 - <br/>";
var_dump($a and $b); // false
echo "<br/>";

var_dump($a or $b); // true
echo "<br/>";

var_dump($a xor $b); // true
echo "<br/>";

var_dump(!$a); // false
echo "<br/>";

var_dump($a && $b); // false
echo "<br/>";

var_dump($a || $b); // true
echo "<br/>";