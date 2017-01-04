<?php
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
