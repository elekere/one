<?php       
     
     $baseNum = 100;
     
     if (isset($_POST['submit'])) {
        $userNum = $_POST['usernum'];
        
         if ($userNum >  $baseNum){
            
            echo "Number is greater than 100";
            }
            else if ($userNum == $baseNum) {
                echo "Number is same as 100.";
            }
                else {
                echo "Number is less than 100.";
                }
     }
                ?>