<?php 

    require("common.php"); 
     
    //check if form is filled out
    if(!empty($_POST)) 
    { 
        //check if user has entered username, pwd, email
        if(empty($_POST['username'])){ 
            die("Please enter a username."); 
        } 

        if(empty($_POST['password'])){ 
            die("Please enter a password."); 
        } 
         
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
            die("Invalid E-Mail Address"); 
        } 
         
        //check if username isn't taken
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
         
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        //array of next row 
        $row = $stmt->fetch();
        
        
        //username already in use, don't let user proceed 
        if($row){ 
            die("This username is already in use"); 
        } 
         
        //do same for email
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
         
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        $row = $stmt->fetch(); 
         
        if($row){ 
            die("This email address is already registered"); 
        } 
         
        //adding new user into db 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
         
        //generate salt for pwd
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
         
        //hash pwd with salt
        $password = hash('sha256', $_POST['password'] . $salt); 
         
        //will hash pwd 65536 more times!
        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 
         
        //inserting into table 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
         
        try{ 
            // Execute the query to create the user 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        //rdirect user to log in page
        header("Location: login.php"); 
        die("Redirecting to login.php"); 
    } 
     
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
						<fieldset>
							<form class="form-horizontal" action='' method="POST">
							  <fieldset>
							    <div id="legend">
							      <legend class="">Register here</legend>
							    </div>
							    <div class="control-group">
							      <!-- username -->
							      <label class="control-label"  for="username">Username</label>
							      <div class="controls">
							        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
							      </div>
							    </div>
							 
							    <div class="control-group">
							      <!-- email -->
							      <label class="control-label" for="email">E-mail</label>
							      <div class="controls">
							        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
							  
							      </div>
							    </div>
							 
							    <div class="control-group">
							      <!-- pw -->
							      <label class="control-label" for="password">Password</label>
							      <div class="controls">
							        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
							        
							      </div>
							    </div>
							 
							    <br>
							    							 
							    <div class="control-group">
							      <div class="controls">
							        <button class="btn btn-success">Register</button>
							      </div>
							    </div>
							  </fieldset>
							</form>
						</fieldset>
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
