<?php
declare(strict_types = 1); // # strict 모드 설정

function sum($x, $y) : int {
    return $x + $y;
}

var_dump(sum(3, 4));
var_dump(sum(3, 4.5)); // 오류 발생