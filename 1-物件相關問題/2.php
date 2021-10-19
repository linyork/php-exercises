<?php
class Home
{
	public static $name = '幸福美滿家園';

	public function __construct($home_name = null)
	{
		$this->name = $home_name ?? self::$name;
	}

	public function getName() : string
	{
		return self::$name;
	}

	// static
	public static function getInstance(string $home_name = null) : self
	{
		return new self($home_name);
	}
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//echo Home::getName();

/**
 * 問題二
 * 下列程式可以執行嗎
 */
//$obj = new Home( '深海的大鳳梨');
//echo $obj->getName();

/**
 * 問題三
 * 下列程式可以執行嗎
 */
//echo Home::getInstance('木葉村')->getName();




