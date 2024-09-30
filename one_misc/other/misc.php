 <?php
                 
                 if (isset($_POST['push'])){
                    $baseCurr = $_POST['baseCurr'];
                    $targetCurr = $_POST['targetCurr'];
                    $amount = $_POST['amount'];
                    
                        if ($baseCurr == 'Naira' && $targetCurr == 'US Dollars')
                        {
                            $rate = $amount/300;
                            echo $rate;
                            
                        }
                        
                        elseif {
                            echo "Yaayi!";
                        }
                 }
                    