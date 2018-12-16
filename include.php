<?php
	require constant("folder")."seo.php";
	require constant("folder")."filelog.php";
	require constant("folder")."base74.php";
	require constant("folder")."mysql.php";
	require constant("folder")."multilanguage.php";
	require constant("folder")."template_".TEMPLATE.".php";
	if(isBot()){exit();}
	
	//require constant("folder")."template-loading.php";
?>