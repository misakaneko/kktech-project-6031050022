<?php
define('username',substr(md5('username'.key),0,6));
define('nodemcu',substr(md5('nodemcu'.key),0,6));
define('rfid',substr(md5('rfid'.key),0,6));
define('keypad',substr(md5('keypad'.key),0,6));
/*$data = json_encode(array(
	'id' => 1,
	'type' => username,
	'name' => 6031050022,
	'data' => array(
		'password' => md5(0964280188),
		'friend name' => 'ธนวัฒน์',
		'last name' => 'พลเยี่ยม',
		'status' => '1',
		'date' => ''
	)
));
echo $data;
echo json_decode($data, true)['data']['last name'];*/

function login($step,$value,$pass){
	if($step == 1){
		if(sql_load(username, $value, 1) != "false"){
			return sed("username",$value).true;
		} else {return false;}
	} else if($step == 2){
		if(json_decode(sql_load(username, $value, 1), true)['password'] == sha1($pass)){
			return sed("login",true).true; 
		} else {
			return false;
		}
	} else if($step == 2){
	} else if($step == 2){
	} else if($step == 2){
	} else {
		return 'false';
	}
}
if(isset($_GET['api'])){
	if(isset($_GET['keypad'])){
		if($_GET['keypad'] == 0
			|| $_GET['keypad'] == 1
			|| $_GET['keypad'] == 2
			|| $_GET['keypad'] == 3
			|| $_GET['keypad'] == 4
			|| $_GET['keypad'] == 5
			|| $_GET['keypad'] == 6
			|| $_GET['keypad'] == 7
			|| $_GET['keypad'] == 8
			|| $_GET['keypad'] == 9
			|| $_GET['keypad'] == 'A'
			|| $_GET['keypad'] == 'B'
			|| $_GET['keypad'] == 'C'
			|| $_GET['keypad'] == 'D'
			|| $_GET['keypad'] == '#'
			|| $_GET['keypad'] == '*'){
				if(strlen($_GET['keypad']) == 1){
					if(sql_load(keypad, $_GET['api'], 1) != 'false'){
						$Jsonl = sql_load(keypad, $_GET['api'], 1);
						$Jsonl = json_decode($Jsonl, true);
						$Jsonl['data'] = $Jsonl['data'].$_GET['keypad'];
						echo json_encode($Jsonl);
					} else {
						sql_newdata(keypad, $_GET['api'], json_encode(array('data'=>'')));
					}
				}
			} else {}
		die();
	} else {}
	if(sql_load(nodemcu, $_GET['api'], 1) == 'false'){} else {
		$nodes = sql_load(nodemcu, $_GET['api'], 1);
		$node = json_decode($nodes, true);
		################################################################# 
		if($node['status'] == 1){
			if(isset($_GET['keycard'])){
				if(sql_load(rfid, sha1($_GET['keycard'].key), 1) != 'false'){
					if(preg_match('/'.sha1($_GET['keycard'].key).'/i', json_encode($node)) != 1){
						$node['book id'][(count($node['book id']) + 1)] = sha1($_GET['keycard'].key);
						if(sql_update(nodemcu, $_GET['api'], json_encode($node)) == 'true'){
							echo json_encode(array('status' => 1));
						} else {
							echo json_encode(array('status' => 0));
						}
					} else {
						$HHH = str_replace(sha1($_GET['keycard'].key),"null",json_encode($node));
						if(sql_update(nodemcu, $_GET['api'], $HHH) == 'true'){
							echo json_encode(array('status' => 1));
						} else {
							echo json_encode(array('status' => 0));
						}
					}
				} else {}
			} else {}
		} else {}
		################################################################# Login
		if(isset($_GET['username'])){
			if(login('1',$_GET['username'],'') == 1){
				$HHH = json_encode(array(
					'username' => $_GET['username'],
					'book id' => array(
					),
					'status' => 0
				));
				if(sql_update(nodemcu, $_GET['api'], $HHH) == 'true'){
					echo json_encode(array('status' => login('1',$_GET['username'],'')));
				} else {}
			} else {
				echo json_encode(array('status' => 0));
			}
		} else if(isset($_GET['password'])){
			if(login('2',$node['username'],$_GET['password']) == 1){
				$HHH = $node;
				$HHH['status'] = 1;
				$HHH = json_encode($HHH);
				if(sql_update(nodemcu, $_GET['api'], $HHH) == 'true'){
					echo json_encode(array('status' => login('2',$node['username'],$_GET['password'])));
				} else {}
			} else {
				echo json_encode(array('status' => 0));
			}
		} else {}
		#################################################################
	}
} else {}












