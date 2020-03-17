<?php
session_start();

$conn=mysqli_connect('localhost','root','','rentdb');

if(!$conn)
{
    die(mysql_connect_error());
}
$data="'".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['password']."'";
if(mysqli_query($conn,"INSERT INTO `userdetails`(`Name`, `EmailID`, `MobileNo`, `Password`) VALUES(".$data.")"))
{
    $_SESSION['message'] = "Registration Successful!!!!!!!";
    header("location: message.php");
}
else 
{ 
      $_SESSION['message'] = "Error In Registration, try after some time !!!!";
        header("location: error.php");
  
}
?>
