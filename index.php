<!--
<?php
	define("PAGE","index");
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
		<link rel="stylesheet" type="text/css" href="css/testimonials.css" />
		<link rel="stylesheet" type="text/css" href="css/speaker.css" />
		<link rel="stylesheet" type="text/css" href="css/googlemap.css" />
		<link rel="stylesheet" type="text/css" href="css/media.css" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,900' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91043669-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body>
		<div class="loader-overlay"><div class="loader-box"><div id="loader"></div></div></div>
		

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
			        <li class="active"><a href="#demo-canvas">Home</a></li>
			        <li><a href="#about">About</a></li>
			        <li><a href="#speakers">Speakers</a></li>
			        <li><a href="#past-speakers">Past Speakers</a></li>
			        <li><a href="#sponsors">Partners</a></li>
			        <li><a target="_blank" href="theme.php">Theme</a></li>
			        <li><a target="_blank" href="team.php">Team</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a data-toggle="modal" data-target="#login-modal" class="login">Login/Register</a></li>
			      </ul>
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
					<h1>Login to Your Account</h1><br>
				  <form>
					<div class="user_email"><input type="email" required name="email" placeholder="Email"></div><br>
					<div class="user_password"><input type="password" required name="password" placeholder="Password"></div><br>
					<button class="social-login button-gp login_button" href="#">Login</button>
					<button class="social-login button-fb send_password" href="#">Send Password</button>
					<!-- <button class="social-login button-fb" href="#"><i class="icon fa fa-facebook"></i>Login With Facebook</button><p>OR</p>
					<button class="social-login button-gp" href="#"><i class="icon fa fa-google"></i>Login With Google</button> -->
				  </form>
					
				  <div class="new_account">
					<a href="registration.php">Don't have an account?</a>
				  </div>
				  <div class="forgot_password">
					<a>Forgot Password?</a>
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

		<!-- speakers overlay -->
		<div class="overlay-back"></div>
		<div class="overlay">
			<div class="row">
				<div class="col-md-12"><a  class="closebtn"><span>X</span></a></div>
				<div class="overlay-content">
					<div class="col-md-4"><img class="img-circle"></div>
					<div class="col-md-8"><h1></h1></div>
					<div class="col-md-8">
						<iframe class="youtube-frame" src=""  frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-8"><p></p></div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-4"></div>
				
			</div> -->
		</div>
		
		<!-- /speakers overlay -->

		<!-- main canvas -->
		<section>
			<div class="demo-1">
				<div class="content">
					<div id="large-header" class="large-header">
						<canvas id="demo-canvas"></canvas>
						<a target="_blank" href="http://www.ted.com/tedx/events/20506">
							<h1 class="main-title">TED<span class="ted_x">x</span><span class="thin"><span style="font-weight:500;">DTU<br /><br><span id="small"><span style="color:#e62b1e; font-weight:900;">x</span> = independently organized TED event</span></span><br/><span id="grey_matters">Because Grey Matters</span></h1>
						</a>
						<a href="/register"><button type="button" class=" btn btn-danger btn-lg register-btn" >Register Here!</button></a>
						<a href="#about" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll skrollable skrollable-between" style="display: block;"></a>
						<div class="detail_container">
							<div class="ted_detail left">
								<h4>Venue: Dr. B.R. Ambedkar Auditorium, Delhi Technological University.</h4>
							</div>
							<div class="ted_detail right">
								<h4>Date: 18<span class="superscript">th</span> March, 2017</h4>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</section>
		<!-- /main canvas -->

		<section  id="about">
			<!-- <div class="venue">
				<h4 class="pull-right">Date : 18<span>th</span> March, 2018</h4>
				<h4 class="pull-left">Venue : B.R. ambedkar Auditorium, Delhi Technological University, Bawan Road</h4>
				<div class="clearfix"></div>
			</div> -->
			<div class="container"><h1 class="countdown-tedx">Countdown to TEDxDTU</h1></div>
			<div class="countdown text-center">
				<div class="time-circle">
					<div class="progress"></div>
					<span class="time days hvr-hang"></span>
					<span class="time-name hvr-hang">days</span>
				</div>
				<div class="time-circle">
					<div class="progress"></div>
					<span class="time hours hvr-hang"></span>
					<span class="time-name hvr-hang ">hrs</span>
				</div>
				<div class="time-circle">
					<div class="progress"></div>
					<span class="time minutes hvr-hang"></span>
					<span class="time-name hvr-hang">mins</span>
				</div>
				<div class="time-circle">
					<div class="progress"></div>
					<span class="time seconds hvr-hang"></span>
					<span class="time-name hvr-hang">secs</span>
				</div>
				</div>
			<div class="about-back">
				<div class=" container">
					<div class="row">
						<div class="col-sm-6">
							<div class="about-card">
							<h1  class="about-title">About TED</h1>
							<h5 class="about-para sec">
								TED is a nonprofit devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes or less). TED began in 1984 as a conference where Technology, Entertainment and Design converged, and today covers almost all topics from science to business to global issues in more than 100 languages. Meanwhile, independently run TEDx events help share ideas in communities around the world.
							</h5>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="about-card">
							<h1  class="about-title">About TEDx</h1>
							<h5 class="about-para">
								The TEDx Program is designed to help communities, organizations and individuals to spark conversation and connection through local TED like experiences. At TEDx events, a screening of TED Talks videos or a combination of live presenters and TED Talks videos sparks deep conversation and connections at the local level. TEDx events are planned and coordinated independently, under a free license granted by TED.
							</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="about-card">
							<a href="theme.php">
								<img src="img/mascot.png" />
							</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="about-card">
							<h1 class="about-title">About TEDxDTU</h1>
							<h5 class="about-para sec" style="text-align:center">
								Our goal is to explore unity in diversity, kindle the minds of the youth, enable them to ideate and enter constructive peaceful dialogue, to nurture scientific thought and development in technology, and to promote equality, freedom and secularism in society. TEDxDTU aims to coalesce bright minds who are looking for some ground-breaking ideas to reshape their own and their community's future.<br />
								 Here, speakers from diverse backgrounds will inspire the global audience to learn, explore and uplift themselves and make an impact in the society. It is a civic phenomenon which aims to inculcate in people the sense of universal responsibility while respecting the virtues of individuality. We aspire to inspire people towards humanitarian services with transformative potential of the human mind.
							</h5>
						</div>
					</div>
				</div>
			</div>			
		</section>

		<section id="fun">	
			<div class="back-man"></div>
			<div class="inspire">IDEATE</div>
			<div class="man-front"></div>
		</section>

		<section id="speakers">	
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4"><h1 class="speakers-title">Speakers</h1></div>
				</div>
				<div class="row speakers">
					<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">2017</h3></div></div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									“Nobody imagined this. I think the world has completely changed because of solar. Solar is disruptive and a game-changer.”<br><br>He serves as the Managing Director of Finnish-based energy company Fortum, overseeing their Indian endeavours. Together, they are working to reinvent the landscape of renewable energy in India.<br><br>He also worked for Tata Power, Wartsila, ABB and Thermax. He served as a Director of Industrial Energy Limited until February 2014. He is an alumnus of Delhi College of Engineering (DCE).<br><br>
								</p>
							</div>
							<img src="img/sanjay.jpg" alt="img26"/>
							<figcaption>
								<h2>Sanjay <span>Aggarwal</span></h2>
								<p class="description">Managing Director of Finnish-based energy company Fortum</p>
							</figcaption>			
						</figure>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									“We do not inherit the Earth from our ancestors, we borrow it from our children. ”<br><br>Renowned ecologist, academic, writer and columnist, Dr. Madhav Gadgil’s landmark report on the preservation of the unique ecosystem of the Western Ghats and the inclusion of local committees was integral in positioning him as a leading voice on environmental issues in India. As a fellow of reputed institutions like INSA and NASI and a recipient of the Harvard Centennial Medal from his alma mater, Dr. Gadgil has been an exemplary visionary in his field.<br><br> Dr. Gadgil is a former member of the Scientific Advisory Council to the Prime Minister of India and the Head of the Western Ghats Ecology Expert Panel (WGEEP) of 2010, which is popularly known as the Gadgil Commission. He is a recipient of the Volvo Environment Prize and the Tyler Prize for Environmental Achievement, making him the only Indian to win it after M.S. Swaminathan. The Government of India awarded him the Padma Shri in 1981 and subsequently conferred on him the Padma Bhushan in 2006.<br><br>
								</p>
							</div>
							<img src="img/madhav.jpg" alt="img26"/>
							<figcaption>
								<h2>Madhav <span>Gadgil</span></h2>
								<p class="description">Renowned ecologist, academic, writer and columnist</p>
							</figcaption>	
						</figure>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									Ms. Monica Dogra is a singer and one half of the Mumbai based electronic duo Shaa'ir and Func. <br><br>She made her Bollywood acting debut with the film Dhobhi Ghat (2011).<br><br>She has made a guest appearance in the movie Rock On!<br><br>In December 2011, she served as a judge for Rolling Stone's "Never Hide Sounds" musical talent contest. <br><br>She is the host of The Dewarists.<br><br>Ms. Dogra has also featured on the covers of Maxim and FHM magazine.<br><br>Currently, she is one of the judges for the show The Stage.<br><br>She was nominated by VH1 at the 2015 Europe Music Awards under the Best India Act category, which falls under the Worldwide Act category.<br><br>Her international docu-series, Woman With Gloria Steinem (based on gender-related violence), was nominated in the Outstanding Documentary or Non-Fiction Series category at 68th Emmy Awards.<br><br>
								</p>
							</div>
							<img src="img/monica.jpg" alt="img26"/>
							<figcaption>
								<h2>Monica <span>Dogra</span></h2>
								<p class="description">Singer, Actress,  Judge of the show The Stage</p>
							</figcaption>			
						</figure>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									"It was more about the instrument, more about proving something bigger than myself."<br /> <br />Mr. Seen is touted as the youngest classical music player in the country and the world's first Metal Sitar player.<br /><br />The novelty of his music lies in the perfect amalgamation of classical Indian music and metal. He is an alumnus of Hindu College, Delhi University.He has performed worldwide and received appreciation and opportunity to play with Legends like Ustad Shahid Parvez, Niladri Kumar, Talvin Singh, Pt.Rajan-Sajan Mishra(s), Pt. Birju Maharaj.<br /><br />He has played in major Indian classical music festivals over the years.<br />He formed the world’s first ever instrumental Indian Classical music – Progressive Metal band named ‘Mute the Saint’ with 4 other well-known musicians in 2016.<br />He is working to evolve the relatively unknown and fairly recent music genre "djent"  with his fairly appreciated cover of "Tempting  Times" by progressive metal band Animals as Leaders .<br /><br />Mr. Seen has a vision to make classical music a part of mainstream music culture and revive its relevance in modern world.<br /><br />
								</p>
							</div>
							<img src="img/rishabh.jpg" alt="img26"/>
							<figcaption>
								<h2>Rishabh <span>Seen</span></h2>
								<p class="description">Youngest classical sitar player, founded a progressive metal band</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									A seasoned theatre director, playwright and actor, Mr. Manav Kaul is reputed in the industry for enacting unconventional roles with panache. His performances in acclaimed movies like 'Kai Po Che', 'Citylights', 'Jolly LLB 2' and many others have been appreciated by critics and fans alike. He was nominated for Best Villain in Screen Awards for the movie 'Citylights'.<br><br>He has garnered acclaim for his moving and pleasing theatre plays, each of which explore the human mind and its vulnerability using poetry as part of the narrative. Some of the popular ones are “Shakkar ke Paanch Daane”, “Ilhaam” and “Bali aur Shambhu”. He has been awarded the META award for Best Script.<br><br>
								</p>
							</div>
							<img src="img/manav.jpg" alt="img26"/>
							<figcaption>
								<h2>Manav <span>Kaul</span></h2>
								<p class="description">A seasoned theatre director, Playwright and Actor.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<figure class="effect-zoe">
							<div class="speaker-info">
								<p>
									Aranyani Bhargav is a dancer, choreographer and Artistic Director of Vyuti Dance company, which does exploratory work in Bharatanatyam by incorporating modernity into tradition. She is the only classical dancer of her generation to experiment with Bharatanatyam through contact-based group work. Her work has been reviewed as "an astonishing product" and an "organic conversation between tradition and modernity".<br><br>Aranyani has also been a proficient soloist for over 15 years and has performed throughout India and all over the world. Her distinctive approach to Bharatanatyam as being simultaneously ancient and modern, traditional and contemporary, spiritual and secular has made her popular amidst a wide range of Indian and international audiences. She is also deeply committed to an academic engagement with dance.<br><br>In that, Aranyani is a dance scholar, researcher and teacher. She has studied at Oxford University where she wrote a thesis on the multiple modernities of Bharatanatyam. Since then, she has lectured on dance in India and abroad, has designed several dance theory and history modules for educational institutions and has taught at several dance institutions. She continues to teach young students of dance at her studio/home.<br><br>Aranyani is an empanelled artist with the Indian council for cultural relations, a recipient of the Natya Kala Mani award and has been centrally featured in a PSBT documentary on the evolution of Bharatanatyam titled "From Sadir to Bharatanatyam" directed by Viveka Chauhan.<br><br>
								</p>
							</div>
							<img src="img/aranyani.jpg" alt="img26"/>
							<figcaption>
								<h2>Aranyani <span>Bhargav</span></h2>
								<p class="description">Dancer, Choreographer and Artistic Director of Vyuti Dance company.</p>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>

		<section id="fun2">	
			<div class="cloud-back"></div>
			<div class="adventure">Share your adventure</div>
			<div class="clock-tower"></div>
		</section>

		<section id="past-speakers">
			<div class="container">
			<div class="row"><div class="col-md-4 col-md-offset-4"><h1 class="speakers-title">Past Speakers</h1></div></div>
			<div class="row speakers">
				<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">2016</h3></div></div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Ms. Alisha Abdullah has the unique distinction of being the only woman super bike racer in India and the fastest Indian car racer.<br><br>Ms. Abdullah has been fascinated by racing since she was a kid. When she was just 13-years-old, she won the MRF National Go-Karting Championship and the Best Novice Award in the National level Formula Car Racing in the open class.<br><br>Ms. Abdullah then moved on to formula car racing and ranked fifth in the JK Tyre National Championship, 2004. She made the switch from four wheelers to bikes in the same year.<br><br>She recently started the 'Alisha Abdullah Racing Academy for Women'.<br><br>
							</p>
						</div>
						<img src="img/alisha.jpg" alt="img26"/>
						<figcaption>
							<h2>Alisha <span>Abdullah</span></h2>
							<p class="description">PIONEER OF FEMALE CAR AND BIKE RACING IN INDIA AND THE WORLD</p>
							<a class="youtube-link" href="https://www.youtube.com/embed/-0UPRn7NvNg"></a>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Mr. Aaron Friedland is currently working as Executive Director of The Walking School Bus, an organization that empowers access to education.<br><br>Having worked with a Geneva based NGO, UN Watch to monitor the performance of the United Nations, he was actively involved with Israel’s Democracy Institute (IDI), an independent think tank that ensures Israeli democracy.<br><br>Mr. Friedland spoke at the United Nations Human Rights Council (UNHCR) regarding the situation of deteriorating human rights around the world.<br><br>
							</p>
						</div>
						<img src="img/aaron.png" alt="img26"/>
						<figcaption>
							<h2>Aaron <span >Friedland</span></h2>
							<p class="description">NOTED ANALYST AND SOCIAL WORKER, EXECUTIVE DIRECTOR OF THE WALKING SCHOOL BUS</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/nixUo0_y89o"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Dr. Ashok Seth is a successful Indian interventional cardiologist, credited with the performance of over 50,000 angiograms and 20,000 angioplasties in a career span of 26-years, which has been included in the Limca Book of Records.<br><br>Dr. Seth is a Fellow of the Royal Colleges of Physicians of London, Edinburgh and Ireland and is the Chief for Cardiac Sciences, also serving as the current Chairman of Fortis Escorts Heart Institute, New Delhi and Head, Cardiology Council of Fortis Group of Hospitals.<br><br>Dr. Seth, a recipient of the National Award of Republic of Spain, "Officer's Cross Order of Isabella the Catholic", was honored by the President of India with the fourth highest Indian civilian award of Padma Shri, in 2003, followed by Padma Bhushan, the third highest Indian civilian award, in 2015.<br><br>
							</p>
						</div>
						<img src="img/ashok_seth.jpg" alt="img26"/>
						<figcaption>
							<h2>Dr. Ashok <span>Seth</span></h2>
							<p class="description">RENOWNED CARDIOLOGIST, PADMA BHUSHAN RECEPIENT, CHAIRMAN OF FORTIS ESCORTS HEART INSTITUTE</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/Im9gQM69bDQ"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Mr. Taru Dalmia aka Delhi Sultanate, is an Indian reggae artist. Mr. Dalmia has pioneered the sounds of Dancehall and performance poetry in India.<br><br>Apart from having a solo act, he is also the lead singer of the Delhi-based ska and rocksteady band, The Ska Vengers. He is also the MC and a founding member of Bass Foundation Roots Sound System India, New Delhi’s first Dubstep, Drum ‘n’ Bass and Reggae sound system.<br><br>He was the Indian ambassador for the International Reggae Day that was celebrated on July 4 in Mumbai.<br><br>In 2010, he started ‘Word, Sound, Power’ along with producer Chris McGuinness, a New Delhi based collective that constructs multimedia collaborations with South Asian artists on issues of social justice.<br><br>

						</p>
						</div>
						<img src="img/dalmia.jpg" alt="img26"/>
						<figcaption>
							<h2>Taru <span>Dalmia</span></h2>
							<p class="description">EMINENT INDIAN REGGAE ARTIST, PIONEER OF DANCEHALL AND SKA</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/q4tlmMT9iHM"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Mr. Dilip Chhabria has been a trailblazer and a pioneering personality in the field of automotive design. <br><br>Mr. Chhabria founded DC Design in 1993 with the dual aim of redesigning and modifying mass market cars to create one-of-a-kind automotive wonders for automotive connoisseurs as well as to offer design and prototyping services to the OEM automotive sector.<br><br>Mr. Chhabria is also an accomplished painter and sculptor and has partnered with the DY Patil Group to start DYPDC Center for Automotive Research and Studies.<br><br>
						</p>
						</div>
						<img src="img/dc.jpg" alt="img26"/>
						<figcaption>
							<h2>Dilip <span>Chhabria</span></h2>
							<p class="description">VISIONARY TRAILBLAZER OF AUTOMOTIVE DESIGNING, FOUNDER OF DC DESIGN.</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/qblRqEjIv9A"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								An acclaimed actress, Ms. Richa Chadda made her Bollywood debut in the comedy-drama film ‘Oye Lucky! Lucky Oye!’.<br><br>Ms. Chadda’s major breakthrough came in 2012 with the crime film Gangs of Wasseypur. Her performance was praised and earned her the Filmfare Critics Award for Best Actress for her talent in the first installment of the same film.<br><br>Furthering her prowess, she enjoyed critical acclaim and a standing ovation at the 2015 Cannes Film Festival for her depiction of a girl in morality crisis in the film Masaan.<br><br>Ms. Chadda also represented India at the 18th Marrakech International Film Festival. The festival representatives invited her as a Jury member.<br><br>
							</p>
						</div>
						<img src="img/richa.jpg" alt="img26"/>
						<figcaption>
							<h2>Richa <span>Chadda</span></h2>
							<p class="description">FILMFARE AWARD WINNING, CRITICALLY LAUDED BOLLYWOOD ACTRESS</p>
							<a class="youtube-link" href="https://www.youtube.com/embed/duUzTUFYSnM"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							A Dental surgeon, model and a pageant choreographer, Dr. Shivangi Maletia has a broad spectrum of prodigious accomplishments. <br><br>Dr. Maletia won her first pageant title in 2014, as ‘Mrs. India Worldwide’ and went on to win other prestigious titles such as ‘Craftsvilla Miss Ethnic 2015’, ‘Mrs. Heritage World 2015’ and ‘Femina Officially Gorgeous’ in 2016.<br><br>Dr. Maletia runs a trust called ‘Saanidhya’ for spreading medical awareness and serves as a psychological counselor for women who have been victims of acid attacks and domestic violence.<br><br>Dr. Maletia is the recipient of ‘Sashakt Nari Parishad Achiever of the Year’ and ‘MAGICKAS Women Achiever of the Year’.<br><br>
							</p>
						</div>
						<img src="img/shivangi.jpg" alt="img26"/>
						<figcaption>
							<h2>Dr. Shivangi <span>Maletia</span></h2>
							<p class="description">NOTED DENTAL SURGEON, MODEL AND PAGEANT CHOREOGRAPHER.</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/Vw6_j-Lxu7E"></a>
						</figcaption>			
					</figure>
				</div>


				<!-- template -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Ms. Archy Jay is India’s first Bagpipe artist. Ms. Jay has been playing the bagpipes for quite some time, having picked up the nuances of the instrument in a short period of time.<br><br>She quit her well-paying management job to focus entirely on the bagpipes. Her YouTube channel ArchyJ03 has a multitude of followers.<br><br>Ms. Jay is also a trained singer in Western and Hindustani music, and was a vocalist in a metal band called Rogue Saint.<br><br>Ms. Jay wishes to incorporate the sound of bagpipes in different styles of music as a solo artist and through collaborations.<br><br>

							</p>
						</div>
						<img src="img/archy.jpg" alt="img26"/>
						<figcaption>
							<h2>Archy <span>Jay</span></h2>
							<p class="description">India's first bagpipe artist</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/RekJ_HQDCIM"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Ms. Ritu Marya is the Editor-in-Chief for Franchise India Media. Franchise India is Asia's largest Franchise & Retail solutions company, providing end to end solutions on Business Development to Brands and Organizations looking to increase their product distribution or service penetration in India or overseas. Ms. Marya leads the editorial desk which comprises four business magazines including The Franchising World, Retailer, Estate World and Small Medium Entrepreneur. <br><br>
							An alumnus of Panjab University with a Masters Degree in Business Economics, Ms. Marya also directs leading consumer and business forums across education, beauty & wellness, e-retail, home, food & beverages, among others. She has led numerous conferences across cities at Franchise India Events. Ms. Marya has been a regular speaker at several external Summits including Vodafone Business Summit, E-360 organized by NEN, India Beauty Expo etc, and World’s largest Franchise Expo in Paris. She has also addressed academic sessions on Franchising at the TERI University, ISB Hyderabad, Birla Institute and IIPM-New-Delhi, amongst others.<br /><br />
							</p>
						</div>
						<img src="img/ritu.jpg" alt="img26"/>
						<figcaption>
							<h2>Ritu <span>Marya</span></h2>
							<p class="description">Editor-in-Chief at Entrepreneur Media</p>
							<a class="youtube-link" href=""></a>
						</figcaption>			
					</figure>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Mr. Sanjay Modi is the Managing Director of monster.com in India, Middle East, Hong Kong and South-East Asia.<br><br>An alumnus of Delhi College of Engineering and Institute of Management Technology, Ghaziabad, Mr. Modi has set a remarkable example for engineers who aspire to make the transition from technology to management.<br><br>His entrepreneurial approach and deep understanding of the business nuances has helped Monster India to expand in rural markets by conceptualizing rozgarduniya.com and ITC E-Choupal which have been acknowledged by the prestigious Business Call to Action.<br><br>
							</p>
						</div>
						<img src="img/s-modi.jpg" alt="img26"/>
						<figcaption>
							<h2>Sanjay <span>Modi</span></h2>
							<p class="description">MANAGING DIRECTOR OF MONSTER.COM</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/VToAam0nz_I"></a>
						</figcaption>			
					</figure>
				</div>
			</div>
			<div class="row">
				<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">2012</h3></div></div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Kiran Bedi is a retired Indian Police Service (IPS) officer. She is the first woman to join the IPS in 1972. Her committed service and endless fight against injustice has earned her immense respect from millions. Even after her retirement from the IPS, she has made her presence felt with her relentless efforts for the betterment of the society.<br><br>She has taken up a range of challenging tasks throughout her career. After being appointed as the Traffic Commissioner of New Delhi, her bold decisions and planning helped the capital get through the traffic crisis that would have been caused by the 1982 Asian Games. She also shone as tennis player in her teenage. She became the national junior tennis champion in 1966. <br><br>Her exemplary service has been appreciated with numerous awards. She is the recipient of President’s Police Medal for Gallantry 1979. She also won a United Nations Medal for her outstanding service. She is also the author of several popular books and is currently serving as the Lieutanant Governer of Puducherry. <br><br>

							</p>
						</div>
						<img src="img/kiran.jpg" alt="img26"/>
						<figcaption>
							<h2>Kiran <span>Bedi</span></h2>
							<p class="description">EX-IPS OFFICER, SOCIAL ACTIVISTS, FORMER TENNIS PLAYER AND POLITICIAN</p>
							<!-- <a class="youtube-link" href="http://www.youtube.com/embed/g_CSsL3it9Y"></a> -->
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Nitin Gupta is a famous Indian stand up comedian who is an IITian. He is a chemical engineer by education. Nitin Gupta says that it is not a simple task to make people laugh. While chatting on a message, to write LOL or ROFL is very easy but making people do that in real is very difficult. It is not as simple as it seems to be. He says that he is also the founder and the CEO (Chief Entertainment Engineer) for a stand up comedy and a Theater company. He is a literally an entertaining guy and people enjoy his company. He also believes that comedy comprises of both art and science and not everyone can do it. Nitin’s parents were concerned when he told them about his career switch and they weren’t sure if what he is doing is right. But he still chose the path and made sure to make them proud. Nitin believes that humor is the point of view and you can be very honest with it. it can break the daily nuances make you think a little more about the conditioning that you have been brought up in. It is the reason gone mad, you don’t really need a reason to have humor in life. It is just there.<br><br>
							</p>
						</div>
						<img src="img/nitin.jpg" alt="img26"/>
						<figcaption>
							<h2>Nitin <span>Gupta</span></h2>
							<p class="description">COMEDIAN</p>
							<a class="youtube-link" href=""></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Durjoy Datta is an Indian novelist, screenwriter and entrepreneur. He believes that life isn’t all about a written pattern. He has persuaded the youth to think different and to not follow what everyone does but to live their own dreams. <br><br>
							His first novel 'Of course, I love you!'' co-authored by Maanvi Ahuja was released in 2008 while he was still in college. After graduating as a mechanical engineer from Delhi Technological University, Datta worked for Siemens before pursuing his postgraduate degree from Management Development Institute. <br><br>
							He has several popular shows to his credit. In 2011, he co-founded the publishing house Grapevine India. In 2009, he was recognized as the young achiever by the Times of India. He was also chosen as one of the two young achievers in the field of Media and Communications by Whistling Woods International in 2011.<br><br>
						</p>
						</div>
						<img src="img/durjoy.jpg" alt="img26"/>
						<figcaption>
							<h2>Durjoy <span>Dutta</span></h2>
							<p class="description">NOVELIST, SCREENWRITER AND ENTREPRENEUR</p>
							<!-- <a class="youtube-link" href="http://www.youtube.com/embed/Pbh-B6YVEf8"></a> -->
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Belly dance may be a new dance form to India but it is slowly and surely picking up in cities like Goa, Bangalore, Delhi and Mumbai, and we can thank one person for it, Meher Malik. She is the foremost exponent of this traditional Egyptian art form in India having spent more than 15 years learning, training, mastering and now teaching and evolving the same through her ‘Banjara School of Dance’, a first of its kind in Delhi. Known for her strong performances, Meher mixes Egyptian belly dancing with Bollywood moves and songs to whip up a heady concoction. She has managed to carve a niche for herself in a relatively short time.<br><br>Meher has received huge recognition after her appearances on India’s Got Talent 1 and the Hrithik Roshan judged Just Dance.<br><br>
							</p>
						</div>
						<img src="img/meher.jpg" alt="img26"/>
						<figcaption>
							<h2>MEHER <span>MALIK</span></h2>
							<p class="description">DANCER</p>
							<!-- <a class="youtube-link" href="http://www.youtube.com/embed/QPxs_GomHMU"></a> -->
						</figcaption>			
					</figure>
				</div>
			</div>
			<div class="row">
				<div class="row"><div class="col-md-4 col-md-offset-4"><h3 class="year-title">2011</h3></div></div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Friendship is a needs-based non-governmental organization that works in the most remote and inaccessible islands, riverbanks of northern Bangladesh and the remote coastal belt in the south. Established by Runa Khan in 2002, Friendship works to empower people through a sustainable, integrated development approach.<br><br>
								Friendship employees more than 1,500 employees that includes field staff, regional office staff, staff in the floating hospitals, teachers at Friendship schools, trainers at vocational schools, organizers and supervisors working in the northern and southern parts of the country and head office staff based in Dhaka.<br><br>
							</p>
						</div>
						<img src="img/runa.jpg" alt="img26"/>
						<figcaption>
							<h2>Runa <span>Khan</span></h2>
							<p class="description">FOUNDER OF FRIENDSHIP BANGLADESH</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/pORbyAFjPZE"></a>
						</figcaption>	
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Kanth Risa is a well known sand artist who was keen on setting a Guinness Record for portrait sketching in 30 seconds till he came across sand animation two years ago over YouTube. Since then, there has been no looking back for this artist from Achampet in Mahabubnagar who has shared stage with maestros such as Hari Prasad Chaurasia, blending his sand art with dance and music. Risa, his original name being Rajnikanth, has designed sand animation presentations for Aditya Birla, Nagarjuna Construction Company, ISB, ONGC, Infosys and more. His recent work during the film promo for Prasad Productions' “Rushi” was critically acclaimed where he presented the biography of the doyen of Indian cinema through sand animation. His USP lies in sketching portraits using sand dust.<br><br>Kanth Risa was keen on setting a Guinness Record for portrait sketching in 30 seconds till he came across sand animation two years ago over YouTube. Since then, there has been no looking back for this artist from Achampet in Mahabubnagar who has shared stage with maestros such as Hari Prasad Chaurasia, blending his sand art with dance and music.<br><br>
							</p>
						</div>
						<img src="img/kanth.jpg" alt="img26"/>
						<figcaption>
							<h2>Kanth <span>Risa</span></h2>
							<p class="description">ARTIST</p>
							<!-- <a class="youtube-link" href="http://www.youtube.com/embed/zmcb9FOI9Fg"></a> -->
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
							Saloni Malhotra is the founder and CEO of DesiCrew, an IT-enabled service company that provides back-office and support services in rural areas of Tamil Nadu and Karnataka. Although establishing a BPO company is not a major task, she is widely acclaimed for her work of establishing these in rural parts of the states and employing unexperienced and untrained people from small villages.
						</p>
						</div>
						<img src="img/saloni.jpg" alt="img26"/>
						<figcaption>
							<h2>Saloni <span >Malhotra</span></h2>
							<p class="description">FOUNDER AND CEO OF DESICREW</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/zotbbprZDjg"></a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<figure class="effect-zoe">
						<div class="speaker-info">
							<p>
								Arvind completed his B.Tech in Computer Science from IIT (Kanpur) in 2001. Then he pursued a PhD at MIT. Arvind took a break from his PhD and returned to India in 2005, joining Google as part of their R&D team.  He has been a grassroot level volunteer for various development sector organisations. Arvind left Google and started Swasth, an organization that mobilizes grassroots to create awareness and find solutions to improve health of low income households, as a Trustee to pursue his passion in the development sector.<br><br>
							</p>
						</div>
						<img src="img/arbind.jpg" alt="img26"/>
						<figcaption>
							<h2>Arbind <span>Saraf</span></h2>
							<p class="description">FOUNDER OF SWASTH INDIA</p>
							<a class="youtube-link" href="http://www.youtube.com/embed/I5lpR_45xCE"></a>
						</figcaption>			
					</figure>
				</div>
			</div>
			</div>
		</section>
		<section class="testimonials">
			  <div class='row'>
			    <div class=' col-md-12 content'>
			      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
			        <!-- Bottom Carousel Indicators -->
			        <ol class="carousel-indicators">
			          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
			          <li data-target="#quote-carousel" data-slide-to="1"></li>
			          <li data-target="#quote-carousel" data-slide-to="2"></li>
			          <li data-target="#quote-carousel" data-slide-to="3"></li>
			        </ol>
			        
			        <!-- Carousel Slides / Quotes -->
			        <div class="carousel-inner">
			        
			          <!-- Quote 1 -->
			          <div class="item active">
			            <blockquote>
			              <div class="row">
			              	<div class="container">
			              		<div class="col-sm-4 text-center">
				                  <img class="img-circle" src="img/alisha.jpg" style="width: 140px;height:140px;">
				                </div>
				                <div class="col-sm-8">
				                  <p>It's been a great honour to be speaking at TEDxDTU. Such a great audience and thank you for the support and love.</p>
				                  <small>Alisha Abdullah</small>
				                </div>
			              	</div>
			              </div>
			            </blockquote>
			          </div>
			          <div class="item">
			            <blockquote>
			              <div class="row"><div class="container">
			                <div class="col-sm-4 text-center">
			                  <img class="img-circle" src="img/shivangi.jpg" style="width: 140px;height:140px;">
			                </div>
			                <div class="col-sm-8">
			                  <p>A day filled with magnificence, par excellence art of work and an intricately woven experience by team TEDxDTU.</p>
			                  <small>Dr. Shivangi Maletia</small>
			                </div>
			              </div></div>
			            </blockquote>
			          </div>
			          <!-- Quote 2 -->
			          <div class="item">
			            <blockquote>
			              <div class="row"><div class="container">
			                <div class="col-sm-4 text-center">
			                  <img class="img-circle" src="img/richa.jpg" style="width: 140px;height:140px;">
			                </div>
			                <div class="col-sm-8">
			                  <p>Love art in yourself, and not yourself in art.</p>
			                  <small>Richa Chadda</small>
			                </div>
			              </div></div>
			            </blockquote>
			          </div>
			          <!-- Quote 3 -->
			          <div class="item">
			            <blockquote>
			              <div class="row"><div class="container">
			                <div class="col-sm-4 text-center">
			                  <img class="img-circle" src="img/dalmia.jpg" style="width: 140px;height:140px;">
			                </div>
			                <div class="col-sm-8">
			                  <p>Sound is something that one can't really talk about. Who feels it knows it.</p>
			                  <small>Taru Dalmia</small>
			                </div>
			              </div></div>
			            </blockquote>
			          </div>
			        </div>
			        
			        
			        <!-- Carousel Buttons Next/Prev -->
			        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
			        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
			      </div>                          
			    </div>
			  </div>
			</div>
		</section>
		<section id="sponsors">
				<div class="row">
					<div class="container">
						<div class="announcements">
							<h1>Corporate Partners</h1>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="https://aireon.com/">
							<h4>Event Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/Aireon.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://www.tcs.com/Pages/default.aspx">
							<h4>Learning Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/tcs.png" alt="img26"/></div></div></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="announcements">
							<h1>Media Partners</h1>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<a href="http://indianexpress.com/">
							<h4>Title Media Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/indian-express.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="https://www.partiko.com/">
							<h4>Event Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/partiko.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="http://www.theeducationtree.com/">
							<h4>Campus Publicity Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/education-tree.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="https://www.facebook.com/humansofdelhi">
							<h4>Community Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/humans-delhi.png" alt="img26"/></div></div></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="announcements">
							<h1>Online Media Partners</h1>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://www.dfordelhi.in/">
							<div class="s-box-box"><div class="s-box"><img src="/img/d_for_delhi.jpg" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://collegedesk.in/">
							<div class="s-box-box"><div class="s-box"><img src="img/my-dala.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://www.duupdates.in/">
							<div class="s-box-box"><div class="s-box"><img src="img/du-updates.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://urbanasian.com/">
							<div class="s-box-box"><div class="s-box"><img src="img/urban-asian.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://duexpress.in/">
							<div class="s-box-box"><div class="s-box"><img src="img/du-express.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="http://www.collegemedia.in/">
							<div class="s-box-box"><div class="s-box"><img src="img/college-media.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="http://campusdrift.com/">
							<div class="s-box-box"><div class="s-box"><img src="img/campus-drift.png" alt="img26"/></div></div></a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<a href="http://collegedesk.in/">
							<div class="s-box-box"><div class="s-box"><img src="img/college-desk.png" alt="img26"/></div></div></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="announcements">
							<h1>Merchandise Partners</h1>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<a href="http://designocare.com/">
							<h4>3D Printing Partner</h4><br>
							<div class="s-box-box"><div class="s-box"><img src="img/design.png" alt="img26"/></div></div></a>
						</div>
					</div>
				</div>
		</section>
		<section id="cd-google-map">
			<!-- #google-container will contain the map  -->
			<div id="google-container"></div>
			<!-- #cd-zoom-in and #zoom-out will be used to create our custom buttons for zooming-in/out -->
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
			<address>Dr. B.R. Ambedkar Auditorium, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, Delhi, 110042</address> 
		</section>
		

