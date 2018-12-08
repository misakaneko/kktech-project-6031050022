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
		 array('f' => 'th','th' => '1'),
		 array('f' => 'jp','jp' => '2'),
	);
	
	$cars = json_encode($cars);
	echo $cars;
$cars = json_decode($cars, true);

for($i=0;$i<5;$i++){
	if(isset($cars[$i]['f'])){
		echo $cars[$i][$cars[$i]['f']];
	} else {
		$i = 5;
	}
}

	$cars = array(
		 array('f' => 'th','th' => '1'),
		 array('f' => 'jp','jp' => '2'),
	)';
	
	$cars = json_encode($cars);
	echo $cars;
	//$cars = json_decode($cars, true);
	//echo $cars[0]['th'];