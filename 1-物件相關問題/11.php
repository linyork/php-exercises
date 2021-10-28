<?php

class SingleDog
{
    private static $singleDogs = [];

    private $name;

    public function __construct(string $userName)
    {
        $this->name = $userName;
    }

    public static function getInstance( $userName )
    {
        if( isset( self::$singleDogs[$userName] ) ) return self::$singleDogs[$userName];
        self::$singleDogs[$userName] = new SingleDog( $userName );
        return  self::$singleDogs[$userName];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$dog1 = SingleDog::getInstance( 'york');
//$dog2 = SingleDog::getInstance( 'jason');
//$dog1->setName('jason');
//echo $dog1->getName().PHP_EOL;
//echo $dog2->getName().PHP_EOL;

/**
 * 問題二
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */
