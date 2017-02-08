
<?php include 'database.php';
 

 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
 
//Execute the query
 
mysqli_query($connect"INSERT INTO users(first_name,last_name,email,username,password)
				VALUES('$first_name','$last_name','$email','$username','$password')");