<?php
// ! 조건적 함수
$makefunc = true;

// func(); // # func() 함수 선언 전으로, 호출 불가

if ($makefunc) {
    function func() {
        echo "이제 함수를 사용할 수 있습니다. <br/>";
    }

    func(); // # func() 함수 선언 후로, 호출 가능
}

// ! 함수 안의 함수
function out() {
    function in() {
        echo "이제 함수를 사용할 수 있습니다222. <br/>";
    }
}

// in(); // # in() 함수가 선언되기 전으로, 함수 호출 불가
out();
in(); // # in() 함수 선언 후로, 함수 호출 가능

// ! 재귀 함수
function factorial($num) {
    if ($num > 1) { // # 1이 될 때까지
        echo "아직 1이 안됐다. (num = $num) <br/>";
        return $num * factorial($num - 1); // # 1씩 감소시킨 값을 전달하여 자기 자신을 계속 호출
    } else {
        return 1;
    }
}

echo factorial(5); // 5 * 4 * 3 * 2 * 1 = 120
echo "<br/>";

// ! 가변 함수
function first() {
    echo "first() 함수입니다. <br/>";
}

function second($param) {
    echo "second() 함수입니다. <br/>";
    echo "함수 호출 시 전달 받은 인수의 값은 $param 입니다.";
}

$func_name = "first";
$func_name(); // # first() 함수 호출

$func_name = "second";
$func_name("100"); // # second() 함수 호출