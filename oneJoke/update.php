<?php
//UPDATE

try {
	$mypdo = new PDO('mysql: host=localhost; dbname=one; charset=utf8', 'oneuser');
	$mypdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$thesql = 'UPDATE `joke` SET `jokedate`="2018-09-21"
				WHERE `joketext` LIKE "%icheku%"';
	
	$affectedRows = $mypdo->exec($thesql);
	$output = 'Updated '. $affectedRows.' rows';
		
	} 
	
catch (PDOException $e) {
	$output = 'Database error: '.$e->getMessage().' in '.$e->getFile(). ' on line'. $e->getLine();
	
}

include 'output.html.php';

?>