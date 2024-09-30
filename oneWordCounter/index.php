<?php    
        $wordcount = '';

    if (isset($_POST['submit'])) {
        
        $comment = $_POST['comment'];
    
// I COUNT THE NUMBER OF WORDS IN A USERS COMMENT.
        //$words = explode(' ', "$comment"); $wordcount = "Word Count: ".sizeof($words); 
       $wordcount = str_word_count($comment);
}
    include "body.html.php";

?>