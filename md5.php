<?php
$str = 'POST';
$post = array(
	"appkey"=>"56679b50e0f55aa7cf0059ed",
	"timestamp"=>time(),     
  	"type"=>"unicast",
  	"device_tokens"=>"AseD7Slp8B468IIOgOuBVrf72Dd3nilpIbe7nt39ytB8",
	"payload"=>array(
		"display_type"=>"message",
		"body"=>array(
			"custom"=>array(
				"route"=>"idarex_android_app://questions/tv/1",
				"title"=>"老司机",
				"body"=>"哈哈哈",
				"icon"=>"https://o2mf01w4r.qnssl.com/20160405_ganwanjun_vatar.png",
				"largeIcon"=>"https://o2mf01w4r.qnssl.com/20160405_ganwanjun_vatar.png"
				)
		)
	)
);
$json = json_encode($post);
echo $json;
$str2 = 'qytle2ajg7aqbvhwcehoswfm7kjqpx0l';
$str3 = 'http://msg.umeng.com/api/send';
echo MD5($str.$str3.$json.$str2);
