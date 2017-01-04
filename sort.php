<?php
$number = 0;
echo number_format($number, 2, '.', ' ');
exit;
if(is_int($int)){

echo 111;
}else{
echo 222;
}
exit;
$a = 0.0;
if(empty($a)){
	echo 'true';
}else{
	echo 'false';
}

EXIT;
$b=array('4','3','8','9','2','1');
$len=count($b);
for($k=1;$k<$len;$k++)
{
for($j=$len-1,$i=0;$i<$len-$k;$i++,$j--)
if($b[$j]<$b[$j-1]){
//如果是从大到小的话，只要在这里的判断改成if($b[$j]>$b[$j-1])就可以了
 $tmp=$b[$j];
 $b[$j]=$b[$j-1];
 $b[$j-1]=$tmp;
}
}
print_r($b);
