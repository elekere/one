<?php 

$title = 'My Joke Database';

ob_start();


// include 'layout.html.php';

include __DIR__ . '/ojTemplates/home.html.php';


$output = ob_get_clean();


include __DIR__ . '/ojTemplates/layout.html.php';

?>