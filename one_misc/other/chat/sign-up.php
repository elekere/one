<?php
/*
id
username
password
date
*/
 echo"<html>
 <head>
 <title> Sign-Up </title>
 <link rel='stylesheet' href='style.css' type='text/css'/>
 </head>
 <br><br>
<form action='sign-up.php' method='post'>
<input type='text' name='username' placeholder='enter username...'>
<input type='password' name='password' placeholder='enter password'>
<input type='submit' name='submit_form' value='Sign-Up' class='SP'>
</form>
</html>";

//include_once(""); OR include_once'';
include_once("includes/dbh.php");
if(isset($_POST["submit_form"])){
$username = $_POST["username"];
$username = preg_match("[^a-zA-Z0-9!@#$%^*()///?]","",$username);
$password = $_POST["password"];
$username = preg_match("[^a-zA-Z0-9!@#$%^*()///?]","",$password);
$sql = mysqli_query($conn,"INSERT INTO `users_tb`(`id`,`username`,`password`,`date`) VALUES('', '$username', '$password', now())");
if($sql){
echo $username. " " . $password;
}else{
echo"unable to sign-up";
}
}

?>