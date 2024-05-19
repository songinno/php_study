<?php

class A2
{
    private function className()
    {
        echo __CLASS__ . "\n";
    }

    public function printClass()
    {
        $this->className();
        static::className();
    }
}

class B2 extends A2
{

}

class C2 extends A2
{
    private function className()
    {

    }
}

$b = new B2();
$b->printClass();
// A
// A

$c = new C2();
$c->printClass();
// A
// PHP Fatal error:  Call to private method C2::className() from context 'A2'