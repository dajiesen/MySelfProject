<?php
$where = ['name'=>'jason','age'=>10,'like'=>'gn'];
$key = array_keys($where);
$value = array_values($where);
$str = '';
for($i=0;$i<count($where);$i++){
	if(!is_int($value[$i])){
		$value[$i] = "'".$value[$i]."'";
}
	$str .= " ".$key[$i].'='.$value[$i] ." and";
}
echo rtrim($str,'and');
