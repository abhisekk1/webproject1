<?php require_once 'connect.php'; ?>
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
		<?php 
						$sql_query = "SELECT * FROM tblabt";
						$result = $connect->query($sql_query);
						if($result && $result->num_rows>0){
							while($row = $result->fetch_assoc()){

							?>
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
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="textholder">
								<h2><?php echo $row['title']; ?></h2>
								<ul class="list-default list-unstyled">
									<li>
										<div class="heading">
											<h3><?php echo $row['description']; ?></h3>
										</div>
										
									</li>
								</ul>
								<?php
			}
		}
				?>
							</div>
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