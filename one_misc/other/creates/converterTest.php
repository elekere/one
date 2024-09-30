<!doctype html>
    <html lang= "us-eng">
        <head>
            <meta charset="UTF-8">
            <title>FirstCurrencyConverter</title>
            <style>
                
                .form {
                    text-align: center;
                    border-style:solid;
                    border-width:1px;
                    background :lightblue;
                    color :darkred;
                    font-family :Arial;
                    font-size :12px;
                    text-align :justify;
                    /*display :table-cell;*/
                    width :300px;
                    height: 300px;
                    padding :10px 20px 30px 40px; }
                
                body {
                    background-color: cyan;
                }
                
                
            </style>
            
        <body>
                <center><h1>My First Currency Converter</h1></center>
            <div class="form">
                <form action = "index.php" method= "POST">
                    <input type= "text" name= "amount" placeholder= "Type Local Amount">
                    <select name= "operator">
                        <option>Select Currency</option>
                        <option>Dollars</option>
                        <option>Pounds</option>
                        <option>Francs </option>
                        <option>Euros</option>
                    </select>
                    <br>
                    <br><button name= "submit" >Convert</button>
                   <!-- <br>Enter an amount and Choose currency-->

                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $amount= $_POST ['amount'];
                    $operator= $_POST ['operator'];
                        
                    echo "</p>You have: ";
                    
                    switch ($operator) {
                        case "select currency":
                            echo "Select a currency";
                            //ss;
                                            
                            case "Pounds":
                            $rate=$amount /600;
                            echo "$rate Pounds";
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