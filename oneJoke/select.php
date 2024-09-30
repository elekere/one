<?php

//SELECT
	try {
		$pdo = new PDO('mysql:host=localhost; dbname=one; charset=utf8', 'oneuser');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= 'SELECT `joketext` FROM `joke` ';
		$result= $pdo->query($sql);
		
		foreach ($result as $row) {
			$jokes[] = $row['joketext'];
		}
	}
	
	catch (PDOException $e) {
			$output = 'Database error: '.$e->getMessage().' in '.$e->getFile(). ' on line'. $e->getLine(); 
	}
	
	include 'jokes.html.php';


?>