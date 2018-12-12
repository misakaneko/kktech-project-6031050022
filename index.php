<?php
	define("TEMPLATE","library61");
	//define('ABSPATH', dirname(__FILE__).'/');
	define('ABSPATH', '');
	ECHO ABSPATH;
	//require_once "config.php";
	//require_once "include.php";
	if(file_exists("pass.txt") == 1){
		$pass = file_get_contents("pass.txt");
	} else {
		$pass = "";
	}
	echo $pass;
?>