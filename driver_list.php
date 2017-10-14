<?php

include_once("LibDb/mysql_db/db.php");



$sql = "SELECT * FROM driver";
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