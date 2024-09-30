

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<?php
require('db.php');
$id = $_REQUEST['id'];
$sql = "SELECT * FROM users WHERE id= $id";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row   = mysqli_fetch_assoc($result);
	
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$phone    = $_POST['phone'];
	$address   = $_POST['address'];
	$date      = $_POST['trn'];

	$sql = "UPDATE users SET name= '$name', username= '$username', phone= '$phone', address= '$address', trn= '$date'";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("Location: index.php");

}


?>

<form method="POST" action=""> 
		<input type="text" name="name" placeholder="name" value="<?php echo $row['name']?>"> <br><br>
		<input type="text" name="username" placeholder="username" value="<?php echo $row['username']?>"><br><br>
		<input type="text" name="phone" placeholder="phone" value="<?php echo $row['phone']?>"><br><br>
		<input type="text" name="address" placeholder="address" value="<?php echo $row['address']?>"><br><br>
		<input type="text" name="trn" placeholder="date" value="<?php echo $row['trn']?>"><br><br>

		<input type="submit" name="update" value="Update">
		
	</form>

</body>
</html>