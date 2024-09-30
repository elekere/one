<?php
            
         /* the symbol, "==" is the equality operator. 
            if $a==$b, it implies that $a has 
            the same value as $b.*/

//      CODE:
        $a = "123";
        $b = "+123";
        echo "Equality operator:<br> ";
        	if ($a == $b) echo "confam!";
                echo "<p>";

             /* the symbol '===' is the identity operator. 
             It is used in comparing the sameness in value of two variables. 
             However, unlike the equality operator, camparison with '==='
             returns TRUE only if the compared values are 
             strictly of same type. 

             For example,
             If $a = "100"; and $b = "+100", $a === $b will return FALSE:
             PHP seeing the 'three equals signs' refuses to convert the 
             compared string values to numbers as it would do when '=='
             is used.
             */
    //      CODE:
            $s = "123";
            $t = "+123";
            echo "Identity operator:<br> ";
                 if ($s === $t) echo "okay!";
                 else echo "no way!";
