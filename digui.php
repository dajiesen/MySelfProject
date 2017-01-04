<?php
function reverse($str){
	if(strlen($str)>0){
		reverse(substr($str,1));
		echo substr($str,0,1);
		return ;
	}

}
reverse('abcdefg');
