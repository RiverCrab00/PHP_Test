<?php
//取网址后缀名
$str='https://www.zhihu.com/a.html?c=123';
$path=pathinfo($str);
	echo "<pre>";
	print_r($path);
	echo "<hr>";
$extension=$path['extension'];
$arr=explode('?',$extension);
$res=$arr[0];
var_dump($res);

echo "<hr />";
$path2=parse_url($str);
var_dump($path2);
$str=substr($path2['path'],strpos($path2['path'],'.'));
var_dump($str);
