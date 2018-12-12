<?php
if(isset($_GET['t'])){ ?>
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch1" value="Mickey">
  <input type="submit" value="Submit">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch2" value="Mickey">
  <input type="submit" value="Submit">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch3" value="Mickey">
  <input type="submit" value="Submit">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch4" value="Mickey">
  <input type="submit" value="Submit">
</form> 
<?php
	if(sql_load('0x77777', 'test', 1) == 'false'){
		echo sql_newdata('0x77777', 'test', '{"ch1":0,"ch2":0,"ch3":0,"ch4":0}');
	} else {
		$contents = sql_load('0x77777', 'test', 1);
	}
	function aaa($value){
		if($value == 1){
			return 0;
		} else if($value == 0){
			return 1;
		} else {}
	}
	if(isset($_POST['ch1'])){
		$contentsDecoded = json_decode($contents, true);
		$contentsDecoded['ch1'] = aaa($contentsDecoded['ch1']);
		$contents = json_encode($contentsDecoded);
		echo sql_update('0x77777', 'test', $contents);
	} else if(isset($_POST['ch2'])){
		$contentsDecoded = json_decode($contents, true);
		$contentsDecoded['ch2'] = aaa($contentsDecoded['ch2']);
		$contents = json_encode($contentsDecoded);
		echo sql_update('0x77777', 'test', $contents);
	} else if(isset($_POST['ch3'])){
		$contentsDecoded = json_decode($contents, true);
		$contentsDecoded['ch3'] = aaa($contentsDecoded['ch3']);
		$contents = json_encode($contentsDecoded);
		echo sql_update('0x77777', 'test', $contents);
	} else if(isset($_POST['ch4'])){
		$contentsDecoded = json_decode($contents, true);
		$contentsDecoded['ch4'] = aaa($contentsDecoded['ch4']);
		$contents = json_encode($contentsDecoded);
		echo sql_update('0x77777', 'test', $contents);
	} else {}
	echo $contents;
} else {
	if(sql_load('0x77777', 'test', 1) == 'false'){
		echo sql_newdata('0x77777', 'test', '{"ch1":0,"ch2":0,"ch3":0,"ch4":0}');
	} else {
		$contents = sql_load('0x77777', 'test', 1);
	}
	echo $contents;
	/*echo '['.json_encode(array(
		"ch1" => rand(0,1),
		"ch2" => rand(0,1),
		"ch3" => rand(0,1),
		"ch4" => rand(0,1),
	)).']';*/
}