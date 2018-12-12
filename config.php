<?php
	SESSION_START();
	
	define("key","ki");
	define("bit","4");
	if(md5($_SERVER['SERVER_ADDR']) == '3c4cf297a20c52e0194a2559db0ef242'){
		if(file_exists("pass.txt") == 1){
			$pass = file_get_contents("pass.txt");
		} else {
			$pass = "";
		}
	} else {$pass = "";}
	
	$dsv_sql = ["", "localhost", "root", "$pass", "library61"];
	$dsv_con = @new mysqli($dsv_sql[1], $dsv_sql[2], $dsv_sql[3], $dsv_sql[4]);
	if ($dsv_con->connect_error) {
		echo $pass;
		echo "<!--";die("Connection failed: " . $dsv_con->connect_error);
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
	
	
	
	define("folder",ABSPATH."z-include/");
	define("folder_filelog",ABSPATH."z-content/filelog/");
	define("folder_template",ABSPATH."z-content/template/");
	define("folder_ztemplate","z-content/template/");
	
	$_SESSION["TEMPLATE"] = TEMPLATE;
	$_SESSION["Z-TEMPLATE"] = folder_ztemplate;
	
	header('Content-Type: text/html; charset=utf-8');

?>