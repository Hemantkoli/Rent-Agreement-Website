<?php
    /* The password reset form, the link to this page is included
       from the forgot.php email message
    */
    session_start();
    include('db.php');
    
    // Make sure email and hash variables aren't empty
    if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
    {
        $email = $mysqli->escape_string($_GET['email']); 
        $hash = $mysqli->escape_string($_GET['hash']); 
    
        // Make sure user email with matching hash exist
        $result = $mysqli->query("SELECT * FROM userdetails WHERE EmailID='$email' AND HashKey='$hash'");
    
        if ( $result->num_rows == 0 )
        { 
            $_SESSION['message'] = "You have entered invalid URL for password reset!";
            header("location: error.php");
        }
        
    }
    else {
        $_SESSION['message'] = "Sorry, verification failed, try again!";
        header("location: error.php");  
    }
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Reset Your Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
            body {
              font-family: Arial;
              font-size: 10px;
              padding-left: 8px;
              padding-right: 8px;
            }
            h2{
                font-size:25px;
            }
            
            * {
              box-sizing: border-box;
            }
            
            .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              margin: 0 -16px;
            }
            
            .col-25 {
              -ms-flex: 25%; /* IE10 */
              flex: 25%;
            }
            
            .col-50 {
              -ms-flex: 50%; /* IE10 */
              flex: 50%;
            }
            
            .col-75 {
              -ms-flex: 75%; /* IE10 */
              flex: 75%;
            }
            
            .col-25,
            .col-50,
            .col-75 {
              padding: 0 16px;
            }
            
            .container {
              background-color: #ffff;
              padding: 5px 20px 15px 20px;
              border: 1px solid lightgrey;
              border-radius: 11px;
            }
            
            input[type=text] {
              width: 100%;
              margin-bottom: 15px;
              padding: 4px;
              border: 1px solid #ccc;
              border-radius: 3px;
            }
            
            input[type=password] {
              width: 100%;
              margin-bottom: 15px;
              padding: 4px;
              border: 1px solid #ccc;
              border-radius: 3px;
            }
            
            label {
              margin-bottom: 5px;
              display: block;
              font-size: 14px;

            }
            
            .icon-container {
              margin-bottom: 20px;
              padding: 7px 0;
              font-size: 24px;
            }
            
            .btn {
              height:40px;
              background-color: #4CAF50;
              color: white;
              padding: 12px;
              margin: 10px 0;
              border: none;
              width: 45%;
              border-radius: 3px;
              cursor: pointer;
              font-size: 14px;
              display:inline;
            }
            
            
            .btn:hover {
              background-color: #45a049;
            }
            
            a {
              color: #2196F3;
            }
            
            hr {
              border: 1px solid lightgrey;
            }
            
            span.price {
              float: right;
              color: grey;
            }
             .center {
                margin: auto;
                width: 45%;
                padding: 10px;
            }
            @media only screen and (max-width: 600px) {
                .center {
                    width: 100%;
                }
            }
            
            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
            @media (max-width: 800px) {
              .row {
                flex-direction: column-reverse;
              }
              .col-25 {
                margin-bottom: 20px;
              }
            }
        </style>
    </head>

    <body data-gr-c-s-loaded="true">
        <div class="center">
            <div style="text-align:center; font-family:Poppins-Regular; font-size: 12px; color: #555555; line-height: 1.5; margin-top:0px;padding-top:0px;">
                <span>
            	    ollaindia.com
                </span>
                <br>
            </div>
            <div class="row">
              <div class="col-75">
                <div class="container">
                    <form action="reset_password.php" method="post">
                      
                      <div class="field-wrap">
                        <label>
                          New Password
                        </label>
                        <input type="password" name="newpassword" autocomplete="off" required/>
                      </div>
                          
                      <div class="field-wrap">
                        <label>
                          Confirm New Password
                        </label>
                        <input type="password" name="confirmpassword" autocomplete="off" required/>
                      </div>
                      
                      <!-- This input field is needed, to get the email of the user -->
                      <input type="hidden" name="email" value="<?php echo $email ?>">    
                      <input type="hidden" name="hash" value="<?php echo $hash ?>">    
                          
                      <input type="submit" class="button button-block" value="Apply" />
                    </form>
            </div>
        </div>
    </body>
</html>
