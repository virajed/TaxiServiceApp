<?php
include_once('db.php');



$sql = "INSERT INTO users(uname,password) VALUES('Sample','Sample')";
insert($sql);