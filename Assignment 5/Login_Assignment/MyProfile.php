<?php
	require('Checklogin.php');


	if(!is_loggedin()){
		header('location: index.php');
	}

	$auth_user = $_SESSION['auth_user'];
	$name =$auth_user['Name'];


?>


  <link rel="stylesheet" href="style.css">

<h1>Welcome <?php echo $name ?> To your Profile</h1>
<br>
<br>

<a href="logout.php">Click here to logout!</a>
