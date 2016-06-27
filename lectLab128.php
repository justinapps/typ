<?php 

    //connect to database and start session 
    require("common.php"); 
     
    //check if user is logged in, if not prevent entry
    if(empty($_SESSION['user'])){ 
        header("Location: login.php");  
        die("Redirecting to login.php"); 
    } 
    
    if(substr($_SESSION['user']['email'],-7)!=='@dcu.ie'){
	    header("Location: index.html"); 
        die("Redirecting to login.php");   
    }
    
    $_SESSION['online'] = 128;

?> 
<p class="text-center">Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></p><br /> 


<doctype
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

	<?php
		
		
		//when form is clicked
		if(isset($_POST['Next']))
		{
		
				//database variables
				$dbhost = 'localhost:3036';
				$dbuser = 'justinas_user';
				$dbpass = 'lfc123456';					
				//connect to database
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				
				if(! $conn )
				{
					die('Could not connect: ' . mysql_error());
				}	
					
					
				mysql_select_db('justinas_qdb');
				//get ip that was entered first
				$sql = 'SELECT * FROM `Lab128` ORDER BY Time LIMIT 1';
				$result = mysql_query("SELECT * FROM `Lab128` ORDER BY Time LIMIT 1");
				//checck variable
				if (mysql_fetch_row($result)) 
				{
					$myVar = mysql_result(mysql_query($sql, $conn),0) or die(mysql_error());
					$result = (string)$myVar;
				
					$search = mysql_query('SELECT COUNT(1) FROM Lab128');
					$length = mysql_result($search, 0, 0);
			
					
				
					
					
					 
					$sql ="DELETE FROM `justinas_qdb`.`Lab128` WHERE `Lab128`.`lab128` ='$result'";
					  
					$retval = mysql_query( $sql, $conn );
					if(! $retval )
					{
					  die('Could not delete data: ' . mysql_error());
					}
					
					
				}
				//$length=0;
				mysql_close($conn);
				
				
					
		
		}
				
				
			
		
		if(isset($_POST['end']))
		{
			$dbhost = 'localhost:3036';
				$dbuser = 'justinas_user';
				$dbpass = 'lfc123456';					
				//connect to database
			
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				mysql_select_db('justinas_qdb');
				if(! $conn )
				{
					die('Could not connect: ' . mysql_error());
				}	
				
				$result = mysql_query("SELECT * FROM `Lab128` ORDER BY Time LIMIT 1");
				//checck variable
				if (mysql_fetch_row($result)) 
				{
				
					
					mysql_query("DELETE FROM `justinas_qdb`.`Lab128`");
				}
		}	
	?>
<div id="hideMsg">
Time left For Student  <span class="minutes" ></span>  <span class="seconds"></span> 
</div>
<div id="Students">
Amount of Students in the Queue <?php echo $length?>
</div>
<div id="Total time">
Total time after present Student <?php if($length>0){echo ($length-1)*3;} else {echo "0";}?>
</div>
</div>
	


	

	<div class ="container text-center ">
	<button  id="Attending" type="submit" class="btn btn-lg btn-primary">Attending</button>
	
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="st">
			
	<input  id="Next" name="Next" type="submit"  class="btn btn-lg btn-primary" value="Next Student"/>		
	<input  id="end" name="end" type="submit"  class="btn btn-lg btn-primary" value="Finish Lab"/>	
	</form>
			<button  id="Attendance" onClick="location.href='view.php'"  type="submit" class="btn btn-lg btn-primary">Attendance List</button>
		</div>

	
		<div id="push"></div>
		
		 <div id="footer">
		  <div class="container">
			<p class="muted credit">3rd year project by Sean Carroll and Justinas Ulevicius.</p>
		  </div>
		</div>
		
		<script type="text/javascript">
		//javascript to get the ip php variable taken from the database
		var data = <?php echo json_encode($result)?>;
	
			
		//turn location of ip to red to inform lecturer of the position 
		
			
	document.getElementById(data).src="redPc.jpg";
   
   </script>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<script src="custom.js"></script>
	 
  </body>
</html>