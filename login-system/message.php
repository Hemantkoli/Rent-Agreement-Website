<?php
session_start();
?>

<! DOCTYPE html>
<!--html----------------------------->
<html>
    <head>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
       
        <style>
    
        *{margin: 0; padding: 0;}
        *{box-sizing: border-box;}

        body 
        { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .header 
        {
            
          overflow: hidden;
        background-color: rgba(10, 10, 10, 0.8);
          padding: 0px 0px;
          padding-top:0%;
        }
        
        .header a 
        {
          float: left;
          color: black;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px; 
          line-height: 25px;
          border-radius: 4px;
        }
        
        .header a.logo 
        {
          font-size: 25px;
          font-weight: bold;
        }
        .header-right 
        {
          float: right;
        }
        html
        {
               height: 100%;
             background-image: url("images/logback.jpg");
        }
        
        body 
        {
            font-family: montserrat, arial, verdana;
        }
       
        .secstyle
        {
            width: 99%;
            margin: 10px auto;
            text-align: center;
            position: relative;
            font-size: 15px;
        }
       
        @media only screen and (min-width: 1000px) {
            
            .secstyle{
                width: 45%;
                
                margin: 50px auto;
            }
        }
        
        #msform {
            margin: 50px auto;
            text-align: center;
            position: relative;
        }
        #msform fieldset {
            background: linear-gradient(rgba(201, 229, 243, 0.9), rgba(82, 150, 231, 0.8));;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(232, 194, 207 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;
            
            
            position: relative;
        }
       
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        
        #msform input, #msform textarea , #msform radio {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
        
        }
            
       
        #msform .action-button {
            width: 80%;
            height: 40px;

            background: #ed6592;
            
            font-size: 25px;
            color: white;
            border: 1 solid white;
            border-radius: 1px;
            cursor: pointer;
            letter-spacing: 2px;
            padding: 5px 3px;
            margin: 40px 5px;
        }
        
        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }
        
        
       
        .fs-title {
            font-size: 20px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }
        .fs-subtitle {
            font-weight: normal;
            font-size: 20px;
            color: white;letter-spacing: 5px;
            margin-bottom: 20px;
        }
        a:link, a:visited {
    color: white;
}

       
        </style>
        
    </head>
    
    <body>
         <div class="header">
            <img src="images/logo.png" style="float: left;width: 30px;  height: 30px;margin-top:10px;margin-left:10px" alt="online rent Aggrement" />
            <a href="/" class="logo" style="font-size:13pt">Online Rent Aggrement</a>
        </div>
        
        <section class="secstyle">
           
            <form id="msform" action="../index.php" method="post">
             
              <fieldset>
                <h3 class="fs-subtitle">Online Rent Aggrement</h3>
                <h2 class="fs-title">Message</h2>
                <h2>
                <?php if(isset($_SESSION['message'])){ echo $_SESSION['message'];}?>
                </h2>
                <input type="submit" name="next" class="next action-button" value="Home" />
                <div style="width:100%; letter-spacing: 2px; margin-top:-25px; text-align:center; font-size: 14px; color: white; line-height: 1.5;">
                  Login Into Account <a href="login.html">Log In</a>.
                </div>
                
              </fieldset>
            </form>
        </sectoin>
    </body>
</html>

