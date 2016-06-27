<?php
	 require("common.php");
?>


<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>qDCU - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
	
	<!-- footer css file -->
	<link href="footer.css" rel="stylesheet">

  </head>

  <body>
	<img alt="full screen background image" src="bg_img.jpg" id="full-screen-background-image" /> 
  
	<div id="wrap">
		<?php include 'navbar.php';?>

		<div class="container">

		  <div class="jumbotron">
			<h1>Welcome to QDCU</h1>
			<p>DCU's lab session tool for tutors and students.</p>
			<p>Click the sign in button above to join a session.</p>
			<p>
			  <a class="btn btn-lg btn-primary" href="about.html" role="button">Find out more &raquo;</a>
			</p>
		  </div>

		</div> <!-- container -->
		<div id="push"></div>
		</div>
		 <div id="footer">
		  <div class="container">
			<p class="muted credit">3rd year project of Sean Carroll and Justinas Ulevicius.</p>
		  </div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<script src="custom.js"></script>

  </body>
</html>
