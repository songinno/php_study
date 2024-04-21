<?php

$statusCode = 400;

$message = match ($statusCode) {
    200,
    300 => null,
    400 => "찾을 수 없음",
    500 => "서버 오류",
    default => "알 수 없는 상태 코드"
};

echo $message; // 찾을 수 없음
echo "<br/>";

$message = match($statusCode) {
    200, 300, 400 => "ㅎㅇㅎㅇ",
    500, 600, 700 => "ㅂㅇㅂㅇ"
};

echo $message;