<?php

class MyTeam
{

	public function __construct( int $number  = 1)
	{
		for($i = 1; $i<=$number; $i++)
		{
			$member = "member_{$i}";
			$this->$member = $i;
		}
	}
}


/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$obj = new MyClass( 4 );
//foreach( $obj as $member )
//{
//	var_dump( $member );
//}

/**
 * 問題二
 * 若可以執行結果是什麼
 */