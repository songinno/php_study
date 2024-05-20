<?php

final class ParentClass1
{
    public function a()
    {
        echo 'Parent A';
    }

}

class ParentClass2
{
    public final function b()
    {
        echo 'Parent B';
    }
}

// ! 상속 불가
/*class ChildClass1 extends ParentClass1
{

}*/

class ChildClass2 extends ParentClass2
{
    // ! 오버라이드 불가
/*    public function b() //
    {

    }*/
}