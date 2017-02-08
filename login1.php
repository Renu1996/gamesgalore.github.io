<?php
$cookie_name="loggedin";

$servername = "localhost"
$username = "root";
$password = "";
$database = "thegamingplace";

$conn = mysqli_connect($servername, $username, $username, $password, $database);

if(!conn){
	die("Database connection failed: ".mysqli_connect_error());
}

if(isset($_POST['login']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$phash = sha1(sha1($pass."salt")."salt");
	
	$sql = "SELECT * FROM users WHERE username='$user' AND password='$phash'";
}
else if(isset($_POST['register']))
{

}

?>