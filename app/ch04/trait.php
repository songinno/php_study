<?php

trait Dog
{
    public $type;
    public $name;
    public $age;

    public function describe()
    {
        echo "{$this->type}의 이름은 {$this->name}이고, 나이는 {$this->age}입니다. \n";
    }
}

trait Say
{
    abstract public function greet();
}

class Animal
{
    use Dog, say;

    public function greet()
    {
        echo "안녕하세요!";
    }
}

$animal = new Animal();
$animal->type = "고양이";
$animal->name = "나비";
$animal->age = "5";

$animal->describe();
$animal->greet();