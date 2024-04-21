<?php

$fruits = [
    "apple" => "사과",
    "strawberry" => "딸기",
    "banana" => "바나나"
];

echo "- 값만 사용 - <br/>";
foreach($fruits as $fruit) {
    echo $fruit . "<br/>";
}

echo "<br/>";

echo "- 키와 값 모두 사용 - <br/>";
foreach($fruits as $key => $fruit) {
    echo "key = {$key}, value = {$fruit} <br/>";
}