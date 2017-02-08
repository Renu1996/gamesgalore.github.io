

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>The Gaming Place</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
   
  </head>

  <body>
	
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">The Gaming Place</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create Account</a></li>
          </ul>
		   <form class="navbar-form navbar-right" action="login.php" method="POST">
				<div class="form-group">
					<input name="username" type="text" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Enter Password">
				</div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="cart-block">
				<form action="cart/update" method="post">
					<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
						<tr>
							<th>QTY</th>
							<th>Item Description</th>
							<th style="text-align:right">Item Price</th>
						</tr>
						<tr>
							<td></td>
							<td class="right"><strong>Total</td>
							<td class="right" style="text-align:right">Rs</th>
						</tr>
					</table>
				<br>
				<p><button class="btn btn-default" type="submit">Update Cart</button>
				<a class="btn btn-default" href="cart">Go To Cart</a></p>
			</form>
			</div>
			<div class="panel panel-default panel-list">
					<div class="panel-heading panel-heading-dark">
						<h3 class="panel-title">
							Categories
						</h3>
					</div>
					
					<ul class="list-group">
						<li class="list-group-item"><a href="#">Gaming Consoles</a></li> 
						<li class="list-group-item"><a href="#">Xbox One Games</a></li> 
						<li class="list-group-item"><a href="#">Playstaion 4 Games</a></li> 
						<li class="list-group-item"><a href="#">Nintendo Wii U Games</a></li> 
						<li class="list-group-item"><a href="#">Xbox 360 Games</a></li> 
						<li class="list-group-item"><a href="#">Playstation 3 Games</a></li> 
						<li class="list-group-item"><a href="#">Nintendo Wii Games</a></li> 
						<li class="list-group-item"><a href="#">Other Console Games</a></li> 
					</ul>
				</div>
				
				<div class="panel panel-default panel-list">
					<div class="panel-heading">
						<h3 class="panel-title">
							Most Popular
						</h3>
					</div>
					
					<ul class="list-group">
						<li class="list-group-item"><a href="#">Gaming Consoles</a></li> 
						<li class="list-group-item"><a href="#">Xbox One Games</a></li> 
						<li class="list-group-item"><a href="#">Playstaion 4 Games</a></li> 
						<li class="list-group-item"><a href="#">Nintendo Wii U Games</a></li> 
						<li class="list-group-item"><a href="#">Xbox 360 Games</a></li> 
						<li class="list-group-item"><a href="#">Playstation 3 Games</a></li> 
						<li class="list-group-item"><a href="#">Nintendo Wii Games</a></li> 
						<li class="list-group-item"><a href="#">Other Console Games</a></li> 
					</ul>
				</div>
					
				
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-green">
						<h3 class="panel-title">
							The Gaming Place
						</h3>
					</div>
					<div class="panel-body">
						<form role="form" name="registration" action="register.php" method="post">
						<div class="form-group">
							<label>First Name*</label>
							<input type="text" class="form-control" name="first_name" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label>Last Name*</label>
							<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
						</div>
						<div class="form-group">
							<label>Email Address*</label>
							<input type="email" class="form-control" name="email" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<label>Choose Username*</label>
							<input type="text" class="form-control" name="username" placeholder="Create Username">
						</div>
						<div class="form-group">
							<label>Password*</label>
							<input type="password" class="form-control" name="password" placeholder="Enter a Password">
						</div>
						<div class="form-group">
							<label>Confirm Password*</label>
							<input type="password" class="form-control" name="password2" placeholder="Re-enter Password">
						</div>
						
						<button type="submit" class="btn btn-primary">Register</button>
					</form>
					</div>
		</div>
		</div>
    </div><!-- /.container -->
	</div>
	<div class="row footer">
		<div class="container">
			<p>The Gaming Place &copy; 2014, All Rights Reserved</p>
		</div>
	</div>

  </body>
</html>


<?php
session_start();

include 'db_connection.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    
    $sql = "INSERT INTO users(first_name,last_name,email,username,password) VALUES ('$first_name','$last_name','$email','$username','$password')";
    $result = mysqli_query($con,$sql);      
    
	header("Location: index.php");


