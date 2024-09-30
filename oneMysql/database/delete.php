<?php
require('db.php');
$id = $_REQUEST['id'];

$sql = "DELETE FROM users WHERE id= '$id'";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("Location: index.php");
?>