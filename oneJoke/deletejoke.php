<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=one; charset=utf8', 'oneuser');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'DELETE FROM `joke` WHERE `id` = :id';
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    
    header('location: jokes.php');

}

catch(PDOException $e) {
    
	$title = 'An error occured';
	$output = 'Database error: '.$e->getMessage().' in '.$e->getFile().': on line: '.$e->getLine();
    
}
include 'layout.html.php';
?>