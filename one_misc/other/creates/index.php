<?php
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];

echo 'You\'re welcome to our website, '.
    htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').''.
    htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8').'!';
?>