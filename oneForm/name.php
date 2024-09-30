<?php

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];

echo 'You\'re welcome to our website, '.
htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').' '.
htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8').'!';
