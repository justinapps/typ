<?php

	 if(empty($_SESSION['user'])) 
    { 

	echo
		'<link href="dist/css/bootstrap.css" rel="stylesheet">
	    <link href="navbar-fixed-top.css" rel="stylesheet">
	    
		<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
				
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				  <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> QDCU</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="support.php">Support</a></li>
					
					
					 <li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">Lab <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="Lab25.php">LG25</a></li>
							<li><a href="Lab26.php">LG26</a></li>
							<li><a href="Lab104.php">L104</a></li>
							<li><a href="Lab114.php">L114</a></li>
							<li><a href="Lab128.php">L128</a></li>					</ul>
					 </li>
				  </ul>
				  
				  <ul class="nav navbar-nav navbar-right">
			       
				       <li><a href="register.php">Register</a></li>
				       <li><a href="login.php">Login</a></li> 
				   
			          
			        </li>
        		  </ul>
				  
			
			  </div>
			</nav>
		
';}
else
{
		echo
		'<link href="dist/css/bootstrap.css" rel="stylesheet">
	    <link href="navbar-fixed-top.css" rel="stylesheet">
	    
		<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
				
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				  <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> QDCU</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="support.php">Support</a></li>
					
					
					 <li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">Lab <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="Lab25.php">LG25</a></li>
							<li><a href="Lab26.php">LG26</a></li>
							<li><a href="Lab104.php">L104</a></li>
							<li><a href="Lab114.php">L114</a></li>
							<li><a href="Lab128.php">L128</a></li>					</ul>
					 </li>
				  </ul>
				  
				  <ul class="nav navbar-nav navbar-right">
			       
				       <li><a href="logout.php">Logout</a></li>
				      
				   
			          
			        </li>
        		  </ul>
				  
			
			  </div>
			</nav>
		
';
}
?>