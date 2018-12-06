<?php
require_once "config.php";
require_once "include.php";
if(isBot()){exit();}

//require_once "z-content/template/library61/index.php";

$type = 'John';
$name = 'Doe';
$data = base64_encode(str_replace(array("a"),array("&"),base64_encode('john@example.com')));
$date = date("Y-m-d h:i:s");


$sql = "INSERT INTO data (type, name, data, date) VALUES ('$type', '$name', '$data', '$date')";
if ($dsv_con->query($sql) === TRUE) {echo "New record created successfully";} else {echo "Error: " . $sql . "<br>" . $dsv_con->error;}$dsv_con->close();


?>