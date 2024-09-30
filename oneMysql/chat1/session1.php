<?php
session_start();
//session start

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
<?php
//Set session variables
$_SESSION['name']="Kene";
$_SESSION['password']="12345";
echo "session set";
?>
</body>
</html>