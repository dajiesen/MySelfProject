<?php
ini_set('date.timezone','Asia/Chongqing');
file_put_contents('time.txt',date("Y-m-d H:i:s",time())."\r\n",FILE_APPEND); 
