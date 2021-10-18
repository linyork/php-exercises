<?php
abstract class BreadCrumbsTmplate
{
	protected $_list, $_level;

	abstract protected function __construct();

	abstract public function addBread( string $level, array $item);

	public function getBreadCrumbs( ) : array
	{
		foreach ($this->_level as $row)
		{
			if(empty($this->_list[$row])) throw new Exception("missing level $row");
		}
		return $this->_list;
	}
}

class ShopBreadCrumbs extends BreadCrumbsTmplate
{
	const PREF = 'pref';
	const AREA = 'area';

	public function __construct()
	{
		$this->_level = ['pref','area'];
	}

	public function addBread( string $level, array $item) : self
	{
		$this->_list[$level] = $item;
		return $this;
	}
}

/**
 * 問題一
 * $bread = new ShopBreadCrumbs();
 * $bread->addBread( ShopBreadCrumbs::PREF, ['My item']);
 * 上述程式可以執行嗎
 */

/**
 * 問題二
 * 若可以執行 $bread 物件裡的 _list 是什麼
 */