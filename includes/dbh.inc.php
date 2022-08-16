<?php

$serverName = "172.16.11.22:3306";
$dBUName = "slik1_18_sliwinski";
$dBPName = "1342Kacpi!";
$dBName = "slik1_18_login_system";

$conn = mysqli_connect($serverName,$dBUName,$dBPName,$dBName);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error);
}