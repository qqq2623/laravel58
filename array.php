<?php
/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/5
 * Time: 15:46
 */


$a = [
	[
		["q","w","e"],
		["1q","2w","3e"],
		["qq","ww","ee"],
	],
	[
		["xq","cw","ve"],
		["4q","5w","6e"],
		["1qq","2ww","3ee"],
	],
];



$b = [];

//if(!empty($a)){
//	foreach($a as $value){
//		foreach($value as $v){
//			$b[] = $v;
//		}
//	}
//}
//
//var_dump($b);

array_map(function($value) use (&$b){
//	foreach($value as $value1){
//		$b[] = $value1;
//	}
//	return $b;
	array_map(function($v) use (&$b){
		$b[] = $v;
	} , $value);
}, $a);
var_dump($b);