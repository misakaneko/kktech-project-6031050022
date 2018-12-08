<?php
function land($land, $value){
	$cars = array(
		'th' => '1',
		'jp' => '2',
	);
	  
	$cars = json_encode($cars);
	$cars = json_decode($cars, true);
	return $cars['th'];
}
//echo land('th','');

	$cars = array(
		 array('th' => '1'),
		 array('jp' => '2'),
	);
	  
	$cars = json_encode($cars);
	echo $cars;
$cars = json_decode($cars, true);
for($i=0;$i<1000;$i++){
	$i = $i;
}
echo $i;
	//$cars = json_decode($cars, true);
	//echo $cars[0]['th'];