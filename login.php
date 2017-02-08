<?php

session_start();
include 'db_connection.php';

    
    $password = $_POST['password'];
    $username = $_POST['username'];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con,$sql);      
    
	if(!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect!";
	} else{
		$_SESSION['id'] = $row['id'];
		$_SESSION['first_name'] = $row['first_name'];
		header("Location:register.php");
	}
	



