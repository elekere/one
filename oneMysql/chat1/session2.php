 	<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session 2</title>
</head>
<body>
<?php
echo "Name is ".$_SESSION["name"]."<br>";
echo "password is ".$_SESSION["password"];
?>
</body>
</html>