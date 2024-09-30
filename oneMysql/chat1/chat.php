<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
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
<h1>Chat Example</h1>
<form action="chat.php" method="POST">
<p>Chatbox<input type="text" name="one"></p>
<p><?php echo $_SESSION["username"];?><input type="text" name="two"></p>
<button type="submit" name="submit">chat</button><p>
<button type="button"><a href="delete.php">Delete</a></button>
<button type="button"><a href="signout.php">Log off</a></button>
</p>
</form>
<div class="php">	
	
<?php
/*
create a simple chat
that inserts into the database
and outputs data to the browser
you can also delete the data
*/

if(isset($_POST['submit'])){
	$one=$_POST['one'];
	$two=$_POST['two'];



require "connect.php";
//inserting into the database
$sql=mysqli_query($conn,"INSERT INTO users(id,userone,usertwo)VALUES('','$one','$two')");
if($sql==true){
	//echo "Query Applied!"."<p>";
}else{
	//echo "Not Applied!";
}

//selecting from database

$sql="SELECT * FROM users;";
$result=mysqli_query($conn,$sql);
$resultCheck =mysqli_num_rows($result);	

if ($resultCheck > 0) {

	while($row= mysqli_fetch_assoc($result))  {
		# code...

 		echo "Chatbox:". $row['userone']."<br>";


		echo $_SESSION["username"].":".	$row['usertwo']."<br>";

	}
}

}

?>
</form>
</div>
</body>
</html>