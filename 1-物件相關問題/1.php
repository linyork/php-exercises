<?php
class Car
{
	private static $_normal_name = '西羅摩';
	private $_name = 'york的天竺鼠車車';

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
 * 下列程式可以執行嗎
 */
//echo Car::getNormalName();

/**
 * 問題二
 * 下列程式可以執行嗎
 */
//echo Car::getName();

/**
 * 問題三
 * 下列程式可以執行嗎
 */
$obj = new Car();
//echo $obj->getNormaName();

/**
 * 問題三
 * 下列程式可以執行嗎
 */
$obj = new Car();
//echo $obj->getName();