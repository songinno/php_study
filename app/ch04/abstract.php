<?php

abstract class Animal
{
    // ! 프로퍼티
    public $type;
    public $name;
    public $age;

    // ! 비추상 메서드
    public function describe()
    {
        echo "{$this->type}의 이름은 {$this->name} 이고, 나이는 {$this->age}입니다. \n";
    }

    // ! 추상 메서드
    abstract public function greet();
}

class Dog extends Animal
{
    public function greet()
    {
        echo "멍멍! 안녕하세요";
    }
}

$dog = new Dog();
$dog->type = "강아지";
$dog->type = "멍멍이";
$dog->type = "10";

$dog->describe();
$dog->greet();