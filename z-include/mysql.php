<?php
	function sql_newdata($type, $name, $value){
		global $dsv_con;
		$date = date("Y-m-d h:i:s");
		$data = base74("encode", $value, bit, key);
		$sql = "INSERT INTO data (type, name, data, date) VALUES ('$type', '$name', '$data', '$date')";
		if ($dsv_con->query($sql) === TRUE) {return "true";} else {return "Error: " . $sql . "<br>" . $dsv_con->error;}
	}
	function sql_load($type, $name, $limit){
		global $dsv_con;
		$sql = "SELECT id, type, name, data FROM data WHERE name='$name' and type='$type' limit 1";
		$result = $dsv_con->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				return base74("decode", $row["data"], bit, key);
			}
		} else {
			return "false";
		}
	}
	function sql_update($type, $name, $value){
		sql_load($type, $name, 1);
		global $dsv_con;
		$value = base74("encode", $value, bit, key);
		$sql = "UPDATE data SET data='$value' WHERE type='$type' and name='$name'";
		if ($dsv_con->query($sql) === TRUE) {
			return "true";
		} else {
			return "Error updating record: " . $dsv_con->error;
		}
	}
	
	define('typeMultilanguage',substr(md5('typeMultilanguage'.key),0,6));
	?>