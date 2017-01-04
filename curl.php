<?php

$ch = curl_init("www.baidu.com");
$fp = fopen("baidu.txt","w");

curl_setopt($ch,CURLOPT_FILE,$fp);
curl_setopt($ch,CURLOPT_HEADER,0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
