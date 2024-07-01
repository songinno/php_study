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
*/

$now = new DateTime('', new DateTimeZone('Asia/Seoul'));
echo $now->format('Y-m-d H:i:s') . "\n"; // 2024-07-01 12:44:50
echo $now->format('Y-m-d(D) H:i:s') . "\n"; // 2024-07-01(Mon) 12:44:50

echo "------------ 날짜 차이 계산 ------------" . "\n";

// # mktime()
// 2024.07.02 17:50:35
$dt1_time = mktime(17,50,35,7,2,2024);
// 2024.06.30 12:30:22
$dt2_time = mktime(12, 30, 22, 6, 30, 2024);
echo $dt1_time - $dt2_time . "\n"; // 192013

// # DataTime 클래스
$dt1 = new DateTime();
$dt2 = new DateTime("2024-06-15 12:00:00");

$dt_diff = $dt1->diff($dt2);
//var_dump($dt_diff);
echo $dt_diff->format('%Y-%m-%d %H:%i:%s') . "\n"; // 00-0-15 22:18:18

echo "------------ 타임존 설정 ------------" . "\n";

echo date('Y-m-d H:i:s e') . "\n"; // 2024-07-01 10:27:11 Europe/Berlin

date_default_timezone_set("Asia/Seoul");

echo date('Y-m-d H:i:s e') . "\n"; // 2024-07-01 17:27:50 Asia/Seoul

//print_r(timezone_identifiers_list());

// # 특정 국가(한국)의 타임존만 확인
print_r(timezone_identifiers_list(DateTimeZone::PER_COUNTRY, "KR"));
/*
 Array
(
    [0] => Asia/Seoul
)
 */

// ! 예시
$timestamp = mktime(0, 0, 0, 1, 8, 2022);

// # 미국 뉴욕시간
date_default_timezone_set("America/New_York");
echo date('Y-m-d H:i:s', $timestamp) . "\n"; // 2022-01-07 10:00:00


// # 한국 서울시간
date_default_timezone_set("Asia/Seoul");
echo date('Y-m-d H:i:s', $timestamp) . "\n"; // 2022-01-08 00:00:00






