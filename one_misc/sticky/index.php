<?php

include "body.html.php";

if (isset($_POST['submit'])) {

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$password0 = $_POST['password0'];
 $password1 = $_POST['password1'];
    
if ( (empty ($lastName)) || (empty($firstName)) ) {
$response = "Update Your name! First and Last names are needed.";
} 
elseif ($password0 != $password1) {
$response = "Password mismatch! Enter password again.";
} elseif (strlen($password0) <= 5 && strlen($password1) <= 5) {
$response = "Password is less than 6";
}else {
$response ="You're welcome to our website, ".
htmlspecialchars($firstName, ENT_QUOTES, "UTF-8")." ".
htmlspecialchars($lastName, ENT_QUOTES, "UTF-8")."! ";
}
echo "<center><strong>$response</strong></center>";
}?>