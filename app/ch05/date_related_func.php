<?php

echo "------------ 날짜 생성 ------------" . "\n";

// ! 날짜 생성

// 현재 날짜 (timestamp, 초 단위)
var_dump(time()) . "\n"; // int(1719670073)
var_dump(mktime()) . "\n"; // int(1719670073)

// 2024.06.30 7시 30분 45초 (timestamp, 초 단위)
// 파라미터 순서 : 시, 분, 초, 월, 일, 연
var_dump(mktime(7, 30, 45, 6, 30, 2024)) . "\n";

// 현재 날짜 (microsecond)
var_dump(microtime(false)) . "\n"; // string(21) "0.90104400 1719670291"
var_dump(microtime(true)) . "\n"; // float(1719670291.9011)

echo "------------ 날짜 표현 ------------" . "\n";
// ! 날짜 표현

// 현재 날짜
echo date('Y-m-d') . "\n"; // 2024-06-29
echo date('Y-m-d H:i:s') . "\n"; // 2024-06-29 16:23:11

// 2024.06.30 7시 30분 45초
echo date(
 'Y-m-d H:i:s',
        mktime(7, 30, 45, 6, 30, 2024)
) . "\n"; // 2024-06-30 07:30:45

echo "------------ DateTime 클래스 ------------" . "\n";
var_dump(new DateTime());
/*
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2024-06-29 16:33:04.000000"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/Berlin"
}
 * */

$now = new DateTime('', new DateTimeZone('Asia/Seoul'));
echo $now->format('Y-m-d H:i:s'); // 2024-06-29 23:32:30







