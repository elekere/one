<!doctype html>
    <html lang= "us-eng">
        <head>
            <meta charset="UTF-8">
            <title>FirstCurrencyConverter</title>
            <style>
                
                .form {
                    /*margin: 10px 20px 30px 40px;*/
                    margin-left: 340px;
                    text-align: center;
                    border-style: solid;
                    border-width:3px 3px 3px 3px;
                    height: 250px;
                    width: 300px;
                    padding: 10px; 10px; 10px; 10px;
                    background-color: lightblue;
                    color: lightyellow;
                    }
                
                body {
                    background-color: cyan;
                }
                
                
            </style>
            
        <body>
                <center><h1>My First Currency Converter</h1></center>
            <div class="form">
                <form action = "index.php" method= "POST">
                    <input type= "text" name= "amount" placeholder= "Type Local Amount">
                    </p>
                        <select name= "operator">
                            <option>Select Currency</option>
                            <option>Dollars</option>
                            <option>Pounds</option>
                            <option>Francs </option>
                            <option>Euros</option>
                    </select>
                    </p>
                    <button name= "submit" >Convert</button>
                   <!-- <br>Enter an amount and Choose currency-->

                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $amount= $_POST ['amount']; 
                    $operator= $_POST ['operator'];
                        
                    echo "</p>Local amount is $amount. You have: ";
                    
                    switch ($operator) {
                        case "select currency":
                            echo "Select a currency";
                            //ss;
                                            
                            case "Pounds":
                            $rate=$amount /600;
                            echo "$amount " ."$rate Pounds";
                            break;
                        
                            case "Euros":
                                $rate=$amount /1000;
                                echo "$rate Euros";
                                break;
                        
                            case "Dollars":
                                $rate= $amount /300;
                                echo "$rate Dollars";
                                break;
                            
                            case "Francs":
                                $rate= $amount/700;
                                echo "$rate Francs";
                                break;
                        }
                }
                ?>
             </div>
            </body>
        </head>
    </html>