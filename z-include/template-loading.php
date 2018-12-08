<?php
	function detect_url(){
		$a = $_SERVER['REQUEST_URI'];
		$b = '/'.TEMPLATE.'/';
		if($a == $b){
			echo 1;
		} else {}
	}
	require_once(folder_template."index.php");
?>