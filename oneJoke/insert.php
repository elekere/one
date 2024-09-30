<?php 

//FEWRWERWE

try {
	$pdo = new PDO('mysql:host=localhost; dbname=one; charset=utf8', 'oneuser');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = 'INSERT INTO `joke` (`joketext`, `jokedate`) 
			VALUES ("Ọkụkọ tugide ntụ ọ tụrụ icheku ọkụ", "2018-09-17")';
			
			$pdo->exec($sql);
			$output = 'item successfully inserted.';
	
} catch (PDOexception $e) {
	$output = 'Database error: '.$e->getMessage(). ' in ' .$e->getFile(). ': on line '.$e->getLine();
}

include 'output.html.php';
?>