<!DOCTYPE html>
<html>
<head>


	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
   .jumbotron-x {
    background-image:url(img/a2/01.jpg);
    background-color: #fff;
    
    min-height: 50%;
    background-repeat: no-repeat;
    background-position: center;
    -webkit-background-size: cover;
    background-size: cover;
  }
  
  </style>
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img class="img-responsive"       
           src="img/mylogo.png" width="31%"></a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="service.php">Service</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="team.php">Team</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  <div class="row">
<div class="col-lg-9">

<div class="panel panel-primary">
  <div class="panel-heading"><h2 style="color: tomato"> <span class="shake shake-constant shake_bold">Mindhack<sup>TM</sup> provides services like:</span></h2></div>
  <div class="panel-body bg-warning": "><h3 style="color: lightblue">
    <em>Personality Building <br>Manpower Management<br>Skill development<br>Resource Management<br>Web Hosting<br>Web Training<br>Job Oppurnities<br>Internship Oppurnities<br>Career Building<br>Leadership Training</em>
  </h3></div>




</div></div>

<div class="col-lg-3">
  <canvas id="canvas" width="400" height="400"
style="background-color:#f57">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</div>
</div> 

<div class="row">
  <div class="jumbotron jumbotron-x">
  <h1 style="color:Yellow">Are you curious to know about our motives?<br>
    You wanted to one of us?<br>
    Do you have any question about us ?<br>
    Then visit.....
</h1>
  <!-- <p style="color:orange"> We are trying to make this world better place. We are the non-profit organization based on nepal and we are one of the best sevice giver to all of the citizen of any country as well as in the whole universe. We are branded company provide free as well as the paid services. We are glorius we know market and we keep human manpower and maximize the effort by different activities.</p> -->
  <p><a class="btn btn-primary btn-lg" href="about.php" role="button">Go to About us......</a></p>
</div>
</div>
	
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="footer-block">
          <ul class="list-inline footer-menu">
            <li><a href="">Term of Use</a></li>
            <li><a href="">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="footer-block text-center">
          <p class="copyright">
            © 2017 Mindhack<sup>TM</sup>. All rights reserved.
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="footer-block">
          <ul class="list-inline pull-right social-icon">
            <li><a href="https://facebook.com/abhisekk1"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/abhisekk1"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/abhishek-khanal-349a2258/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>



<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
</body>
</html>