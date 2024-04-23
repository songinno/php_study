<?php

class Parents {
    public $name;
    protected $age;
    private $baby;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->baby = "애기 하나 있음";
        echo "Parents 생성자 호출!";
    }

    public function get_name() {
        return $this->name;
    }

    protected function get_age() {
        return $this->age;
    }

    private function get_baby() {
        return $this->baby;
    }
}