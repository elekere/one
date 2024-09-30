 <?php

     $rate = "";
    
     
    if (isset($_POST["push"])){
      $baseCurr = $_POST["baseCurr"];
      $targetCurr = $_POST["targetCurr"];
      $amount = $_POST["amount"];
      
                    // NAIRA
 while ($amount >= 0 ) {
        
               if ($baseCurr == "Naira" && $targetCurr == "Dollar") {
                  $rate = $amount/350;
                   $currency = "Dollar";
                  }
        
                 elseif ($baseCurr == "Naira" && $targetCurr == "Euro") {
                  $rate = $amount/500;
                  $currency = "Euro";
                  }
                  
                   elseif ($baseCurr == "Naira" && $targetCurr == "Pound") {
                   $rate = $amount/400;
                   $currency = "Pound";                 
                               }
                  
                   elseif ($baseCurr == "Naira" && $targetCurr == "Yein") {
                    $rate = $amount/250;
                    $currency = "Yein";
                   }
                                
                      // CEDI
                      elseif ($baseCurr == "Cedi" && $targetCurr == "Dollar") {
                        $rate = $amount/250;
                        $currency = "Dollar";
                        
                       }
                       
                       elseif ($baseCurr == "Cedi" && $targetCurr == "Euro") {
                         $rate = $amount/300;
                         $currency = "Euro";                 
                           }
                       
                       elseif ($baseCurr == "Cedi" && $targetCurr == "Pound") {
                            $rate = $amount/150;
                            $currency = "Pound";
                              }
                              
                       elseif ($baseCurr == "Cedi" && $targetCurr == "Yein") {
                                 $rate = $amount/250;
                                 $currency = "Yein";
                                  }
                                      
                            // RAND
                            elseif ($baseCurr == "Rand" && $targetCurr == "Dollar") {
                               $rate = $amount/150;
                               $currency = "Dollar";
                              }
                              
                               elseif ($baseCurr == "Rand" && $targetCurr == "Euro") {
                                 $rate = $amount/100;
                                 $currency = "Euro";                 
                                  }
                              
                              elseif ($baseCurr == "Rand" && $targetCurr == "Pound") {
                                   $rate = $amount/250;
                                   $currency = "Pound";
                                     }
                                     
                              elseif ($baseCurr == "Rand" && $targetCurr == "Yein") {
                                        $rate = $amount/170;
                                        $currency = "Yein";
                                         }               
                                
                                else {
                                 $rate = "0.00";
                                }
                                break;
                                $rate = "wrong format!";
                                continue;
                  }
        }
    
    include "body.html.php";
?>