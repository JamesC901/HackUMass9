<?php

$sname = "hackumass2021.cmurgkgmoz2q.us-east-1.rds.amazonaws.com";
$uname = "admin";
$password = "949567421";
$db_name = "hackathon";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 4306);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

