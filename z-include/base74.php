<?php
function base74($type, $value, $bit, $pass){
	if($type == "encode"){
		return $value;//base64_encode($value);
	} else if($type == "decode"){
		return $value;//base64_decode($value);
	} else {return "false";}
}
?>