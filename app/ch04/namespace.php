<?php

namespace AnswerBook\PHP;

class Student
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}

namespace AnswerBook\PYTHON;

class Student
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}

$php = new \AnswerBook\PHP\Student('PHP');
echo $php->name() . "\n"; // PHP

$python = new \AnswerBook\PYTHON\Student('PYTHON');
echo $python->name() . "\n"; // PYTHON