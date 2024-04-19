<?php
function myFunc1() {
    $x = 0;
    echo "<p>x의 값 : {$x}</p>";
    $x++;
}

function myFunc2() {
    static $x = 0;
    echo "<p>x의 값 : {$x}</p>";
    $x++;
}

myFunc1();
myFunc1();
myFunc1();

myFunc2();
myFunc2();
myFunc2();