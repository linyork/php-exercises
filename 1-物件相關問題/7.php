<?php

abstract class Person
{
    public function eat() : string
    {
        return '吃';
    }

    protected function breathing() : string
    {
        return '呼吸';
    }
}

class User extends Person
{
    public function move() : string
    {
        return '移動';
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$york = new User();
//echo $york->eat();

/**
 * 問題二
 * 下列程式可以執行嗎
 */
//$york = new User();
//echo $york->breathing();

/**
 * 問題三
 * 下列程式可以執行嗎
 */
//$york = new Person();
//echo $york->breathing();