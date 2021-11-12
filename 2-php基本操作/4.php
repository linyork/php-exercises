<?php

/**
 * 問題
 * 能印出什麼
 */
const ADD = 1 << 0;
const EDIT = 1 << 1;
const DEL = 1 << 2;
const SEARCH = 1 << 3;

$a = ADD | DEL;
$b = DEL | SEARCH;

if ( (ADD & $a) > 0 ) var_dump('有新增');
if ( (EDIT & $a) > 0 ) var_dump('有編輯');
if ( (DEL & $a) > 0 ) var_dump('有刪除');
if ( (SEARCH & $a) > 0 ) var_dump('有查詢');