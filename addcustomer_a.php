<?php

include_once("mysql_db/db.php");

$fn = $_POST['c_fn']; $ln = $_POST['c_ln'];

$sql = "INSERT INTO customer(c_fn,c_ln) VALUES('$fn','$ln')";
//echo $sql;
echo insert($sql);

?>