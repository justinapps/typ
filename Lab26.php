<?php 
	
	//connect to db and start session
    require("common.php"); 
     
    //check if user is logged in, deny access if not
    if(empty($_SESSION['user'])){ 
        header("Location: login.php");     
        die("Redirecting to login.php"); 
    } 
    
    if(substr($_SESSION['user']['email'],-7)=='@dcu.ie'){
	     header("Location: lectLab26.php"); 

        die("Redirecting to login.php");
    }
	
	   $dbhost = 'localhost:3036';
	   $dbuser = 'justinas_user';
	   $dbpass = 'lfc123456';
			
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ){
			die('Could not connect: ' . mysql_error());
		}
		
       mysql_query("UPDATE `justinas_qdb`.`users` SET `online` = '26' WHERE `users`.`id` =".$_SESSION['user']['id']);

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
	<link href="custom.css" rel="stylesheet">
	
  </head>

  <body>
	<div id="wrap">
		

	
		<?php include 'navbar.php';?>

	
		<div class="container">
	
	<div class="jumbotron">
		
		
  <div class="row">
   <div class="col-md-1 ">
  </div>
   <div class="col-md-1 ">
    <img class="img-responsive" src="pc.jpg" id="136.206.18.51" />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.50"  />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.49"  />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.48" />
    <img class="img-responsive" src="pc.jpg" id="136.206.18.47" />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.46"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.45"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.44"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.43"/>
	
 </div>
 <div class="col-md-1 ">
  </div>
 <div class="col-md-1 ">
     <img class="img-responsive" src="pc.jpg" id="136.206.18.42"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.41"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.40"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.39"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.18.38" />
    <img class="img-responsive" src="pc.jpg"id="136.206.18.37" />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.36"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.35"  />
 </div>
 <div class="col-md-1">
    <img class="img-responsive" src="pc.jpg" id="136.206.18.27"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.28"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.29"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.30"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.18.31" />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.32"/>
	<img class="img-responsive" src="pc.jpg"id="136.206.18.33" />
	<img class="img-responsive" src="pc.jpg"id="136.206.18.34" />
 </div>
<div class="col-md-1 ">
  </div>
  
 <div class="col-md-1">
 	<img class="img-responsive" src="pc.jpg"id="136.206.18.26" />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.25"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.24"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.23"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.22"/>
    <img class="img-responsive" src="pc.jpg" id="136.206.18.21"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.20"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.19"/>
 </div>
 <div class="col-md-1">
 	<img class="img-responsive" src="pc.jpg"id="136.206.18.11" />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.12"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.13"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.14"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.15"/>
    <img class="img-responsive" src="pc.jpg" id="136.206.18.16"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.17"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.18"/>
 </div>
 <div class="col-md-1 ">
  </div>
 <div class="col-md-1">
   <img class="img-responsive" src="pc.jpg" id="136.206.18.10"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.9,"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.8,"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.7,"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.18.6," />
	<img class="img-responsive" src="pc.jpg"id="136.206.18.5," />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.4,"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.3,"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.2,"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.1,"/>
 </div>
 
</div>
		
         
  
		</div>
		
	</div>
	
<?php


	
if (isset($_POST['NumRows']))
{
		
		//setup database connection
		$dbhost = 'localhost:3036';
		$dbuser = 'justinas_user';
		$dbpass = 'lfc123456';
		$ip="{$_POST['NumRows']}";
		
		//connect to database
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db('justinas_qdb');
		//connect does not work print error
		if(! $conn )
		{
			die('Could not connect: ' . mysql_error());
		}
		
		
		//set email variable
		$email=$_SESSION['user']['email'];
		//insert ip ,timestamp and email
		$sql="INSERT INTO `justinas_qdb`.`Lab26` (`lab26`,`Time`,`email`) VALUES  ('$ip',NOW(),'$email')";
	

			
			$retval = mysql_query( $sql, $conn );
			
			
			
	mysql_close($conn);
		
   
}

	//when user clicks leave button
	if(isset($_POST['leave']))
	{
		//setup connectino to database
		$dbhost = 'localhost:3036';
		$dbuser = 'justinas_user';
		$dbpass = 'lfc123456';
		//connect to database
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		$email=$_SESSION['user']['email'];
		//delete entry by comparing email
		mysql_query("DELETE FROM `justinas_qdb`.`Lab26` WHERE `Lab26`.`email` ='$email'");
		mysql_close($conn);
	}
?>
		
		<div class ="container text-center ">
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="tester">
		
		<input  id="Enter" name="Enter" type="submit"  class="btn btn-lg btn-primary" value="Enter Queue"/>
		<input 	name="NumRows" id="NumRows" type="hidden" value=""/>
		
		
		</form>
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="tester">
		<input  id="Leave" name="leave" type="submit"  class="btn btn-lg btn-primary" value="Leave Queue"/>
			</form>
	</div>

		
		

		<div id="push"></div>
		
		 <div id="footer">
		  <div class="container">
			<p class="muted credit">3rd year project by Sean Carroll and Justinas Ulevicius.</p>
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