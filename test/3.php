<?php
function base74($type, $value, $bit, $pass){
	if (is_numeric($bit) == 1) {} else {return "false";}
	if ($bit <= 8) {} else {return "false";}
	$f_bi = $bit;
	$f_hi = md5($pass);
	$f_za = substr(md5($f_hi),2,1);
	$f_zb = substr(md5($f_hi),9,1);
	$f_zc = substr(md5($f_hi),17,1);
	$f_zd = substr(md5($f_hi),29,1);
	$f_ch = array(
		substr(md5($f_hi."H"),1,$f_bi),
		substr(md5($f_hi."m"),1,$f_bi),
	);
	$f_cy = array(
		"H",
		"m",
	);
	$f_cz = array(
		substr(md5($f_hi."H"),1,$f_bi),
		substr(md5($f_hi."m"),1,$f_bi),
	);
	$f_cx = array(
		"H",
		"m",
	);

	if($type == "encode"){
		$encodea = str_replace($f_cy,$f_ch,base64_encode($value));
		$encodeb = str_replace($f_cz,$f_cx,base64_encode($encodea));
		$encodeb = str_replace('=','',$encodeb);
		return substr(md5($f_hi),1,$f_bi).$encodeb.substr(md5($encodeb),1,$f_bi).'=';
	} else if($type == "decode"){
		$value = mb_substr($value,0,-4);
		$f_vi = strlen($value);
		return base64_decode(str_replace($f_ch,$f_cy,base64_decode(str_replace($f_cz,$f_cx,substr($value,$f_bi,$f_vi)))));
	} else {return "false";}
}

header("Content-Type: image/jpeg");
echo base74("decode", base74("encode", file_get_contents("../6e7ad70fly1fvf1kp5yfqj22dc2dcnjn.jpg"), "4", "ki"), "4", "ki");