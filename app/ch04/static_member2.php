<?php

class StaticParentMember
{
    public $parent_property;

    public static $parent_static_property = "parent_static_property";

    const PARENT_CONST = "parent`s cosntant";

    public function parentMethod()
    {
        $this->parent_property = "parent_property";
        echo $this->parent_property . "\n";
    }
}

class StaticMember2 extends StaticParentMember
{
    public $property;
    public static $static_property;
    const CONSTANT = "constant";

    public function normalMethod()
    {
        // ! 자기 자신의 정적 프로퍼티에 접근
        self::$static_property = "static property11111";
        echo self::$static_property . "\n";

        // ! 부모 클래스에 접근
        $this->parent_property;
        echo parent::$parent_static_property . "\n";
        echo parent::PARENT_CONST . "\n";
        parent::parentMethod();
    }

    public static function staticMethod()
    {
        // ! 자기 자신의 정적 프로퍼티에 접근
        self::$static_property = "static property22222";
        echo self::$static_property . "\n";
        echo self::CONSTANT . "\n";
    }
}

$static_member = new StaticMember2();

echo "------\n";
echo $static_member->normalMethod();
echo "------\n";
echo $static_member->parentMethod();

echo "------\n";
echo StaticMember2::staticMethod();
echo "------\n";
echo StaticMember2::$parent_static_property. "\n";
