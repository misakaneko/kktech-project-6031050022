<?php
	function get_header(){
		require_once(folder_template.TEMPLATE."/header.php");
	}
	function get_body(){
		require_once(folder_template.TEMPLATE."/body.php");
	}
	if(isset($_GET['api']) && $_GET['api'] == '9aed78e2bf1678b942c781b3d6283f8e'){
		require_once(folder_template.TEMPLATE."/api.php");
	} else {
		require_once(folder_template.TEMPLATE."/index.php");
	}
	
?>