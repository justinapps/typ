<?php 
	
	//connect to db and start session
    require("common.php"); 
     
    //check if user is logged in, if not, deny access 
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
		if(! $conn )
		{
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
    <img class="img-responsive" src="pc.jpg" id="136.206.18.9," />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.8,"  />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.7,"  />
   <img class="img-responsive" src="pc.jpg" id="136.206.18.6," />
    <img class="img-responsive" src="pc.jpg" id="136.206.18.5," />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.4,"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.3,"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.2,"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.1,"/>
	
 </div>
 <div class="col-md-1 ">
  </div>
 <div class="col-md-1 ">
     <img class="img-responsive" src="pc.jpg" id="136.206.10."/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.11"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.12"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.18.13"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.18.14" />
    <img class="img-responsive" src="pc.jpg"id="136.206.18.15" />
	<img class="img-responsive" src="pc.jpg" id="136.206.18.16"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.18.17"  />
 </div>
 <div class="col-md-1">
    <img class="img-responsive" src="pc.jpg" id="136.206.17.25"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.24"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.23"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.22"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.17.21" />
	<img class="img-responsive" src="pc.jpg" id="136.206.17.20"/>
	<img class="img-responsive" src="pc.jpg"id="136.206.17.19" />
	<img class="img-responsive" src="pc.jpg"id="136.206.17.18" />
 </div>
<div class="col-md-1 ">
  </div>
  
 <div class="col-md-1">
 	<img class="img-responsive" src="pc.jpg"id="136.206.17.26" />
   <img class="img-responsive" src="pc.jpg" id="136.206.17.27"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.28"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.29"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.30"/>
    <img class="img-responsive" src="pc.jpg" id="136.206.17.31"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.17.32"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.17.33"/>
 </div>
 <div class="col-md-1">
 	<img class="img-responsive" src="pc.jpg"id="136.206.17.41" />
   <img class="img-responsive" src="pc.jpg" id="136.206.17.40"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.39"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.38"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.37"/>
    <img class="img-responsive" src="pc.jpg" id="136.206.17.36"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.17.35"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.17.34"/>
 </div>
 <div class="col-md-1 ">
  </div>
 <div class="col-md-1">
   <img class="img-responsive" src="pc.jpg" id="136.206.17.49"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.48"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.47"/>
   <img class="img-responsive" src="pc.jpg" id="136.206.17.46"/>
    <img class="img-responsive" src="pc.jpg"id="136.206.17.45" />
	<img class="img-responsive" src="pc.jpg"id="136.206.17.44" />
	<img class="img-responsive" src="pc.jpg" id="136.206.17.43"/>
	<img class="img-responsive" src="pc.jpg" id="136.206.17.42"/>
 </div>
 
</div>
		
         
  
		</div>
		

	
<?php


	
if (isset($_POST['NumRows']))
{
		//connect to database
		
		
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
		//insert inot
		
		
		$email=$_SESSION['user']['email'];
		
		$sql="INSERT INTO `justinas_qdb`.`Lab128` (`lab128`,`Time`,`email`) VALUES  ('$ip',NOW(),'$email')";
	

		
	
	
		
			mysql_select_db('justinas_qdb');
			$retval = mysql_query( $sql, $conn );
			if(!$retval)
			{
			  die('Could not enter data: ' . mysql_error());
			}
			
		
		mysql_close($conn);
		
   
}

	//when user clicks leave button
	if(isset($_POST['leave']))
	{
		//setup connectino to database
		$dbhost = 'localhost:3036';
		$dbuser = 'justinas_user';
		$dbpass = 'lfc123456';
		
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