<?php

class Animal
{
	public function __construct()
	{
		echo '我是動物類別是 : '.__CLASS__.PHP_EOL;
	}
}

class Human extends Animal
{
	public function __construct()
	{
		echo '我是人類別是 : '.__CLASS__.PHP_EOL;
	}
}

$obj = new Human;

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$obj = new Human;

/**
 * 問題二
 * 若可以執行結果是什麼
 */