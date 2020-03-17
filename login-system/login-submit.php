<?php
session_start();


$email =$_POST['email'];
$conn=mysqli_connect('localhost','root','','rentdb');
if(!$conn)
{
    die(mysql_connect_error());
}
$result = mysqli_query($conn,"SELECT Name,Password FROM userdetails where EmailID = '$email';");

if ( mysqli_num_rows($result) == 0 )
{ // User doesn't exist
    $_SESSION['message'] = "User with that Email doesn't exist! Please Register!!!!";
    header("location: error.php");
}
else 
{ // User exists

    $user = mysqli_fetch_assoc($result);

    if (strcmp($_POST['password'], $user['Password'])==0) 
    {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $user['Name'];
        header("location: ../index.php"); //it goes to homepage
       
    }
    else 
    {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}
?>
