<?php
class Member {
    var $id = "hong";
    public $name = "홍길동";
    protected $nickname = "쾌도 홍길동";
    private $age = 20;
}

$member = new Member();
echo $member->id . "<br/>"; // hong
echo $member->name . "<br/>"; // 홍길동
// echo $member->nickname . "<br/>"; // # 에러 발생
// echo $member->age . "<br/>"; // # 에러 발생

// ! PHP 8 ~, 프로퍼티에 데이터 타입 지정 가능
class Test {
    public int $a;
    public float $b;
    public string $c;
    public bool $d;
    public iterable $e; // # 의사 유형
    public array $f;
    public mixed $g;
}