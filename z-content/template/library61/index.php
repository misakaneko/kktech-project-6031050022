<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$a = $_SERVER['REQUEST_URI'];
	$b = '/'.$_SESSION["TEMPLATE"].'/';
	$c = '/'.$_SESSION["Z-TEMPLATE"].$_SESSION["TEMPLATE"].'/';
	if($a == $b || $a == $c){
		die();
	} else {}
	//get_header();
	//get_body();
	echo $_SERVER['REQUEST_URI'];
?>
