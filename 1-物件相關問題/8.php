<?php
trait Win
{
    protected $name = '尛';

    public function readMyName() : string
    {
        $this->name .= '?';
        return $this->name;
    }
}

class SomeThing
{
    use Win;

    public function __construct(string $name = null)
    {
        $this->name = $name ?? '';
    }

    public function readMyName() : string
    {
        $this->name .= '!';
        return $this->name;
    }
}

/**
 * 問題一
 * 下列程式可以執行嗎
 */
//$obj = new SomeThing();
//echo $obj->readMyName();

/**
 * 問題二
 * 如果可以執行結果為何?
 * 如果不能執行為什麼?
 */