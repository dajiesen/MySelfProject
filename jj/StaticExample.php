<?php

class StaticExample
{
    
    
    //静态访问   类名::
    //类的内部使用static  用self::
    static public $aNum = 0;

    static public function sayHello()
    {
        echo self::$aNum+10;
    }
}

echo StaticExample::$aNum;

echo StaticExample::sayHello();