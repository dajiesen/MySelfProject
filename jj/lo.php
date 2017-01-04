<?php
/*
$a1=null;
$a2=false; 
$a3=0; 
$a4=''; 
$a5='0';
$a6='null'; 
$a7=array(); 
$a8=array(array()); 
echo empty($a1) ? 'true' : 'false';    
echo empty($a2) ? 'true' : 'false'; 
echo empty($a3) ? 'true' : 'false';
echo empty($a4) ? 'true' : 'false';    
echo empty($a5) ? 'true' : 'false';
echo empty($a6) ? 'true' : 'false';    
echo empty($a7) ? 'true' : 'false'; 
echo empty($a8) ? 'true' : 'false'; 
*/
$a1 = null;
$a2 = false;
$a3 = 0;
$a4 = '';
$a5 = '0';
$a6 = 'null';
$a7 = array();
$a8 = array(array());
echo empty($a1) ? "true\r\n" : "false\r\n";
echo empty($a2) ? "true\r\n" : "false\r\n";
echo empty($a3) ? "true\r\n" : "false\r\n";
echo empty($a4) ? "true\r\n" : "false\r\n";
echo empty($a5) ? "true\r\n" : "false\r\n";
echo empty($a6) ? "true\r\n" : "false\r\n";
echo empty($a7) ? "true\r\n" : "false\r\n";
echo empty($a8) ? "true\r\n" : "false\r\n";

function get_arr($arr){
    unset($arr[0]);
}
$arr1 = array(1,2);
$arr2 = array(1,2);
get_arr($arr1);
get_arr($arr2);
echo count($arr1);
echo count($arr2);

