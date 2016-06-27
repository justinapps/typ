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
	<div id="wrap">
	
		<!-- include the navbar -->
		<?php include 'navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="well well-sm">
						<fieldset>
						<h2>What is QDCU?</h2>
						<hr>
						<p>QDCU is a platform allowing students to efficiently request assistance from lab tutors.</p>
						<p>Once a students requests help, they are placed onto an organised queue and wait for their turn to be helped.</p>
						<p>Tutors are able to see a layout of the lab where the session is taking place and are informed which computer the student to be assisted is at.</p>
						<p>To find out more about the development of QueueDCU, read <a href="blogs.computing.dcu.ie/wordpress/tutorqueuing">Sean's</a> and <a href="blogs.computing.dcu.ie/wordpress/qdcu">Justin's</a> blogs.</p>
						<p>You can read our <a href="tech_document.pdf">Technical manual here</a>.</p>
						</fieldset>
					</div>
				</div>
			</div>

		</div> <!-- /container -->
		<div id="push"></div>
		</div>
		 <div id="footer">
		  <div class="container">
			<p class="muted credit">3rd year project of Sean Carroll and Justinas Ulevicius.</p>
		  </div>
		</div>
	</div>

    <!-- Bootstrap js, placed at the botton to make page load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<script src="custom.js"></script>

  </body>
</html>
