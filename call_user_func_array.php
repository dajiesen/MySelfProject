<?php
$arr = [
	'a'=>'a',
	'b'=>'o'
];
$res = call_user_func_array('foobar',$arr);

function foobar($str){
	var_dump(explode(",",$str));
}
