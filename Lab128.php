<?php 
	
	//connect to db and start session 
    require("common.php"); 
     
    //check if user logged in or not, deny access if not 
    if(empty($_SESSION['user'])){  
        header("Location: login.php");  
        die("Redirecting to login.php"); 
    } 
    
    if(substr($_SESSION['user']['email'],-7)=='@dcu.ie'){
	    header("Location: lectLab128.php"); 
        die("Redirecting to login.php");
    }
	
	   $dbhost = 'localhost:3036';
	   $dbuser = 'justinas_user';
	   $dbpass = 'lfc123456';
			
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ){
			die('Could not connect: ' . mysql_error());
		}
		
       mysql_query("UPDATE `justinas_qdb`.`users` SET `online` = '128' WHERE `users`.`id` =".$_SESSION['user']['id']);

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
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.7,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.6,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.5,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.4,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.3," />
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.2,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.1,"  />
 </div>
 <div class="col-md-1 ">
  </div>
 <div class="col-md-1">
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.8,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.9,"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.10"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.11"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.12" />
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.13"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.14" />
 </div> 
 <div class="col-md-1">
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.21"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.20"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.19"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.18"/>
    <img alt="full screen background image" src="pc.jpg" id="136.206.10.17"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.16"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.15"/>
 </div>
 <div class="col-md-1 ">
  </div>
  
 <div class="col-md-1">
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.22" />
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.23"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.24"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.25"/>
    <img alt="full screen background image" src="pc.jpg" id="136.206.10.26"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.27"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.28"/>
 </div>
 
 <div class="col-md-1">
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.35"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.34"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.33"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.32"/>
    <img alt="full screen background image" src="pc.jpg" id="136.206.10.31" />
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.30" />
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.29"/>
 </div>
 <div class="col-md-1 ">
  </div>
  <div class="col-md-1">
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.36"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.37"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.38"/>
   <img alt="full screen background image" src="pc.jpg" id="136.206.10.39"/>
    <img alt="full screen background image" src="pc.jpg" id="136.206.10.40"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.41"/>
	<img alt="full screen background image" src="pc.jpg" id="136.206.10.42"/>
 </div>
</div>

	</div>

	

</div>
	
	<?php


	
if (isset($_POST['NumRows']))
{
		
		//setup database connectino
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
		$sql="INSERT INTO `justinas_qdb`.`Lab128` (`lab128`,`Time`,`email`) VALUES  ('$ip',NOW(),'$email')";
	

			
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
		mysql_query("DELETE FROM `justinas_qdb`.`Lab128` WHERE `Lab128`.`email` ='$email'");
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