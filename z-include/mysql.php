<?php
	function sql_newdata($type, $name, $value){
		global $dsv_con;
		$date = date("Y-m-d h:i:s");
		$data = base74("encode", $value, "4", "ki");
		$sql = "INSERT INTO data (type, name, data, date) VALUES ('$type', '$name', '$data', '$date')";
		if ($dsv_con->query($sql) === TRUE) {echo "true";} else {echo "Error: " . $sql . "<br>" . $dsv_con->error;}
	}
	function sql_load($type, $name, $limit){
		global $dsv_con;
		$sql = "SELECT id, type, name, data FROM data limit 1";
		$result = $dsv_con->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				return base74("decode", $row["data"], "4", "ki")."<br>";
			}
		} else {
			return "false";
		}
	}
	function sql_update($id, $value){
		global $dsv_con;
		$value = base74("encode", $value, "4", "ki");
		$sql = "UPDATE data SET data='$value' WHERE id=$id";
		if ($dsv_con->query($sql) === TRUE) {
			echo "true";
		} else {
			echo "Error updating record: " . $dsv_con->error;
		}
	}