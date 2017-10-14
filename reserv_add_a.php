<?php

include_once("mysql_db/db.php");

$loc = $_POST['loc'];
$des = $_POST['des'];
$dt = $_POST['dt'];
$tm = $_POST['tm'];
$num = $_POST['num'];
$type = $_POST['type'];

$cno = isset($_POST['c_ln'])?$_POST['c_ln']:1;

$sql = "INSERT INTO reservation(c_no,r_loc,r_des,r_date,r_time,r_pass,r_comfort) 
VALUES('$cno','$loc','$des','$dt','$tm','$num','$type')";
//echo $sql;
echo insert($sql);

?>