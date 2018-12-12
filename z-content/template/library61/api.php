<?php
if(isset($_GET['t'])){
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
	$Sdsd = json_decode($contents, true);
	?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch1" value="Mickey">
  <input type="submit" class="btn btn-<?php if($Sdsd['ch1'] == 1){echo 'primary';} else {echo 'secondary';}?> btn-lg btn-block" value="D0">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch2" value="Mickey">
  <input type="submit" class="btn btn-<?php if($Sdsd['ch2'] == 1){echo 'primary';} else {echo 'secondary';}?> btn-lg btn-block" value="D1">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch3" value="Mickey">
  <input type="submit" class="btn btn-<?php if($Sdsd['ch3'] == 1){echo 'primary';} else {echo 'secondary';}?> btn-lg btn-block" value="D2">
</form> 
<form action="/?api=9aed78e2bf1678b942c781b3d6283f8e&t" method="post">
  <input type="hidden" name="ch4" value="Mickey">
  <input type="submit" class="btn btn-<?php if($Sdsd['ch4'] == 1){echo 'primary';} else {echo 'secondary';}?> btn-lg btn-block" value="D3">
</form> 
<?php
	echo $contents;
} else {
	if(sql_load('0x77777', 'test', 1) == 'false'){
		echo sql_newdata('0x77777', 'test', '{"ch1":0,"ch2":0,"ch3":0,"ch4":0}');
	} else {
		$contents = sql_load('0x77777', 'test', 1);
	}
	echo '['.$contents.']';
	/*echo '['.json_encode(array(
		"ch1" => rand(0,1),
		"ch2" => rand(0,1),
		"ch3" => rand(0,1),
		"ch4" => rand(0,1),
	)).']';*/
}