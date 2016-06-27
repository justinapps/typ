<?php 

    require("common.php"); 
		$dbhost = 'localhost:3036';
			$dbuser = 'justinas_user';
			$dbpass = 'lfc123456';
			
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn){
				die('Could not connect: ' . mysql_error());
			}
			//$row=$_SESSION['user'];
			    

	mysql_query("UPDATE `justinas_qdb`.`users` SET `active` = '0' WHERE `users`.`id` =".$_SESSION['user']['id']);
	
	 mysql_query("UPDATE `justinas_qdb`.`users` SET `online` = '1' WHERE `users`.`id` =".$_SESSION['user']['id']);
    //remove user details from session
    unset($_SESSION['user']); 
     //echo "<script type='text/javascript'>alert('You have successfully signed out')</script>";
    //redirect to the login page 
    header("Location: index.php"); 
    die("Redirecting to: index.php");
    