<?php
 $dsv_sql = ["", "localhost", "root", "Misaka677@", "test"];
 $dsv_con = new mysqli($dsv_sql[1], $dsv_sql[2], $dsv_sql[3], $dsv_sql[4]);
 if ($dsv_con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 } else {}
