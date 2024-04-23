<?php
class Fruit {
    public $name;
    public $color;
    public static $price;

    function set_fruit(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
        // $this->price = 1000; // # Notice: Accessing static property Fruit::$price as non static in ...
    }

    function get_name() : string {
        return $this->name;
    }

    function get_color() : string {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_fruit(name: "사과", color: "빨간색");
echo $apple->get_name() . "<br/>"; // 사과
echo $apple->get_color() . "<br/>"; // 빨간색

$banana = new Fruit();
$banana->set_fruit(name: "바나나", color: "노란색");
echo $banana->get_name() . "<br/>"; // 바나나
echo $banana->get_color() . "<br/>"; // 노란색
