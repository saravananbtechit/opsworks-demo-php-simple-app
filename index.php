<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App demo for ops works addign new comments</h1>
                <h2>Congratulations!</h2>
                <p>Your PHP application is now running on the host &ldquo;<?php echo gethostname(); ?>&rdquo; in your own dedicated environment in the AWS&nbsp;Cloud.</p>
                <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
<?php
echo "saravanan";

$servername = "opsworkstestrdsinstance.cj5abbh2tkav.us-west-2.rds.amazonaws.com";
$username = "itcopsworks";
$password = "itcopsworks";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "RDS Database Connected successfully";

echo phpinfo();

?> 
