<?php
 session_start();
 require_once('connect.php');  ?>
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>login page</title>
</head>
<?php 
	if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$psd = $_POST['psd'];
		$sql_query = "SELECT * FROM login WHERE `uname`='$uname' && `psd`='$psd'";
		$result = $connect->query($sql_query) ;
		if ($result && $result->num_rows > 0){
			$_SESSION['uname']=$uname;
			header("location:backend/dashboard.php");
      	}      
        else{
          	echo "please try again";
		} 
	}
?>
<body class="bg-default">
	<?php include('navbar.php'); ?>
	<div class="row">
	<div class="col-md-4">
	<h2>Login Form</h2>
	<form method="post">
		<div class="form-group">
		    <label for="uname">User Name:</label>
		    <input type="text" class="form-control" id="uname" name="uname">
	  	</div>
		<div class="form-group">
		    <label for="psd">Password:</label>
		    <input type="password" class="form-control" id="psd" name="psd">
		</div>
		<button class="button btn-primary" type="submit" class="btn btn-default" name="submit">Submit</button>
	</form>
		</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>