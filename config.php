<?php
	SESSION_START();
	$dsv_sql = ["", "localhost", "root", "", "library61"];
	$dsv_con = @new mysqli($dsv_sql[1], $dsv_sql[2], $dsv_sql[3], $dsv_sql[4]);
	if ($dsv_con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {}
	function ses($value){if(isset($_SESSION[$value])){return $_SESSION[$value];} else {return "FALSE";}}
	function sed($name,$value){if(strlen($name) >= 2){} else {die();}$_SESSION[$name] = $value;}
	
	for($i=0;$i<=6;$i++){
		//echo $i.ses("test");
		if(ses("test") != "FALSE" && ses("test") != ""){
			$i = 6;
		} else {
			echo sed("test",rand(111111,999999));
		}
	}
	if(ses("test") != "FALSE" && ses("test") != ""){} else {die();}
	
	
	for($i=0;$i<=6;$i++){
		//echo $i.ses("serial");
		if(ses("serial") != "FALSE" && ses("serial") != ""){
			$i = 6;
		} else {
			echo sed("serial",md5(rand(111111,999999)));
		}
	}
	if(ses("test") != "FALSE" && ses("test") != ""){} else {die();}
	
	
	define('ABSPATH', dirname(__FILE__).'/');
	define("folder",ABSPATH."z-include/");
	define("folder_filelog",ABSPATH."z-content/filelog/");
	
	
	
	
	header('Content-Type: text/html; charset=utf-8');

?>