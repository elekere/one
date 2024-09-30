<?php

include 'DatabaseConnection.php';

function totalJokes($pdo) {
	
	$query = $pdo->prepare('SELECT COUNT(*) FROM `joke`');
	$query->execute();
	
	$row = $query->fetch();
	return $row[0];
	
	echo totalJokes($pdo);
}

function getJoke($pdo, $id) {
	
	$query = $pdo->prepare('SELECT FROM `joke` WHERE `id` = :id');
	$query->execute();
	return $query->fetch();
}

function query ($pdo, $sql, $parameters = []) {
	
	$query = $pdo->prepare($sql);
	
	
	// foreach ($parameters as $name => $value) {
		
		// $qeury->bindValue($name, $value);
	// }
	
		// $query->execute();
		// return $query;
	
	$query = $pdo->prepare($sql);
	$query->execute(parameters);
	return $query;
}


?>