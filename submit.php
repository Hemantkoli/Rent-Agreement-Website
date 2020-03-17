<?php
    session_start();
    if ($_POST['action'] == 'Back') 
{
  header('location:makeaggrement.php');
}

    if(isset($_POST['address']))
    {
        $_SESSION['address']=$_POST['address'].",".$_POST['city'].",".$_POST['pin'];


        $data="'".$_SESSION['oname']."','".$_SESSION['tname']."','".$_SESSION['email']."','".$_SESSION['mobile']."','".$_SESSION['startdate']."','".$_SESSION['tenacyperiod']."','".$_SESSION['rent']."','".$_SESSION['damount']."','".$_SESSION['address']."'";
        #print($data);

        

		$conn=mysqli_connect('localhost','root','','rentdb');
		if(!$conn)
		{
		    die(mysql_connect_error());
		}
		if(mysqli_query($conn,"INSERT INTO `recorddetails`(`ownerName`, `tenantName`, `email`, `mobile`, `tenancyStartDate`, `tenancyPeriod`, `tenancyRent`, `tenancyDeposit`, `propertyAddress`) VALUES($data);"))
		{
			$result=mysqli_query($conn,"select count(*) as id from recorddetails");
			$refid=mysqli_fetch_assoc($result);
			
			?>


			<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(50,50,50);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

.container {
  border-radius: 10px;
  border: 1px solid black;
  background-color: rgba(135,135,135,0.9);
  padding: 20px;
}
</style>
<link rel="stylesheet" href="css\hover.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\imagehover.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(images/back.jpg);">
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

<div class="container" style="margin-top: 100px;width:60%;">
  <h1><u>SuccessFully Submitted !!!!!!!</u></h1><br>
  <h1><u>Your Reference ID:</u><i><?php echo "ORA- ".$refid['id'];?></i></h1>


  <h2 style="border: 1px solid white;background-color: black;color:white;text-align: center;text-decoration: none"><a href="index.php">HOME</a></h2>

</div>

</body>
</html>






<?php
		}
    }
    else
     {
    	
    header('loaction:makeaggrement-2.php');
    }
      

?>