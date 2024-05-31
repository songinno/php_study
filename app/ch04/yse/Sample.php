<?php

namespace yse;

class Sample
{
    // ! Member Variable
    private $name;
    private $age;

    // ! Constructor
    public function __construct()
    {
        $this->name = "yse";
        $this->age = 10;
    }

    // ! Method
    public function tell()
    {
        echo "my name is {$this->name}";
        echo " and my age is {$this->age}";
    }

    // ! Method. return $this
    public function add_age($age)
    {
        $this->age += $age;
        return $this;
    }

    // ! Static Method
    public static function factory()
    {
        return new Sample();
    }
}
