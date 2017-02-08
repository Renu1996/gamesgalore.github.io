
<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
		width: 70%;
		margin: auto;
		margin-bottom:20px;
	}
	
		</style>
   
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
          <a class="navbar-brand" href="index.php">The Gaming Place</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="register.php">Create Account</a></li>
          </ul>
		    <form class="navbar-form navbar-right" action="login.php" method="post">
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
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      

      <div class="item">
        <img src="images/watchdogs.jpg" alt="Watchdogs Poster" width="760" height="345">
      </div>
    
      <div class="item">
        <img src="images/sniperelite.jpg" alt="Sniper Elite Poster" width="760" height="345">
      </div>

      <div class="item active">
        <img src="images/batmanarkhamknight.jpg" alt="Batman Arkham Knight Poster" width="760" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
				
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
							Latest Releases
						</h3>
					</div>
					<div class="panel-body">
						<div class="row">
					<div class="col-md-4 game">
						<div class="game-price">Rs. 3499</div>
						<a href="product.html">
							<img src="images/game1.jpg" />
						</a>
						<div class="game-title">
							Call Of Duty:Ghosts
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					<div class="col-md-4 game">
						<div class="game-price">Rs. 2499</div>
						<a href="product.html">
							<img src="images/Destiny_box_art.png" />
						</a>
						<div class="game-title">
							Destiny
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					<div class="col-md-4 game">
						<div class="game-price">Rs. 3499</div>
						<a href="product.html">
							<img src="images/Sniper_Elite.jpg" />
						</a>
						<div class="game-title">
							Sniper Elite
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					<div class="col-md-4 game">
						<div class="game-price">Rs. 2499</div>
						<a href="product.html">
							<img src="images/Watch_Dogs_box_art.jpg" />
						</a>
						<div class="game-title">
							Watchdogs
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					<div class="col-md-4 game">
						<div class="game-price">Rs. 3499</div>
						<a href="product.html">
							<img src="images/mordy.jpg" />
						</a>
						<div class="game-title">
							Shadow Of Mordor
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					<div class="col-md-4 game">
						<div class="game-price">Rs. 3499</div>
						<a href="product.html">
							<img src="images/batty2.jpg" />
						</a>
						<div class="game-title">
							Batman Arkham Knight
						</div>
						<div class="game-add">
							<button class="btn btn-primary" type="submit">Add to Cart</button>
						</div>
					</div>
					
			
			
			</div>
		</div>
		</div>
    </div><!-- /.container -->
	<div class="row footer">
		<div class="container">
			<p style="color:red">The Gaming Place &copy; 2017, All Rights Reserved</p>
		</div>
	</div

  </body>
</html>
