<!DOCTYPE>
    <html lang = "en-us">
        <h3>Functions and Their Uses</h3>
            
            <?php

//FUNCTION 1:strtolower()
            echo "<b>1. Make every letter lower-cased:</b> <p> OUTPUT: ";
            $strModified= strtolower("<i>Power to the PEOPLE!</i> <p>");
                echo $strModified;

//FUNCTION 2:sort()
            //echo "<b>2. Using Sort:</b> <p> OUTPUT: ";
            //$items = array('Ruler', 'Apple', 'Shoe Lace');
            //$sorted= sort($items);
            //    
            //    for ($s = 0; $s < 3; $s++) {
            //        echo "<p>"."$sorted"."</p>";
                    
                }
//FUNCTION 3: explode()
            echo "<b>3. Explode (disassemble) the words
            of the sentence, <i>'what do you want?'</i></b> <p> OUTPUT: ";
            $temp = explode(' ', "what do you want?");
            print_r($temp);

//FUNCTION 4: ucfirst()
            echo "<p><b>4. Make first letter of sentence upper-cased:</b> <p> OUTPUT: ";
            $strModified1= ucfirst(strtolower("<i>pOwer to the PEOPLE</i> <p>"));
                echo $strModified1;
        
        ?>
    </html>