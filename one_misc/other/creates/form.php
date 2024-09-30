<?php

echo "Hello!</p>";

     $firstname= $_GET['firstname'];
     $lastname= $_GET['lastname'];
     
     echo 'You are welcome ' .
    htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') .
    htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . !;
    
        //$good="127";
        //$food="238";
        //echo "<p>Simply $good" . " " . "$food";
?>