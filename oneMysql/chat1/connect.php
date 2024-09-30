<?php
//connecting to the database
$conn=mysqli_connect("localhost","root","","chat1");
if($conn==true){
//	echo "Connected!";
}else{
	echo "Something went wrong.";
}
?>