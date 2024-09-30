<?php

$pdo = new PDO('mysql:host=localhost; dbname=one; charset=utf8', 'oneuser');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
?>