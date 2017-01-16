<!--
<?php
	define("PAGE","team");
	require_once("library/counter.php");
?>
-->
<!-- <header> --> 
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>TEDxDTU</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="css/media.css" />
		<link rel="stylesheet" type="text/css" href="css/speaker.css" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,900' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	</head>
	<body>

		

		<!-- navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button> 
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li><a href="index.php">Home</a></li>
			        <li><a href="index.php#about">About</a></li>
			        <li><a href="index.php#speakers">Speakers</a></li>
			        <li><a href="index.php#past-speakers">Past Speakers</a></li>
			        <li><a href="index.php#sponsors">Sponsors</a></li>
			        <li><a href="theme.php">Theme</a></li>
			        <li class="active"><a href="team.php">Team</a></li>
			      </ul>
			      <!-- <ul class="nav navbar-nav navbar-right">
			        <li><a data-toggle="modal" data-target="#login-modal" class="login">Login/SignUp</a></li>
			      </ul> -->
			    </div>
			  </div>
			</div>
		</nav>
		<!-- /navbar -->


		<!-- login/signup overlay -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<div class="login-logo"><img src="./img/logo.png"></div><br>
					<h1>SignUp With Your Social Account</h1><br>
				  <form>
					<div class="mobile_no"><input type="tel" required name="mobile" placeholder="Mobile Number"></div><hr>
					<button class="social-login button-fb" href="#"><i class="icon fa fa-facebook"></i>Login With Facebook</button><p>OR</p>
					<button class="social-login button-gp" href="#"><i class="icon fa fa-google"></i>Login With Google</button>
				  </form>
					
				  <div class="new_account">
					<a href="#">Don't have an account?</a>
				  </div>
				  <div class="sign-in">
					<a>Already have an account?</a>
				  </div>
				</div>
			</div>
		  </div>
		<!-- /login/signup overlay -->



<!-- </header> -->
<!-- <body> -->
<section id="ourteam">
			<div class="container">
			<div class="row"><div class="col-md-4 col-md-offset-4"><h1 class="team-title">About Team</h1></div></div>
			<div class="row"><div class="col-md-10 col-md-offset-1"><h3 class="team-info"><i>The team has been on its feet non-stop to bring the TEDx dream to the DTU stage. Vision to execution is the driving force.</i></h3></div></div>

			<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">Council:</h3></div></div>
			<div class="row team">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Satyanshu <span>Sapra</span></h2>
							<p class="description"></p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Wilfred <span >Tommy </span></h2>
							<p class="description"></p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Kushal  <span>Jarwal</span></h2>
							<p class="description"></p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Musaab Noman  <span>Rashid</span></h2>
							<p class="description"></p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Yogeshwaran <span >Somasundaram </span></h2>
							<p class="description"></p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Mohammad Tabish <span>Khan </span></h2>
							<p class="description"></p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Laraib <span>Afroz </span></h2>
							<p class="description"></p>
						</figcaption>	
					</figure>
				</div>
			</div>
			<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">Core Committee:</h3></div></div>
			<div class="row team">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Chaitanya  <span>Sethi</span></h2>
							<p class="description">Content & Research Head</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Nilasis <span >Bhattacharya </span></h2>
							<p class="description">Corporate Development Head</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Rohit <span>Ghosh</span></h2>
							<p class="description">Delegate Services Head </p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Sariska <span>Sujaini</span></h2>
							<p class="description">Delegate Services Head</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Ashutosh <span >Gothwal</span></h2>
							<p class="description">Design Head</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Ayush <span>Aggarwal</span></h2>
							<p class="description">I.T. Head</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Ankit <span>Jain</span></h2>
							<p class="description">I.T. Manager</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Suhail <span>Subair </span></h2>
							<p class="description">P.R. & Media Head</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Sneha <span>Roy</span></h2>
							<p class="description">P.R. & Media Manager</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Adeel <span>Ahmad</span></h2>
							<p class="description">Logistics Head</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Adil <span>Haris </span></h2>
							<p class="description">Videography Head</p>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="demo-effect-zoe">
						<!-- <img src="img/red-hands.jpg" alt="img26"/> -->
						<figcaption>
							<h2>Ayush <span>Goel  </span></h2>
							<p class="description"> Photography Head</p>
						</figcaption>	
					</figure>
				</div>
			</div>
			</div>
		</section>
<!-- </body> -->
<!-- <footer> -->
		
		<footer class="footer">
		    <div class="container">
		        <p>This independent TEDx event is operated under license from TED. Copyright © TEDxDTU 2017. All rights reserved. <br><br>Designed by <a href="https://github.com/vanshraj">Vanshaj Behl</a> and Developed by <a href="https://github.com/ciplpj">Ankit Jain.</a></p>
		    </div>
		</footer>

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<script src="js/team.js"></script>		
	</body>
</html>
<!-- </footer>