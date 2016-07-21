<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-before-login.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Apple iPhone 6S Plus 128GB</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e1.jpg" alt="Item"/></center>
							<p> <ul>
							<li><b>Price:</b><i>84,249</i></li>
							<li><b>Screen:</b>5.5 inch Touchscreen</li>
							<li><b>Processor:</b>1.84 GHz + A9 Chip</li> 
							<li><b>OS Platform:</b>iOS 9</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>128GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:12MP</li><li>Secondary Camera:5MP</li></ul></li>
							</ul><br><br><br>
							</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Samsung Galaxy S6 edge</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e2.jpg" alt="Item"/></center>
							<p>
							<li><b>Price:</b><i>40,000</i></li>
							<li><b>Screen:</b>5.1 inch AMOLED Touchscreen</li>
							<li><b>Processor:</b>2.1 GHz + 1.GHz Octa COre Processor</li> 
							<li><b>OS Platform:</b>Android v5 (Lollipop) OS	</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>32GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:16MP</li><li>Secondary Camera:5MP</li></ul></li>
							</ul>
							</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">LG G3</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e3.png" alt="Item"/></center>
							<p>
							<li><b>Price:</b><i>39,500</i></li>
							<li><b>Screen:</b>5.5 inch LCd Capacitive Touchscreen</li>
							<li><b>Processor:</b>2.5 GHz Qualcomm  Snapdragon Quad Core Processor</li> 
							<li><b>OS Platform:</b>Android v4.4.2 (Kitkat) OS</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>32GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:13MP</li><li>Secondary Camera:2.1MP</li></ul></li>
							</ul></p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Lenovo Vibe K5 Plus</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e4.jpeg" alt="Item"/></center>
							<p> 
							<li><b>Price:</b><i>8,499</i></li>
							<li><b>Screen:</b>5 inch Capacitive Touchscreen</li>
							<li><b>Processor:</b>1.5 GHz + 1.3 GHz qualcomm Snapdragon Octa Core Precessor</li> 
							<li><b>OS Platform:</b>Andriod v5.1.1 (Lollipop)</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>16GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:13MP</li><li>Secondary Camera:5MP</li></ul></li>
							</ul>
							</p><br>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Xiaomi Mi5</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e5.jpg" alt="Item"/></center>
							<p>
							<li><b>Price:</b><i>84,249</i></li>
							<li><b>Screen:</b>5.5 inch Touchscreen</li>
							<li><b>Processor:</b>1.84 GHz + A9 Chip</li> 
							<li><b>OS Platform:</b>iOS 9</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>128GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:12MP</li><li>Secondary Camera:5MP</li></ul></li>
							</ul>
							</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">SOny Xperia Z5</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e6.jpg" alt="Item"/></center>
							<p>
							<li><b>Price:</b><i>51,990</i></li>
							<li><b>Screen:</b>5.5 inch Touchscreen</li>
							<li><b>Processor:</b>2 GHz MSM8994 Qualcommm Snapdragon 810 Octa Core Processor</li> 
							<li><b>OS Platform:</b>Android v5.1 (Lollipop) Upgradable to v6.0 (Marshmallow)</li>
							<li><b>Memory</b><ul><li><i>Internal Storage:</i>200GB</li></ul></li>
							<li><b>Camera:</b><ul><li>Primary Camera:23MP</li><li>Secondary Camera:5MP</li></ul></li>
							</ul>
							</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-95540-46078</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("modal.php"); ?>
	</body>
</html>