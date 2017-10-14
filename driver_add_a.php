<?php

//header('Access-Control-Allow-Origin: *');
//header("Content-Type: application/json; charset=UTF-8");

if(isset($_GET['m']))
{
include_once("LibDb/mysql_db/db.php");

	$fn = 'nodata';		$cn = 'nodata';		$st = 'nodata';	

	if($_GET['m']==1)
	{
		$fn = $_POST['name'];
		$cn = $_POST['cn'];
		$st = $_POST['status'];	
	}

	else if($_GET['m']==2)
	{
		$json = file_get_contents("php://input");
		$json = stripslashes($json);//moreslashes $sJSON = get_magic_quotes_gpc() ? stripslashes($_GET['jsonstring']): $_GET['jsonstring'];
		$data = json_decode($json); 
		
		$fn = $data->name;
		$cn = $data->cn;
		$st = $data->status;

		
		//$fn = mysqli_real_escape_string($data->name);
		//$cn = mysqli_real_escape_string($data->cn);
		//$st = mysqli_real_escape_string($data->status);

		//echo json_encode($data);//$fn.$cn.$st //$json ok  //$data 
		
	}

		$sql = "INSERT INTO driver(d_name,d_contact,d_status) VALUES('$fn','$cn','$st')";
		//echo $sql;
		$msg = insert($sql); echo json_encode($msg);//json_encode($str, JSON_UNESCAPED_SLASHES);

}
else
{

}




?>