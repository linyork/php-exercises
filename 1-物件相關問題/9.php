<?php

interface Person
{
    public function age(int $age = 0 );
    public function eat();
}

class Boy implements Person
{
    public function age(int $age = 0 )
    {
        return $age;
    }

    public function eat()
    {
        return '亂吃';
    }
}

class Girl implements Person
{
    const AGE_FOREVER = 18;

    public function age(int $age = 0 )
    {
        return Girl::AGE_FOREVER;
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$christina = new girl();
//echo $christina->age();

/**
 * 問題二
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */


/**
 * 問題三
 * 下列程式可以執行嗎
 */
//$york = new boy();
//echo $york->age();

/**
 * 問題四
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */
