<?php
include "body.html.php";

if (isset($_POST["firstname"])) {
        // VARIABLES THAT INVOKE  "NAMEs" FROM HTML
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $day = $_POST["birthday"];
        $birthyear = $_POST["birthyear"];
        $birthmonth = $_POST["birthmonth"];	
        $refyear = $_POST["refyear"];
        // $age = $refyear - $birthyear;
        
        if (empty($lname) && empty($fname)) {
            $response = "No Name yet!";
            echo "<center><strong>$response</strong></center>";
            exit();}
        
        if (empty($fname)) {
            $response = "No First Name yet!";
            echo "<center><strong>$response</strong></center>";
            exit();}
            
        if (empty($lname)) {
            $response = "No Last Name yet!";
            echo "<center><strong>$response</strong></center>";
            exit();}
            
            if ( (empty($birthyear)) || (!is_numeric($birthyear)) ) {
            $response = "Update or Correct your birth year!";
            echo "<center><strong>$response</strong></center>";
            exit();}
            
            if ( (empty($refyear)) || (!is_numeric($refyear)) ) {
            $response = "Update or Correct your reference year!";
            echo "<center><strong>$response</strong></center>";
            exit();}
            
            if ( (empty($birthyear)) || (empty($refyear)) ) {
            $response = "No birthyear or reference year yet!";
            echo "<center><strong>$response</strong></center>";
            exit();}
        
        else {
		$age = $refyear - $birthyear;
        $response = "Welcome, ".
        htmlspecialchars($fname, ENT_QUOTES, "UTF-8")." ".
        htmlspecialchars($lname, ENT_QUOTES, "UTF-8").
        ".</br>". "You were born on $birthmonth $day, $birthyear. <br/>
            As at year $refyear, you are $age year(s) old.";
                echo "<center><strong>$response</strong></center>";}
}
    
    
?>