<?php 

    //connect to db and start session 
    require("common.php"); 
     
    if(empty($_SESSION['user'])){  
        header("Location: login.php"); 
 
        die("Redirecting to login.php"); 
    } 
      
     $var_value = $_SESSION['online'];

    $query = " 
        SELECT  
            username,
            email
        FROM users
		WHERE online=$var_value AND active=1
    "; 
     
    try{  
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex){ 
        die("Failed to run query: " . $ex->getMessage()); 
    } 
         
    //return all found rows into an array using fetchAll 
    $rows = $stmt->fetchAll(); 
?> 
<head>

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
	
	<div class="jumbotron">
		
		<h1>Students present in the session</h1> 
<table> 
    <tr> 
        
        <th>Username</th> 
        <th>E-Mail Address</th> 
    </tr> 
    <?php foreach($rows as $row): ?> 
        <tr> 
            <td><?php echo $row['id']; ?></td> <!-- htmlentities is not needed here because $row['id'] is always an integer --> 
            <td><?php echo htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td> 
            <td><?php echo htmlentities($row['email'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr> 
    <?php endforeach; ?> 
</table> 
<a href='javascript:history.back(1);'>Back</a>
		</div>
		</div>
</body>
