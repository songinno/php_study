<?php

class Example {
    public string $id;
    public string $name;
    public mixed $nickname;

    public function __construct(string $id, string $name, mixed $nickname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nickname = $nickname;
    }
}

$id = "hong";
$name = "홍길동";
$nickname = "쾌도 홍길동";

$example = new Example($id, $name, $nickname);
echo $example->id . "<br>"; // hong
echo $example->name . "<br>"; // 홍길동
echo $example->nickname . "<br>"; // 쾌도 홍길동