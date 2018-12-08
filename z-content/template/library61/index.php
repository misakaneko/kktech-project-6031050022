<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$a = $_SERVER['REQUEST_URI'];
	$b = '/'.TEMPLATE.'/';
	if($a == $b){
		return 1;
	} else {}
	//get_header();
	//get_body();
	echo 1;
?>
