<?php
// 把数组的key转换为大写或者小写， 默认小写。 CASE_LOWER  CASE_UPPER
//$age = array('jason'=>1,'age'=>2,'mark'=>9);
//print_r(array_change_key_case($age,CASE_UPPER));

// 函数把数组分割为新的数组块  param: $arr,size,true or false
//$age = array("Bill"=>"60","Steve"=>"56","Marry"=>"2","Mark"=>"31","Davie"=>"45");
//print_r(array_chunk($age,2));

// array_combine() 函数通过合并两个数组来创建一个新数组，其中一个数组是键名，一个是值
//返回一个新数组，如果两个数组数量不对，则报错
$arr1 = array("name","age","like");
$arr2 = array("jason","12","guliang","hh");
print_r(array_combine($arr1,$arr2));
/

