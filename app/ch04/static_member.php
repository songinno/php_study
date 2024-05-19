<?php

class StaticMember
{
    public static $staticProperty = "init";

    public static function staticMethod()
    {
        echo "hihi";
    }
}

$static_member = new StaticMember();

// ! 인스턴화된 객체에서 정적 프로퍼티 접근
//echo $static_member->staticProperty . "\n"; // 접근 불가

// ! 새로 만들어진 프로퍼티
$static_member->staticProperty = "ready";
echo $static_member->staticProperty . "\n"; // ready

// ! 기존의 정적 프로퍼티
echo StaticMember::$staticProperty . "\n"; // init

// ! 인스턴스화된 객체에서 정적 메서드 접근
echo $static_member->staticMethod() . "\n"; // hihi
