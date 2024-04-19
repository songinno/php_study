<?php
$str = "PHP";

function myFunction() {
    global $str;
    echo "<p>변수 str의 값은 : {$str}입니다.</p>";
}

myFunction();
echo "<p>변수 str의 값은 {$str}입니다.</p>";