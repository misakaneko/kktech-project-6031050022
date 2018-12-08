<?php
	function detect_url(){
		$a = $_SERVER['REQUEST_URI'];
		$b = '/'.TEMPLATE.'/';
		if($a == $b){
			return 1;
		} else {}
	}
	function get_header(){
	}
	function get_body(){
	}
	require_once(folder_template."index.php");
?>