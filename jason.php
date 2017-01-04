<?php
$a = 'abcdefg';
echo $a[0];
exit;
$url = "http://www.baidu.com/aaa/bbb/ccc?id=1&user_id=2";
$aa = parse_url($url);
var_dump(explode("&",$aa['query']));
exit;
echo time();
exit;
$arr = [
     0=>[
	  'name'=>'jason'
	],
     1=>[
	  'name'=>'jack'
	]

];
$str = serialize($arr);
echo "<pre>";
var_dump($str);
exit;
$url = 'https://mobile.idarex.com/wechat-article/57c3d3468102ca0096360511&str=1&t=2';
if(preg_match('/wechat-article\/([a-z0-9])+/',$url,$match)){
	echo "<pre>";
	var_dump($match);
}
exit;
echo "<pre";
var_dump(explode("/",$url));
exit;
$url = 'https://o2mb72adu.qnssl.com/FjKtgTHE4LnW0k2WEhYwjlk-lndf?imageMogr2/crop/!304x374a0a0';
var_dump(explode("?",$url));
echo count(explode("?",$url));
exit;
$url1 = 'https://mobile.idarex.com/tv/1633';
$url2 = 'https://mobile.idarex.com/wechat-article/57bac0f78102ca00d210ae01';
$url3 = 'https://mobile.idarex.com/activity/737';
var_dump(explode("/",$url3));
exit;
$url4 = 'http://www.idarex.com/activity/saldkfjaslkdjfalskjdflaj';
$pattern = '/https:\/\/mobile.idarex.com\/(tv|wechat-article|activity)\/\w\d/';
if(preg_match($pattern,$url4,$match)){
	echo 11;
}else{
	echo 'error';
}

echo "<pre>";
var_dump($match);
?>
