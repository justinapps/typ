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
		<?php include 'navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="well well-sm">
						<form class="form-horizontal" method="post">
							<fieldset>
								<legend class="text-center header">Contact us</legend>
								


								<div class="form-group" role="form" method="post" action="index.php">
									<span class="col-md-1 col-md-offset-2 text-center"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span></span>
									<div class="col-md-8">
										<input id="fname" name="name" type="text" placeholder="First name" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
									<div class="col-md-8">
										<input id="email" name="email" type="text" placeholder="E-mail" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
									<div class="col-md-8">
										<textarea class="form-control" id="message" name="message" placeholder="Enter your massage here." rows="7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary btn-lg">Send</button>
									</div>
								</div>
							</fieldset>
						</form>

					</div>
				</div>
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
