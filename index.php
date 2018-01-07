<?php require_once('connect.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pasa Yard</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700%7cOpen+Sans:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link media="all" rel="stylesheet" href="css/all.css">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="header-holder">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo">
								<a href="#"><img class="img-responsive" src="images/logo.png" alt="Pasa Yard"></a>
							</div>
						</div>
						<div class="col-sm-8 text-right clearfix">
							<ul class="header-list list-unstyled">
								<li><i class="fa fa-phone"></i>01 5260919</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:admin@pasayard.com">admin@pasayard.com</a></li>
								<li><i class="fa fa-map-marker"></i>Chakupat, Lalitpur</li>
							</ul>
							<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-align-justify fa-3x"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php include('navbar.php'); ?>
		</header>
		<main id="main" role="main">
			<div id="home-slider" class="carousel slide home-slider">
				<div class="carousel-inner" role="listbox">
					<div class="item  active " style="background-image:url(images/slider1.jpg)">
						<div class="container">
							<div class="caption">
								<h1 class="first-item" data-animation="animated bounceInLeft">
									Welcome To Pasa Yard
								</h1>
								<p class="second-item" data-animation="animated bounceInRight">
									Your Partner For every event.
								</p>
							</div>
						</div>
					</div>
					<div class="item" style="background-image:url(images/slider2.jpg)">
						<div class="container">
							<div class="caption">
								<h1 class="first-item" data-animation="animated bounceInLeft">
									Come Play Enjoy
								</h1>
								<p class="second-item" data-animation="animated bounceInRight">
									This is Pasa Yard.
								</p>
							</div>
						</div>
					</div>
				</div>
				<a class="left left-control" href="#home-slider" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right right-control" href="#home-slider" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<div class="section text-center">
				<?php 
						$sql_query = "SELECT * FROM tblwelcome";
						$result = $connect->query($sql_query);
						if($result && $result->num_rows>0){
							while($row = $result->fetch_assoc()){

							?>
				<div class="container">
					<h1><?php echo $row['title']; ?></h1>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<p><?php echo $row['description']; ?></p>
						</div>
					</div>
				</div>
				<?php
			}
		}
				?>
			</div>
			<div class="section text-center alternate">
				<div class="container">
					<h1>Services of  PasaYard</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="service-block">
								<div class="image-holder"><img src="images/service1.jpg" class="img-responsive" alt="image description"></div>
								<div class="meta">
									<h2>Services</h2>
									<p>Short intro goes here</p>
									<a class="btn btn-sm btn-green" href="#">See more <i class="fa fa-arrow-circle-right"></i></a>
								</div>	
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-block">
								<div class="image-holder"><img src="images/service.jpg" class="img-responsive" alt="image description"></div>
								<div class="meta">
									<h2>Services</h2>
									<p>Short intro goes here</p>
									<a class="btn btn-sm btn-green" href="#">See more <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-block">
								<div class="image-holder"><img src="images/service2.jpg" class="img-responsive" alt="image description"></div>
								<div class="meta">
									<h2>Services</h2>
									<p>Short intro goes here</p>
									<a class="btn btn-sm btn-green" href="#">See more <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section text-center">
				<div class="container">
					<h1>Featured Gallery</h1>
					<div class="featured-gallery">
								<div class="slide">
							<img src="images/gallery_crop1.jpg"  alt="Premises">
							<span class="description">
								Meeting
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop2.jpg"  alt="Bhotekoshi River">
							<span class="description">
								Discussion
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop3.jpg"  alt="Garden">
							<span class="description">
								Take Talk
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop4.jpg"  alt="Tatopani Dhara Overview">
							<span class="description">
								Some outside
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop5.jpg"  alt="Entrance Gate">
							<span class="description">
								Promotion
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop1.jpg"  alt="Lockers">
							<span class="description">
								Meeting
							</span>
						</div>
								<div class="slide">
							<img src="images/gallery_crop2.jpg"  alt="Shiva Temple">
							<span class="description">
								Discussion
							</span>
						</div>
							</div>
				</div>
			</div>
		</main>
		<?php include('footer.php'); ?>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
