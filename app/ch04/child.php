<?php

include "parents.php";

class Child extends Parents {
    public $parents;

    public function __construct($name, $age, $parents)
    {
        $this->name = $name;
        $this->age = $age;
        $this->parents = $parents;
    }

    public function echo_parents_methods() {
        echo $this->get_name() . "<br>";
        echo $this->get_age() . "<br>";
        // $this->get_baby(); // # 에러 발생
    }

    public function child_method() {
        echo $this->parents;
    }
}

$child = new Child("김자식", 10, "엄마랑아빠");
$child->echo_parents_methods();
$child->child_method();
