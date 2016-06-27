<?php 

    //start sesh and connect to db 
    require("common.php"); 
     
    //redisplay name if log in unsuccessful 
    $submitted_username = ''; 
    
    //check if fields have been filled out
    if(!empty($_POST)){
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email
				  
            FROM users 
            WHERE 
                username = :username 
        "; 
         
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            // Execute the query against the database 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){  
            die("Failed to run query: " . $ex->getMessage()); 
        }
         
        $login_ok = false; 
        
        $row = $stmt->fetch(); 
        if($row){
        
            //hash submitted pwd and compare to the hashed one in db 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){ 
                $check_password = hash('sha256', $check_password . $row['salt']); 
            } 
             
            if($check_password === $row['password']){ 
                //set to true if log in okay 
                $login_ok = true;
               
            } 
        } 
        
		
        if($login_ok){ 
			$dbhost = 'localhost:3036';
			$dbuser = 'justinas_user';
			$dbpass = 'lfc123456';
			
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ){
				die('Could not connect: ' . mysql_error());
			}
			
			 mysql_query("UPDATE `justinas_qdb`.`users` SET `active` = '1' WHERE `users`.`id` =".$row['id']);
			
            unset($row['salt']); 
            unset($row['password']); 
			
			
		
            $_SESSION['user'] = $row; 
            
            //redirect logged in user to index page
           header("Location: index.php"); 
            die("Redirecting to: index.php"); 
        } 
        else{ 
            //if log in unsuccessful...
            print("Login Failed."); 
             
            //show username, so they just need to reenter the pwd
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
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
							      <legend class="">Please log-in</legend>
							    </div>
							    <div class="control-group">
							      <!-- username -->
							      <label class="control-label"  for="username">Username</label>
							      <div class="controls">
							        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
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
							        <button id="login" type="submit" class="btn btn-success">Login</button>
							      </div>
							    </div>
							  </fieldset>
							</form>
						</fieldset>
					</div>
				</div>
			</div>

		</div> <!-- /container -->
		<div id="push"></div>
		</div>
		 <div id="footer">
		  <div class="container">
			<p class="muted credit">3rd year project by Sean Carroll and Justinas Ulevicius.</p>
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
