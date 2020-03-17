 <?php
 	session_start();
 	?>

 <html>
 <head>
 <style>
	.a
	{
		float:left;
	}
	#sticky-navigation {
    background: rgba(255,255,255,0.2);
}
	.margin
	{
		margin-left:70px;
	}
	.image
	{
		background-image: url("images/i2.jpg");
		
		background-attachment:fixed;
		
		
	}
	.transparent{
		background-color: rgba(0,0,0,0.6);
	}
	.textcolor
	{
		color:white;
		font-family:Arial Verdana;
		font-size:30px;
	}
	.textcolor1
	{
		color:white;
		font-family:Arial Verdana;
		font-size:50px;
	}
	.btn
	{color:white;
	background-color:#cc141a;
	border-radius:20px;
	height:50px;
	width:300px;}
	hr{
  border-top: 1px dashed black;
}
.text2{
		color:#cc141a;
		font-size:30px;
		}
.color{
			color:#090a0a;
		}
	
   .btn3
	{
		
		height:30%;
		width:80%;
		background-color:#279999;
		border-radius:20px;
		font-size:30px;
	}
	.btn3:hover {
  background-color: rgba(98, 152, 239,0.3);
font-size: 40px;
  color: black;
  box-shadow: 0 30px 20px 0 rgba(0,0,0,0.24), 0 30px 70px 0 rgba(0,0,0,0.19);
}
 
.shadow{
			 box-shadow: 0 30px 20px 0 rgba(0,0,0,0.24), 0 30px 70px 0 rgba(0,0,0,0.19);
}	
    
});
.grow
{
	height:20%;
	width:20%;
}
grow:hover{
			 

  box-shadow: 0 30px 20px 0 rgba(0,0,0,0.24), 0 30px 70px 0 rgba(0,0,0,0.19);
		}
		
	.forms{
		background-color: rgba(255, 255, 255,0.5);
		box-shadow: 30px 20px 10px grey;
		border:1px solid;
		}
		.round{
					border-radius:20px;
					height:10%;
					width:70%
					
				}
