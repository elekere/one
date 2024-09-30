<?php

echo '<b>Q1. <br>ANS: MULTIDIMENSIONAL ARRAY</b>';
              echo "<p>";
    //(a) A multidimensional array of 9 Nigerian states 
$states = array(
              array('Lagos', 'Anambra', 'Enugu'),
              array('Rivers', 'Ebonyi', 'Abia'),
              array('Imo', 'Taraba', 'Bayelsa')
              );

             for($row = 0; $row < 3; $row++) {
                for($column = 0; $column < 3; $column++) {
                    echo '|'.$states[$row][$column];
                    
                }
                echo '| <p>';
             }
            
    //(b)To output Taraba, echo $states[1][2];
                          echo '$states[1][2] equals '.$states[1][2];
                 ?>