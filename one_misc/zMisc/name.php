<?php

$name = $_GET['name'];

echo 'Welcome, dear '.$name.
	htmlspecialchars($name, ENT_QUOTES, 'UTF-8').'!';
?>