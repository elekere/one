<?php
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting(E_ALL);
require('db.php');



?>


<!DOCTYPE html>
<html>
<head>
	<title>database</title>

</head>
<body>
	<form method="POST" action="">
		<input type="text" name="name" placeholder="name"> <br><br>
		<input type="text" name="username" placeholder="username"><br><br>
		<input type="text" name="phone" placeholder="phone"><br><br>
		<input type="text" name="address" placeholder="address"><br><br>
		<input type="submit" name="submit" value="Submit">
		
	</form>


<?php
if(isset($_POST['submit'])){
	//die(var_dump($_POST));
	$name 		= $_POST['name'];
	$username 	= $_POST['username'];
	$phone   	= $_POST['phone'];
	$address 	= $_POST['address'];
	$trn   		= date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO users(name,username,phone,address,trn) VALUES('$name','$username','$phone','$address','$trn')";
	$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

	if($query){
		echo "inserted successfully";
		header("Location: index.php");

	}else{
		echo "failed";
	}


}




/*
	INSERT 
	SELECT
	DELETE
	UPDATE
*/


?>

</body>
</html>