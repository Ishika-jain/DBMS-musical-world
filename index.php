<!DOCTYPE HTML>
<html>

<head>
	<title>Musical World</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="icon" href="images/i1.png" />
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
					Musical World
				</a>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about">about</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="" data-target="#modalLRForm" data-toggle="modal">Login/Signup</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href='contributors.php'>contributors</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info text-right">
					<h1 class="text-uppercase">listen to music anywhere.</h1>
					<p class="text-white">A ONE STOP DESTINATION FOR ALL YOUR MUSICAL CRAVINGS</p>
					<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about-->
	<section class="wthree-row" id="about">
		<div class="row justify-content-center align-items-center no-gutters abbot-main">
			<div class="col-lg-6 p-0">
				<img src="images/about.jpg" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 abbot-right px-md-5  py-lg-0 py-3">
				<div class="card">
					<div class="card-body px-lg-5">
						<h3 class="stat-title card-title align-self-center mb-sm-5 mb-3">musical world
							<br> get addicted to music
						</h3>
						<span class="w3-line"></span>
						<p class="card-text align-self-center my-4 text-white">
							Like to listen to songs and albums you download offline? Stream music online privately or with friends in our group chat? Get to know new music? Looking for a music streaming service that sounds better, is safer and custom-built for the music fans? Our product lets you do all this and more.
						</p>
						<p class="card-text align-self-center mb-5 text-white"> We've created a world-class music website where you can sign up for free to llisten to, download your favourite songs and even upload your own songs! If you're like us and love music then we're sure you'll love our website too! It's like Spotify but better!</p>
						<a href="#more_info" class="btn btn-agile abt_card_btn scroll">Know More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	<?php
	include './footer.php';
	?>

	<!--Modal: Login / Register Form-->
	<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog cascading-modal" role="document">
			<!--Content-->
			<div class="modal-content">

				<!--Modal cascading tabs-->
				<div class="modal-c-tabs">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
								Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
								Register</a>
						</li>
					</ul>

					<!-- Tab panels -->
					<div class="tab-content">
						<!--Panel 7-->
						<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

							<!--Body-->
							<form action="validate.php" method="post">
								<div class="modal-body mb-1">
									<div class="md-form form-sm mb-5">
										<i class="fa fa-envelope prefix"></i>
										<input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email_address" required>
										<label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
									</div>

									<div class="md-form form-sm mb-4">
										<i class="fa fa-lock prefix"></i>
										<input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password" required>
										<label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
									</div>
									<div class="text-center mt-2">
										<button class="btn btn-info" type="submit" name="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
									</div>
								</div>
							</form>
							<!--Footer-->


						</div>
						<!--/.Panel 7-->

						<!--Panel 8-->
						<div class="tab-pane fade" id="panel8" role="tabpanel">

							<!--Body-->
							<form action="validate.php" method="post">
								<div class="modal-body">
									<div class="md-form form-sm mb-5">
										<i class="fa fa-user prefix"></i>
										<input type="text" id="modalLRInput11" class="form-control form-control-sm validate" name="username" required>
										<label data-error="wrong" data-success="right" for="modalLRInput11">User Name</label>
									</div>

									<div class="md-form form-sm mb-5">
										<i class="fa fa-mobile prefix"></i>
										<input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile_number" required>
										<label data-error="wrong" data-success="right" for="modalLRInput15">Mobile Number</label>
									</div>

									<div class="md-form form-sm mb-5">
										<i class="fa fa-envelope prefix"></i>
										<input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email_address" required>
										<label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
									</div>

									<div class="md-form form-sm mb-5">
										<i class="fa fa-lock prefix"></i>
										<input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password" required>
										<label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
									</div>

									<!-- THIS IS FOR REPEAT PASSWORD -->

									<!-- <div class="md-form form-sm mb-4">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="confirm_password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
				</div> -->

									<div class="text-center form-sm mt-2">
										<button class="btn btn-info" type="submit" name="register">Sign up <i class="fa fa-sign-in ml-1"></i></button>
									</div>
								</div>
							</form>
							<!--Footer-->
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!--/.Panel 8-->
					</div>

				</div>
			</div>
			<!--/.Content-->
		</div>
	</div>
	<!--Modal: Login / Register Form-->

	<!-- Modal for Forgot Password -->
	</form>
	</div>
	</div>
	</div>
	</div>

	<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
	<script src="js/easing.js "></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll ").click(function(event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});

		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>