<?php 

try {
$pdo = new PDO('mysql:host=localhost; dbname=one; charset=utf8', 'oneuser');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'CREATE TABLE joke (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	joketext TEXT,
	jokedate DATE NOT NULL
	) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
	
	$pdo->exec($sql);
	
	$output = 'Joke has been successfully created';
	
	}
	
		catch (PDOexception $e) {
			$output = 'Database error: '.
			$e->getMessage(). ' in ' .
			$e->getFile(). ': at line '.
			$e->getLine();
		}
		
		include 'output.html.php';
?>