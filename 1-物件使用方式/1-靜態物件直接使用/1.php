<?php
class Car
{
	private static $_normal_name = 'Subaru';
	private $_name = 'york的車子';

	// __construct 不得為 static function
	public function __construct()
	{
		//echo 'instance 才會跑到這裡'.PHP_EOL;
	}

	// static
	public static function getNormalName() : string
	{
		return self::$_normal_name;
	}

	// instance
	public function getName() : string
	{
		return $this->_name;
	}
}

/**
 * 問題一
 * echo Car::getNormalName();
 * 上述程式可以執行嗎
 */

/**
 * 問題二
 * echo Car::getName();
 * 上述程式可以執行嗎
 */

/**
 * 問題三
 * $obj = new Car()
 * echo $obj->getNormaName();
 * 上述程式可以執行嗎
 */

/**
 * 問題三
 * $obj = new Car()
 * echo $obj->getName();
 * 上述程式可以執行嗎
 */