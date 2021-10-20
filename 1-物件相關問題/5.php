<?php

class Animal
{

	protected $_animal_name;

	private function sleep()
	{
		echo "sleep";
	}

}

class Dog extends Animal
{
	const NAME = __CLASS__;

	public function __construct()
	{
		$this->_animal_name = self::NAME;
	}
}


/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$dog = new Dog();
//echo $dog->_animal_name;

/**
 * 問題二
 * 若可以執行結果是什麼
 */

/**
 * 問題三
 * 下列程式可以執行嗎
 */
//$dog = new Dog();
//echo $dog->sleep();

/**
 * 問題四
 * 若可以執行結果是什麼
 */