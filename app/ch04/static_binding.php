<?php

class A
{
    public static function className()
    {
        echo __CLASS__;
    }

    public static function printClass()
    {
        self::className();
    }
}

class B extends A
{
    public static function className()
    {
        echo __CLASS__;
    }
}

B::printClass(); // A
