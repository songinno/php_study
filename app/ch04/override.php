<?php

class Parents2 {
    public function echo_info() {
        echo "안녕 나는 부모야. <br>";
        return "string";
    }
}

class Child2 extends Parents2 {
    public function echo_info()
    {
        echo "안녕 나는 자식이야. <br>";
        return 99999;
    }
}

$parents = new Parents2();
$result1 = $parents->echo_info(); // 안녕 나는 부모야.
var_dump($result1); // string(6) "string"

$child = new Child2();
$result2 = $child->echo_info(); // 안녕 나는 자식이야.
var_dump($result2); // int(99999)
