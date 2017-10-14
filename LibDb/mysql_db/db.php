<?php

$host = 'localhost'; //These are not working. Why?
$user = 'root';
$ps = '';
$dbname = 'taxiserv';


function connect()
{
	///*
	$host = 'localhost';
	$user = 'root';
	$ps = '';
	$dbname = 'taxiserv';
	//*/

	$con = mysqli_connect($host,$user,$ps,$dbname) or die("Unable to connect");
	return $con;
	
}

function insert($sql)
{

	$conn = connect();

	$ok = mysqli_query($conn,$sql);

	if($ok==1)
	{
		return 'Done';
	}
	else{return mysqli_error($conn);}
}

function insert_id($sql)
{

	$conn = connect();

	$ok = mysqli_query($conn,$sql);

	if($ok==1)
	{
		return mysqli_insert_id($conn);
	}
	else{return -1;}
}

function retrieve($sql)
{

	$conn = connect();

	$ok = mysqli_query($conn,$sql);

/*
	if($ok)
	{
		$rows = array();
		while($r = mysqli_fetch_assoc($ok))
		{
			$rows[] = $r; //echo json_encode($r); 
   			
		}
		return $rows;
	}
	else{return mysqli_error($conn);}
//*/

	//*/
	if($ok)
	{
		$rows = array();
		while($r = mysqli_fetch_array($ok))
		{
			$rows[] = $r; //echo json_encode($r); 
   			
		}
		return $rows;
	}
	else{return mysqli_error($conn);}

	//*/
}

?>