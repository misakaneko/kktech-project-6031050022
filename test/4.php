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
$land = 'en';
$value = '3';

	$cars = array(
		 array('f' => 'th','th' => '1'),
		 array('f' => 'jp','jp' => '2'),
	);
	$cars = json_encode($cars);
function land_insert($land,$value){
	$cars = '[{"f":"th","th":"1"},{"f":"jp","jp":"2"}]';
	$cars = json_decode($cars, true);
	for($i=0,$f='';$i<5;$i++){
		if(isset($cars[$i]['f'])){
			if($cars[$i]['f'] != $land){
				for($i=0,$f='';$i<5;$i++){
					if(isset($cars[$i]['f'])){
						$f = $f.json_encode(array(	'f' => $cars[$i]['f'],
												$cars[$i]['f'] => $cars[$i][$cars[$i]['f']])
						);
												
					} else {
						$l = $i;
						$i = 9999999;
					}
				} 
				return '['.$f.json_encode(array(	'f' => $land, $land => $value)).']';
			} else {
				$i = 9999999;
				return 'false';
			}
		} else {
			$i = 9999999;
			return 'false';
		}
	}
}
echo land_insert('kr','3');