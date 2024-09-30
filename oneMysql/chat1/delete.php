<?php
$conn=mysqli_connect("localhost","root","","chat");
if($conn==true){
	echo "connected!";
}else{
	echo "Not connected!";
}

$sql="DELETE FROM users";
 if(mysqli_query($conn,$sql)){
 header("location:chat.php");
 //	echo "Record Deleted successfully";
 }else{
 	echo "Not successful!";
 }

?>