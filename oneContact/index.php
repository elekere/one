<!DOCTYPE html>
<html lang = "en-us">

<form> 

<label for = "username">Username</label> <br>
<input type = "text" name = "username"></p>

<label for = "score">Score</label> <br>
<input type = "text" name = "score"></p>

<button name = "submit">Submit</button>

</form>

</html>

<?php

try {
	$pdo = new PDO('mysql:host=localhost; dbname=practice; charset=utf8', 'usercontact');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// $output = 'Database connection successful.';		
		// $sql = 'CREATE TABLE testresult (
		// id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		// username TEXT,
		// score INT
		// ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB';
		
		// $pdo->exec($sql);
		// $output = 'testresult successfully created.';
	
	
	$sql = 'INSERT INTO `testresult` (`username`, `score`) VALUES ("okechukwu", "67")';
	
	$affectedRows = $pdo->exec($sql);
	
	$output = 'Inserted '.$affectedRows.' rows.';
}

	// catch (PDOException $e) {
	// $output = 'Unable to connect to the database server '.
	// $e->getMessage(). ' in '. 
	// $e->getFile().': '.$e->getLine();
	// }
	
	catch (PDOException $e) {
		$output = 'Database error: '.
		$e->getMessage().' in '.
		$e->getFile(). ': '.
		$e->getLine();	
	}
	include "output.html.php";
 ?>