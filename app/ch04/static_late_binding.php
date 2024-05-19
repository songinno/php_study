<?php

class A
{
    public static function className()
    {
        echo __CLASS__;
    }

    public static function printClass()
    {
        static::className();
    }
}

class B extends A
{
    public static function className()
    {
        echo __CLASS__;
    }
}

B::printClass(); // B
