<?php

$arr1 = array("1" => "키위1", "2" => "멜론1");
$arr2 = array("1" => "키위2", "2" => "멜론2", "3" => "수박2");

$result1 = $arr1 + $arr2;
print_r($result1); // Array ( [1] => 키위1 [2] => 멜론1 [3] => 수박2 )

echo "<br/>";

$result2 = $arr2 + $arr1;
print_r($result2); // Array ( [1] => 키위2 [2] => 멜론2 [3] => 수박2 )