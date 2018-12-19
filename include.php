<?php
	require_once constant("folder")."seo.php";
	require_once constant("folder")."filelog.php";
	require_once constant("folder")."base74.php";
	require_once constant("folder")."mysql.php";
	require_once constant("folder")."multilanguage.php";
	require_once constant("folder")."template_".TEMPLATE.".php";
	if(isBot()){exit();}
	
	//require_once constant("folder")."template-loading.php";
?>