<?php
 $dsv_sql = ["", "localhost", "root", "password", "database"];
 $dsv_con = new mysql($dsv_sql[1], $dsv_sql[2], $dsv_sql[3], $dsv_sql[4]);
 if ($dev_con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 } else {}
