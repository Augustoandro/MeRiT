<?php 
include('sec_headers.php');
?>
            
<!DOCTYPE html>
<html>
      <head>
            <title>Media Tracker</title>
            <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="jquery.min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="styles.css" type="text/css">                              
      </head>
      <body onload="ld()">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style type="text/css">
            h1{font-size:75px;font-weight:700;margin-top:180px}#boxstyle{width:50%;margin-top:45px;height:40px;border-radius:17px;box-shadow:0 0 5px grey}#btnstyle{margin-top:2px;height:35px}
            </style>
            <div class="row">
                  <div class="container-fluid">
                        <center><h1>MeRiT (Media Rights Tracking)</h1></center>
                        <div>
                              <center>
                                    <p>This platform has been developed for copyright owners to track whether their content has been leaked online. Just upload your content to our servers or connect your AWS S3 bucket with our platform.</p>
                                    <p>Please proceed to register yourself on this platform or login to access your dashboard where you can see exactly where your content has been leaked.</p>
                              </center>
                        </div>
                        <div>
                              <center>
                                    <a href="loginpage.php"><button class="sa">Login</button></a>
                                    <a href="signuppage.php"><button class="sa">Register</button></a>
                              </center>                              
                        </div>
                  </div>
            </div>
      </body>
</html>