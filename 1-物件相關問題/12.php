<?php

class PeopleInfo
{
    private static $eyes = 2;

    public function getEyes() : int
    {
        return self::$eyes;
    }
}

class Person
{
    private $peopleInfo;

    public function __construct(PeopleInfo $peopleInfo)
    {
        $this->peopleInfo = $peopleInfo;
    }

    public function getEyes() : int
    {
        return $this->peopleInfo->getEyes();
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$yorkInfo = new PeopleInfo();
//$york = new Person( $yorkInfo);
//$york->eyes = 3;
//echo $york->getEyes().PHP_EOL;
//echo $york->eyes.PHP_EOL;

/**
 * 問題二
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */
