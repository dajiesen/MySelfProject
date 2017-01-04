<?php
$program_name = '*';
if (preg_match("/([[:punct:]])|“|”|‘|’|￥/isU", $program_name)) {
echo 222;
            }else{
echo 33;
}
