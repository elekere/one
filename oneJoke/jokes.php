<?php
	try {
		include_once __DIR__ . '/ojIncludes/DatabaseConnection.php';
		include_once __DIR__ . '/ojIncludes/DatabaseFunctions.php';
		
		$sql = 'SELECT `joke`.`id`, `joketext`, `name`, `email` FROM `joke` INNER JOIN `author` ON `authorid` = `author`.`id`';
		$jokes = $pdo->query($sql);
		
		$title = 'Joke List';
		
		$totalJokes = totalJokes($pdo);
		
		ob_start();
		
		include __DIR__ . '/ojTemplates/jokes.html.php';
		
		$output = ob_clean();
	}
	
	catch (PDOException $e)
	
	{
		
		$title = 'An error occured';
		
		$output = 'Database error: '.$e->getMessage().'in '.$e->getFile().'on '.$e->getLine();
	}
	
	include __DIR__ .'/ojTemplates/layout.html.php';
?>		