<!-- </body> -->
<!-- <footer> -->
		<section id="contact" class="social-footer">
		    <div class="container">
		        <div class="row">
		            <div class="social-footer-block col-xs-12 col-md-2">
		                <a  target="_blank" href="http://www.ted.com/tedx/events/20506">
		                	<div><br><br><img src="./img/logo.png"></div>
		                </a>
		            </div>
		            <div class="social-footer-block col-xs-12 col-md-3">
		                <p><strong>Address</strong><br>Delhi Technological University, Shahbad Daulatpur, Main Bawana Road Delhi, 110042<br>Nearest Metro Station -<br /> Samaypur Badli</p>
		            </div>
		            <div class="social-footer-block col-xs-12 col-md-3">
						<p><strong>Contact us</strong><br>Email: contact@tedxdtu.in<br>Phone: +91 8586096079<br> +91 8373920868<br></p>
		            </div>
		            <div class=" col-xs-12 col-md-4">
	                	<div class="social-icons">
							<a  target="_blank" href="https://www.facebook.com/tedxdtu/" class="c-link c-link--facebook c-tooltip" aria-label="Facebook">
							    <svg class="c-icon"><use xlink:href="#icon--facebook"></use></svg>
							</a>

							<a  target="_blank" href="https://twitter.com/tedxdtuofficial" class="c-link c-link--twitter c-tooltip" aria-label="Twitter">
							    <svg class="c-icon"><use xlink:href="#icon--twitter"></use></svg>
							</a>

							<a  target="_blank" href="http://www.youtube.com/channel/UCTpW0MCeYxIkrM5W4Gm40gA" class="c-link c-link--youtube c-tooltip" aria-label="Youtube">
							    <svg class="c-icon"><use xlink:href="#icon--youtube"></use></svg>
							</a>

							<a  target="_blank" href="https://www.linkedin.com/company/tedxdtu" class="c-link c-link--linkedin c-tooltip" aria-label="Linkedin">
							    <svg class="c-icon"><use xlink:href="#icon--linkedin"></use></svg>
							</a>

							<a  target="_blank" href="https://www.instagram.com/tedxdtu/" class="c-link c-link--instagram c-tooltip" aria-label="Instagram">
							    <svg class="c-icon"><use xlink:href="#icon--instagram"></use></svg>
							</a>

							<a  target="_blank" href="https://www.snapchat.com/add/tedxdtu" class="c-link c-link--snapchat c-tooltip" aria-label="Snapchat">
							    <svg class="c-icon"><use xlink:href="#icon--snapchat"></use></svg>
							</a>

							<svg style="display: none">
							    <symbol id="icon--facebook" viewBox="0 0 24 24">
							        <path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" />
							    </symbol>
							    <symbol id="icon--twitter" viewBox="0 0 24 24">
							        <path d="M17.71,9.33C17.64,13.95 14.69,17.11 10.28,17.31C8.46,17.39 7.15,16.81 6,16.08C7.34,16.29 9,15.76 9.9,15C8.58,14.86 7.81,14.19 7.44,13.12C7.82,13.18 8.22,13.16 8.58,13.09C7.39,12.69 6.54,11.95 6.5,10.41C6.83,10.57 7.18,10.71 7.64,10.74C6.75,10.23 6.1,8.38 6.85,7.16C8.17,8.61 9.76,9.79 12.37,9.95C11.71,7.15 15.42,5.63 16.97,7.5C17.63,7.38 18.16,7.14 18.68,6.86C18.47,7.5 18.06,7.97 17.56,8.33C18.1,8.26 18.59,8.13 19,7.92C18.75,8.45 18.19,8.93 17.71,9.33M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" />
							    </symbol>
							    <symbol id="icon--instagram" viewBox="0 0 24 24">
							        <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
							    </symbol>
							    <symbol id="icon--linkedin" viewBox="0 0 512 512">
							        <path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"/>
							    </symbol>
							    <symbol id="icon--snapchat" viewBox="0 0 24 24">
							        <path d="M12,20.45C10.81,20.45 10.1,19.94 9.47,19.5C9,19.18 8.58,18.87 8.08,18.79C6.93,18.73 6.59,18.79 5.97,18.9C5.86,18.9 5.73,18.87 5.68,18.69C5.5,17.94 5.45,17.73 5.32,17.71C4,17.5 3.19,17.2 3.03,16.83C3,16.6 3.07,16.5 3.18,16.5C4.25,16.31 5.2,15.75 6,14.81C6.63,14.09 6.93,13.39 6.96,13.32C7.12,13 7.15,12.72 7.06,12.5C6.89,12.09 6.31,11.91 5.68,11.7C5.34,11.57 4.79,11.29 4.86,10.9C4.92,10.62 5.29,10.42 5.81,10.46C6.16,10.62 6.46,10.7 6.73,10.7C7.06,10.7 7.21,10.58 7.25,10.54C7.14,8.78 7.05,7.25 7.44,6.38C8.61,3.76 11.08,3.55 12,3.55C12.92,3.55 15.39,3.76 16.56,6.38C16.95,7.25 16.86,8.78 16.75,10.54C16.79,10.58 16.94,10.7 17.27,10.7C17.54,10.7 17.84,10.62 18.19,10.46C18.71,10.42 19.08,10.62 19.14,10.9C19.21,11.29 18.66,11.57 18.32,11.7C17.69,11.91 17.11,12.09 16.94,12.5C16.85,12.72 16.88,13 17.04,13.32C17.07,13.39 17.37,14.09 18,14.81C18.8,15.75 19.75,16.31 20.82,16.5C20.93,16.5 21,16.6 20.97,16.83C20.81,17.2 20,17.5 18.68,17.71C18.55,17.73 18.5,17.94 18.32,18.69C18.27,18.87 18.14,18.9 18.03,18.9C17.41,18.79 17.07,18.73 15.92,18.79C15.42,18.87 15,19.18 14.53,19.5C13.9,19.94 13.19,20.45 12,20.45Z" />
							    </symbol>
							    <symbol id="icon--youtube" viewBox="0 0 512 512">
							        <path d="M422.6 193.6c-5.3-45.3-23.3-51.6-59-54 -50.8-3.5-164.3-3.5-215.1 0 -35.7 2.4-53.7 8.7-59 54 -4 33.6-4 91.1 0 124.8 5.3 45.3 23.3 51.6 59 54 50.9 3.5 164.3 3.5 215.1 0 35.7-2.4 53.7-8.7 59-54C426.6 284.8 426.6 227.3 422.6 193.6zM222.2 303.4v-94.6l90.7 47.3L222.2 303.4z"/>
							    </symbol>
							</svg>
						</div>
		            </div>
		        </div>
		    </div>
		</section>
		<div class="arrow-up"> </div>
		<footer class="footer">
		    <div class="container">
		        <p>This independent TEDx event is operated under license from TED. Copyright © TEDxDTU 2017. All rights reserved. <br><br>Designed by <a href="https://github.com/vanshraj/">Vanshaj Behl</a> and Developed by <a href="https://github.com/ciplpj">Ankit Jain.</a></p>
		    </div>
		</footer>

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>	
		<script src="js/TweenLite.min.js"></script>
		<script src="js/demo-1.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzWTi-IVhY6mRMhAGa5ld9yepi5ezdhJk"></script>	
		<script src="js/googlemap.js"></script>		
		<script src="js/testimonials.js"></script>		
	</body>
</html>
<!-- </footer>