<?php

include_once("mysql_db/db.php");

//$fn = $_POST['c_fn']; $ln = $_POST['c_ln'];

$sql = "SELECT * FROM customer";
//echo $sql;
$data = retrieve($sql);

echo json_encode($data);
/*
$all = array();
while($r = mysqli_fetch_array($date))
{
   echo $r[0];
//array_push($all, $r);
}

//echo json_encode($all);
//*/
?>