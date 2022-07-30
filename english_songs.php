<?php
session_start();
if (!isset($_SESSION['email_address']))
	header('location:index.php');

include('connection.php');

$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$user_id = $row['user_id'];

$sql = "SELECT * FROM english_albums ORDER BY song_id ASC";
$result = mysqli_query($conn, $sql);

while ($rows = mysqli_fetch_array($result)) {
	$song_id = $rows['song_id'];
	if (isset($_POST[$song_id])) {

		$sql = "SELECT * FROM favorite_songs WHERE song_id = '$song_id' AND cat_id = '3' AND user_id = '$user_id' ";
		$results = mysqli_query($conn, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { sweetAlert("Warning","<b> You have already added this song to your favorite list!!...</b>","warning");';
			echo '}, 500);</script>';
		} else {

			$sql = "SELECT * FROM english_albums WHERE song_id = '$song_id' ";
			$results = mysqli_query($conn, $sql);

			$row = mysqli_fetch_array($results);
			$song_id = $row['song_id'];
			$song_name = $row['song_name'];
			$singer_name = $row['singer_name'];
			$song_image = $row['song_image'];
			$audio_file = $row['audio_file'];

			$sql = "INSERT INTO favorite_songs(`cat_id`,`song_id`,`user_id`,`song_name`,`singer_name`,`song_image`,`audio_file`) VALUES('3','$song_id','$user_id','$song_name','$singer_name','$song_image','$audio_file') ";
			$results = mysqli_query($conn, $sql);

			if ($results) {
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { sweetAlert("Added"," <b>Song ' . $song_name . ' is successfully added to your favorite songs</b>","success");';
				echo '}, 500);</script>';
			} else {
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { sweetAlert("Oops...","<b> Error while adding.Please check your internet coonection!</b>","error");';
				echo '}, 500);</script>';
			}
		}
	}
}


?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Musical World | English Songs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
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
	<!--//webfonts-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">


	<link rel="css" type="stylesheet" href="/css/inside.css">


</head>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.html">
					Musical World
				</a>
				<pre>                 </pre>
				<li class="nav-item">
					<b style="font-size:20px;">
						<p style="color:blue;"><?php echo "Logged in as " . $_SESSION['username']; ?></p>
					</b>
					<p style="color:blue;">| English Songs |</p>
				</li>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Track</button>
							<div class="dropdown-menu dropdown-primary">
								<a class="dropdown-item" href="kannada_songs.php"><b>Kannada Songs</b></a>
								<a class="dropdown-item" href="hindi_songs.php"><b>Hindi Songs</b></a>
								<a class="dropdown-item" href="english_songs.php"><b>English Songs</b></a>
								<a class="dropdown-item" href="uploaded_songs.php"><b>Uploaded Songs</b></a>
							</div>
						</div>
						<li class="nav-item">
							<a class="nav-link scroll" href="favorite_list.php"><i class='fa fa-heart' style='font-size:40px;color:red'></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="logout.php">logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<?php
	include('connection.php');
	$sql = "SELECT * FROM english_albums ORDER BY song_id ASC";
	$result = mysqli_query($conn, $sql);

	echo "<section class='details-card'>
						<div class='container'>
							<div class='row'>";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			$song_id = $row['song_id'];
			$song_name = $row['song_name'];
			$movie_name = $row['movie_name'];
			$singer_name = $row['singer_name'];
			$song_image = $row['song_image'];
			$audio_file = $row['audio_file'];
			echo "
							<div class='col-md-3'>
								<form method='post' action='english_songs.php'>
									<div class='card-deck'>
										<div class='card-img'>
											<img src='songs/english_songs/img/$song_image' style='width:350px;height:250px;'alt=''>
										</div>
										<div class='card-desc'>
											<h3>$song_name | $singer_name</h3>
											<h3>movie - $movie_name</h3>
											<audio class='embed-responsive-item' controls='' preload='none'> <source src='songs/english_songs/$audio_file' type='audio/mp3'></audio><br>
											<div class='row'><button type='submit' style='color:red;' class='btn-card' name='$song_id'><i class='fa fa-heart'></i></button><br></div><br>  
										</div>
									</div>
								</form>
							</div>
							";
			echo "<br><br>";
		}
	}
	echo "</div>
				</div>
			</section>
			";
			include './footer.php';
	?>
</body>

</html>