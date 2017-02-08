<?php
//connect to mysql database
$con = mysqli_connect("localhost", "root", "", "logintest");

if(!con){
	die("Error: " . mysqli_connect_error());
}
?>