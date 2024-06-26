<?php

class MyException extends Exception
{
    public function myMessage($my_msg)
    {
        return $my_msg;
    }
}

$msg = "예외 클래스 오류 발생";
$code = 123;
$e = new MyException($msg, $code);

echo $e->myMessage("Exception 클래스 상속 받음") . "\n"; // Exception 클래스 상속 받음

echo $e->getMessage() . "\n"; // 예외 클래스 오류 발생
echo $e->getCode() . "\n"; // 123
