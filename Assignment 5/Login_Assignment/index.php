<?php
require('Checklogin.php');

if (is_loggedin()){
	header('location: MyProfile.php');

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	
</head>
<body>
	
<div class="main">  	
		
	<form action="login.php" method="post" autocomplete="off">

<label for="chk" >Login Page </label>
		<label for="">Email</label>
		<input type="email" name="user_email">
		<br>
		
		<label for="">Password</label>
		<input type="password" name="user_password">
		<br>

		<button type="submit">Login</button>

</div>
	</form>


</body>
</html>