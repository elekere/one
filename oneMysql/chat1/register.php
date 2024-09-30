<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
	<style type="text/css">
	body{
		background-image:url("port.jpg");
	}
	a{
		text-decoration: none;
	}
	h1{
		background-color: black;
		color: white;
		text-align: center;
	}
	form{
		text-align: center;
		color: white;

	}
	form input{
		background-color: grey;
		color: white;
		border-radius: 50px;
	}
	
	button{
		background-color: grey;
		color: white;
		font-size: 40px;
	}
	.php{
		color: white;
	}
	</style>
	
</head>
<body>
	<form action="register.php" method="POST">
	First Name: <input type="text"  name="firstname" required>
	<br>Last Name: <input type="text" name="lastname" required>
	<br>User Name: <input type="text" name="username"  required><br>
	<br>Email: <input type="text" name="email"  required>
	<br>Password: <input type="password" name="password" required>
	<br>Retype-Password: <input type="password" name="retype" required>
	<br>Gender select:
	<br><input type="radio" name="sex" value="male">Male<br>
			<input type="radio" name="sex" value="female">Female<br>
			<input type="radio" name="sex" value="other">Other<br>
	<button class="submit" name="submit">Submit</button><br>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username']; 
$sex=$_POST['sex'];
$email=$_POST['email'];
$password=$_POST['password'];
$retype=$_POST['retype'];
if($password != $retype){
	echo "Password not matched!";
}else{

	require "connect.php";


	//CRUD
	//connection
	//create
	
$sql=mysqli_query($conn,"INSERT INTO register(id,firstname,lastname,username,sex,email,password)
				  VALUES('','$firstname','$lastname','$username','$sex','$email','$password')")
						or die(mysqli_error($conn));

if($sql==true){
	//echo "Query Applied!";	
	header("location:login.php");
}else{
	echo "Please fill all fields!";
	}
}
}
?>

