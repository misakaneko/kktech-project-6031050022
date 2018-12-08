<?php
$cars = array(
	'th' => '1',
	'jp' => '2',
);
  
$cars = json_encode($cars);
$cars = json_decode($cars, true);
echo $cars['jp'];