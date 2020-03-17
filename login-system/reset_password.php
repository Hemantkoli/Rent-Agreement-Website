<?php
/* Password reset process, updates database with new user password */
require 'db.php';
session_start();

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
    $email = $mysqli->escape_string($_POST['email']);
            
    //for forget password
    if(isset($_POST['hash'])){
        $hash = $mysqli->escape_string($_POST['hash']);
        $sql = "SELECT Password FROM userdetails WHERE EmailID='$email' AND HashKey='$hash';";
        
        $result = $mysqli->query($sql);
    
        if ( $result->num_rows == 0 )
        { 
            $_SESSION['message'] = "You have entered invalid URL for password reset!";
            header("location: error.php");
        }
        else{
            $user = $result->fetch_assoc();
            $old_password = $user['Password'];
            $new_password = $_POST['newpassword'];

        }
    }
    
    // for password reset
    else{
        $new_password = $_POST['newpassword'];
        $old_password = $_POST['oldpassword'];
    }

  
    // Make sure the two passwords match
        
        
    $sql = "UPDATE userdetails SET Password='$new_password' WHERE EmailID='$email' and Password = '$old_password'";

    if ( $mysqli->query($sql) ) {

        $_SESSION['message'] = "Your password has been reset successfully!";
        
        if(isset($_POST['hash'])){
            header("location: success2.php");
        }    
        
        else{
        header("location: ".$_SERVER['HTTP_REFERER']);    
        }
    }

    else {
        $_SESSION['message'] = "Passwords you entered don't match, try again!";
        echo $_SESSION['message'];
        header("location: error.php");    
    }
}
?>