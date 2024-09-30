<?php 
	// USING SELECT
try {
	
	$pdo = new PDO('mysql:host=localhost; dbname=practice; charset=utf8' 'usercontact');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = 'SELECT `username` FROM `testresult`';
	$result = $pdo->query($sql);	
}
catch (PDOException $e) {
	$output = 'Unable to connect to the database server: '.
	getMessage().' in '.
	getFile().': '.
	getLine();
}

?>