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
	$cars = json_decode($cars, true);
	//echo $cars[0]['th'];
	
    $str = '{ 

"players":[
   {

        "name":"Moldova",
        "image":"/Images/Moldova.jpg",
        "roll_over_image":"tank.jpg"
   },
   {

        "name":"Georgia",
        "image":"/Images/georgia.gif",
        "roll_over_image":"tank.jpg"
   } ]}';


 $arr = json_decode($str, true);
 $arrne['name'] = "dsds";
 array_push( $arr['players'], $arrne );
 print_r($arr);