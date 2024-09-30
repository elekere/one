<!DOCTYPE>
<html lang = "en-us">
	<head>
	<meta charset = "UTF-8">
		<title>Register</title>
		
		<style>
			 body {background-image: url("Penguins.jpg");}
                
                form {  background-color: lightblue;
                text-align: center; font-weight: bold;
                height: 300px; width: 300px;
                border-style: solid; border-width: 7px; border-color: lightgreen;
                padding: 10px 10px 10px 10px;   
                margin: 30px 0 0 350px}
                
                form input {
                    background-color: lightgreen;
                }
		</style>
			
		</head>
	
<body>
	<form action = "pregister.php" method = "POST">
		<label for = "username">Username</label><br>
		<input type = "text" name = "username" required></p>

		<label for = "password">Password</label><br>
		<input type = "password" name = "password" required></p>
		
		<label for = "state">State of Origin</label><br>
		<input type = "text" name = "state" required></p>

		<button name = "submit">Submit</button>
	</form>

	</body>

</html>


<?php 

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$state = $_POST['state'];
		
		if(empty($username)){
			echo "enter username";}
		
		else {
		require "pconnect.php";

	$sql = mysqli_query($conn,"INSERT INTO pregister(id,username,password,state)
		 		  VALUES('','$username','$password','$state')")or die(mysqli_error($conn));
	
	if ($sql == true) {
			//echo "do something";}
			header("location:plogin.php");}
	else {
		echo "Are all fields rightly filled?";}
}

	}

?>