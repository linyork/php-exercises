<?php
class car
{
	private $name = 'york的車子';
	private static $normal_name = 'Subaru';

	// __construct 不得為 static function
	public function __construct()
	{
		echo 'instance 才會跑到這裡'.PHP_EOL;
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


echo car::getNormalName().PHP_EOL;
echo (new car)->getName().PHP_EOL;

// 問題一
// echo (new car)->getNormaName().PHP_EOL;
// 上述程式可否執行