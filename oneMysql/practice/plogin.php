<?php session_start(); ?>

<!DOCTYPE>
<html lang = "en-us">
	<head>
	<meta charset = "UTF-8">
		<title>Login</title>
		
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
	<form action = "plogin.php" method = "POST">
		<label for = "username">Username:</label><br>
		<input type = "text" name = "username" required
			   value = ""></p>

		<label for = "password">Password:</label><br>
		<input type = "password" name = "password" required
			   value = ""></p>

		<button name = "submit">Submit</button>
	</form>

	</body>

</html>


<?php

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
     require "pconnect.php";
        
    $sql = mysqli_query($conn,
							"SELECT * FROM pregister
							WHERE username = '$username' AND password = '$password'")
							or die(mysqli_error($connect));
    $rows = array();
        
	while ($row =mysqli_fetch_array($sql)){
			$rows[] = $row;}
	
    if (count($rows) > 0) {
		header("location:pchat.php");
		$_SESSION['username'] = "$username";}
			
		else {
			echo "Terrible things are happening with your inputs.";}
}


?>