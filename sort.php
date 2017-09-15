<?php
//迭代,二分法
function p($array,$value,$start,$end){
	if($start>$end){
		return "不存在的";
	}
	$middle=floor(($start+$end)/2);
	//echo $middle;
	if($array[$middle]==$value){
		return $middle;
	}elseif($array[$middle]<$value){
		$start=$middle+1;
		return p($array,$value,$start,$end);
	}elseif($array[$middle]>$value){
		$end=$middle-1;
		return p($array,$value,$start,$end);
	}		
}
$arr=[1,2,3,4,5,6,7,8];
echo p($arr,5,0,count($arr)-1);

//快速排序
$arr=[2,10,50,15,18,30,25];
function speed($arr){
	if(count($arr)<=1){
		return $arr;
	}
	$key=array_shift($arr);
	$arr_left=array();
	$arr_right=array();
	foreach($arr as $value){
		if($value<$key){
			$arr_left[]=$value;
		}else{
			$arr_right[]=$value;
		}
	}
	$arr_key=array($key);
	$arr=array_merge(speed($arr_left),$arr_key,speed($arr_right));
	return $arr;
}
	echo "<pre>";
	print_r(speed($arr));
	echo "</pre>";
	echo "<hr>";

//插入排序
$arr=[2,10,50,15,18,30,25];
function insert_sort($arr){
	for($i=1;$i<count($arr);$i++){
		$temp=$arr[$i];
		for($j=$i-1;$j>0;$j--){
			if($arr[$j]>$temp){
				$arr[$j+1]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}
	return $arr;
}
	echo "<pre>";
	print_r(insert_sort($arr));
	echo "</pre>";
	echo "<hr>";

$arr=[2,10,50,15,18,30,25];
function select($arr){
	for($i=0;$i<count($arr);$i++){
		$min=$arr[$i];
		$minIndex=$i;
		for($j=$i+1;$j<count($arr);$j++){
			if($min>$arr[$j]){
				$min=$arr[$j];
				$minIndex=$j;
			}
		}
		$temp=$arr[$i];
		$arr[$i]=$arr[$minIndex];
		$arr[$minIndex]=$temp;
	}
	return $arr;
}
	echo "<pre>";
	print_r(select($arr));
	echo "</pre>";
	echo "<hr>";
