<?php

$msg = "예외 클래스 오류 발생"; // # 예외 발생 시 출력할 메시지
$code = 123; // # 예외 발생 시 출력할 코드
$e = new Exception($msg, $code);

echo "예외 코드 : {$e->getCode()} \n";
echo "예외 메시지 : {$e->getMessage()} \n";

