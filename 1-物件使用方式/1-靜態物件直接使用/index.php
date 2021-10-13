<?php
class car
{
	private static $normal_name = 'Subaru';
	private $name = 'york的車子';

	// __construct 不得為 static function
	public function __construct()
	{
		//echo 'instance 才會跑到這裡'.PHP_EOL;
	}

	// static
	public static function getNormalName() : string
	{
		return self::$normal_name;
	}

	// instance
	public function getName() : string
	{
		return $this->name;
	}
}

/**
 * 問題一
 * echo car::getNormalName();
 * 上述程式可否執行
 */

/**
 * 問題二
 * echo car::getName();
 * 上述程式可否執行
 */

/**
 * 問題三
 * $obj = new car()
 * echo $obj->getNormaName();
 * 上述程式可否執行
 */

/**
 * 問題三
 * $obj = new car()
 * echo $obj->getName();
 * 上述程式可否執行
 */