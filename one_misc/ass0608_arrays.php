<?php

//$kabala = array (
//        '0' => array (
//            '0' => "Abia",
//            '1' => "Anambra",
//            '2' => "Adamawa",
//            '3' => "Akwa Ibom",
//            '4' => "Anambra",
//        ),
        
//        '1' => array(
//            '0' => "Borno",
//            '1' => "Benue",
//            '2' => "Benin",
//        ),
//        
//        '2' => array(
//            '0' => "Cross River",
//            '1' => "Califonia",
//            '2' => "Candice",
//        ),
//    
//);
//
//echo $kabala[2][2];

//$states = array (
//    '0' => array(
//        '0' => "Anambra",
//        '1' => "Bayelsa",
//        '2' => "Cross River"
//    ),
//    
//    '1' => array(
//        '0' => "Edo",
//        '1' => "Imo",
//        '2' => "Jigawa"
//        
//    ),
//);
//echo $states[1][1];

$somenames = array (
    
    'surnames' => array(
        '0' => "Mba",
        '1' => "Okafor",
        '2' => "Ani"
        ),
    
    'firstnames' => array(
        '0' => "Eloka",
        '1' => "Peace",
        '2' => "Ugo"
        ),
);

$sayname = $somenames['surnames']['2'];
echo "<center><strong>$sayname</strong></center>";

?>