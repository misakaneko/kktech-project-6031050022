<?php
	define("TEMPLATE","library61");
	define('ABSPATH', dirname(__FILE__).'/');

	require_once "config.php";
	require_once "include.php";
	
	sql_update(233, '西野カナ/トリセツ『ヒロイン失格』主題歌');
	//echo sql_newdata('', '', '西野カナ/トリセツ『ヒロイン失格』主題歌 （Full Cover by Kobasolo & Lefty Hand Cream）');
	echo sql_load('', '', '');
?>