.formshadow{box-shadow: 30px 20px 10px grey;}
.bgmap{
		background-image: url("images/map123.png");
		background-attachment:fixed;
		
	.w{color:white;}
	}
	.fontt{ font-size:20px;}
	.bgmap1{
		background-color: rgba(0,0,0,0.6);
  </style>
  <script type="text/javascript">
    $(document).ready(function() 
	{
		$("#id1").addClass("animated bounce"); 
    }); </script>
 
 <link rel="stylesheet" href="css\hover.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\imagehover.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
<div class="col-lg-12 col-xs-12">
<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
	 	<img src="images/logo.png" height="50px" width="50px " style="float: left">
	 	<a class="navbar-brand" href="#"><font color="white" class="margin">Online Rent Aggrement</font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right #sticky-navigation">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span><font><b> Home</b></font></a></li>
		<li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope"><font><b> Contact Us</b></font></a></li>
		<li class="active"><a href="makeaggrement.php"><span class="glyphicon glyphicon-file"><font><b> MakeAgreement </b></font></a></li>
		
<?php
if(isset($_SESSION['name']))
{

		echo '<li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><b> '.$_SESSION['name'].'</b>
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li ><a href="login-system/logout.php"><b>Log Out</b></a></li>
	          
	        </ul>
      </li>';

}
else
{
	echo '<li class="active"><a href="login-system/login.html"><span class="glyphicon glyphicon-log-in"></span><b> Login</b>
		</a></li>';
}
?>

		
		
      </ul>

</nav>
</div>
</div>
</div>
</div>
<div class="container-fluid">
	<div class="col-lg-12 col-xs-12">
		<div class="image">
		
		<div class="transparent">
			<center><h1 class="textcolor"><br><br><br><br><br>#Our clients are our first priority!</h1><br><br></center>
			<center><h1 class="textcolor1">WELCOME TO Rent Aggrement</h1><br></center><br>
			<center><a href="makeaggrement.php"><button class="btn hvr-pulse-shrink">Make Rent Agreement</button></a></center><br><br><br><br><br><br>
		</div>
		<div>
	</div>
</div><br><br><br>
<div class="container-fluid">
	<div class="col-lg-6 col-xs-12">
	<img src="images/i3.jpg" height="60%" width="100%">
	</div>
	<div class="col-lg-6 col-xs-12">
	<div class="col-lg-6 col-xs-12"><br><br><br>
	<center><h1>About us<h1>
	<h4 class="fontt">what is Rent Aggrement and our vision we have been constantly working to find ways to improve the way services are delivered to the people in our country. we hope to make government procedures more accessable and packaged with good service.</h4></center>
	</div>
	<div class="col-lg-6 col-xs-12">
	</div>
	</div>
	</div>
	<hr><br><br><br><br><br>
<div class="container-fluid">
	<div class="col-lg-12 col-xs-12">
	
			<center><p class="text2" id="id1"><marquee>"Authorized service providers for E-Registration of leave & license Agreement at your doorstep!!!"</marquee></p></center><br><br><br><br><br>
			<hr>
	</div>
</div>
</div>

<br>
<br>
<br>
<hr>
<div class="conatiner-fluid">
	<div class="col-lg-12 col-xs-12">
		<center><h1 class="color">Services we offer</h1></center>
		<center><h3 class="color">Best services for our best clients!</h3></center><br><br><br>
	</div>
</div><br><br>
<div class="container-fluid">
	<div class="col-lg-12 col-xs-12">
		<center><button class="btn3 hvr-grow">Make Rent Agreement</button></center>
	</div>
</div>
<br><br><br><br>
<div class="conatiner-fluid">
	<div class="col-lg-12 col-xs-12">
		<center><h1 class="color">Features we offer</h1></center>
		<center><h3 class="color">Best services for our best clients!</h3></center><br><br><br>
	</div>
</div><br><br>
<div class="container-fluid">
	<div class="col-lg-4 col-xs-12">
		<center><img src="images/i5.png" height="35%" width="50%" class="hvr-grow"></center>
		<center><caption><h3>Easy Registration!</h3></caption><center>
		
	</div>
	<div class="col-lg-4 col-xs-12">
		<center><img src="images/i6.jpg" height="35%" width="50%" class="hvr-grow"></center>
		<center><caption><h3>Register at doorstep!</h3></caption><center>
	</div>
	<div class="col-lg-4 col-xs-12">
	<center><img src="images/i7.jpg" height="35%" width="70%" class="hvr-grow"></center>
		<center><caption><h3>Home delivery!</h3></caption><center>
	</div>
</div>
<br><br><br><br><br>
<!-- .......-->
<div class="container-fluid">
	<div class="col-lg-4 col-xs-12">
		<center><img src="images/i8.jpg" height="35%" width="50%" class="hvr-grow"></center>
		<center><caption><h3>Low charge!</h3></caption><center>
		
	</div>
	<div class="col-lg-4 col-xs-12">
		<center><img src="images/i9.png" height="35%" width="50%" class="hvr-grow"></center>
		<center><caption><h3>Residential and commertial agreement!</h3></caption><center>
	</div>
	<div class="col-lg-4 col-xs-12">
	<center><img src="images/i10.jpg" height="35%" width="50%" class="hvr-grow"></center>
		<center><caption><h3>Hassel free service!</h3></caption><center>
	</div>
</div><br><br><br>
<div class="container-fluid">
	<div class="col-lg-6 col-xs-12" style="background-color:black">
	<center><h1 style="color:white">Just Three Steps!</h1><center>
	<center><h3 style="color:#f44253">Online form fillup!</h3><center><br>
	<img src="images/i11.jpg" height="10%" width="10%">
	<center><h3 style="color:#f44253">Schedule an appointment!</h3><center><br>
	<img src="images/i11.jpg" height="10%" width="10%">
	<center><h3 style="color:#f44253">Get registered agreement!</h3><center><br>
	<img src="images/i11.jpg" height="10%" width="10%">
	<center><h3 style="color:#f44253">You are done!</h3><center><br>
	<img src="images/i12.jpg" height="10%" width="10%">
	
	
	
	</div>
	<div class="col-lg-6 col-xs-12">
		<img src="images/i13.jpg" height="95%" width="100%">
	</div>
</div><br><br>
<div class="conatiner-fluid">
	<div class="col-lg-12 col-xs-12">
		<center><h1 class="color">Since 2014</h1></center><br>
		<center><h4 class="color">since 2014, we have been constantly working to find ways to improve the way services are delivered to the people in our country. we hope to make government procedures more accessable and packaged with good service.</h4></center>
		<br><br><br>
	
		</div><br><br><br>

		

	</div>
</div><br><br>	

<div class="container-fluid">
		<div class="col-lg-12 col-xs-12">
		<div class="bgmap">
	<div class="bgmap1">
	<div class="mapborder"><br><br>
		
		<!--<h3 class="skfont1" style="text-align: left;color: #3C3535;font-weight: bold;">The happiest place on earth</h3>-->
	</div>
	<div class="container-fluid">
		<div class="col-lg-4 col-xs-12 form">
			<!--<input type="text" name="name" placeholder="Name" class="inputconc black"><br><br>
			<input type="email" name="email" placeholder="E-Mail" class="inputconc black"><br><br>
			<input type="text" name="Message" placeholder="Message" class="inputconc1 black"><br><br>-->
			<ul class="w">
			<li><h4 class="w">Our Policies</h4></li>
			<li><h4 class="w">Features</h4></li>
			<li><h4 class="w">Courses</h4></li>
			<li><h4 class="w">Events</h4></li>
			<li><h4 class="w">sitemaps</h4></li>
			<li><h4 class="w">Terms of use</h4></li>
			
		</div>
		<div class="col-lg-4 col-xs-12 form">
			<div class="bgcontc ">
			<img src="images/visa.png" height="250px" width="250px"><br><br>	
			
		</div>
		</div>
		
		<div class="col-lg-4 col-xs-12">
			
			<h2 class="w">We are always there for you on:</h2>
				<h4 class="w">Phone:9604072445</h4>
				<h4 class="w">Email:shrutinaradekar3@gmail.com</h4>
				
			
		</div>

		
	
	
	<br>
	<br>
	<br>
	<br>
</div>
</div>
</div>
</div>
   
		