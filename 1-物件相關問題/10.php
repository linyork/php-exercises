<?php

class SingleDog
{
    private static $singleDog;

    private $name;

    public function __construct(string $userName)
    {
        $this->name = $userName;
    }

    public static function getInstance(string $userName )
    {
        SingleDog::$singleDog = new SingleDog( $userName );
        return SingleDog::$singleDog;
    }

    public function getName()
    {
        return $this->name;
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
$dog1 = SingleDog::getInstance( '周星星');
$dog2 = SingleDog::getInstance( '周星馳');
echo $dog1->getName().PHP_EOL;
echo $dog2->getName().PHP_EOL;

/**
 * 問題二
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */
