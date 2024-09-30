<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
		height: 100px;
	}
	form input{
		background-color: black;
		color: white;
		font-size: 20px;
	}
	form input
	button{
		background-color: black;
		color: white;
		font-size: 20px;
	}
	.php{
		color: white;
	}
	</style>
</head>
<body>
<form action="login.php" method="POST">
Username<input type="text" name="username"><p>
Password<input type="text" name="password"></p>
<button class=submit name="submit">Submit</button>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

require "connect.php";
$sql=mysqli_query($conn,"SELECT * FROM register WHERE username='$username' AND password='$password'")
or die(mysqli_error($connect));
$rows = array();

while($row = mysqli_fetch_array($sql)){

	$rows[] = $row;
}	


if (count($rows)  > 0) {
	header("location:chat.php");
	$_SESSION['username']="$username";

  }else{
  	echo "Password or Username incorrect";
   
}

}

?>