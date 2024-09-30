

<!DOCTYPE html>
    <html lang = "en-us">
        <head>
            <meta charset = "UTF-8">
            <title>Currency Converter</title>
            <style>
                body {
                    color: red;
                    background-color: lightblue;
                }
                
                h1 {
                    font-style: normal;
                    margin-top: -11px;
                }
                
                form {
                   
                    background-color: yellow;
                    height: 250px;
                    width: 400px;
                    text-align: center;
                    border-style: solid;
                    margin: 0px 0px 0px 300px;
                    padding: 10px 10px 10px 10px;
                }
                
                .result {
                    text-align: center;
                    border-style: solid;
                    border-color: red;
                    border-width: thin;
                    width: 350px;
                    height: 70px;
                    margin: 0px 0px 0px 25px;
                }
            
                
             </style>
        </head>
        
        <body>
            
            <center><h1>Multi Currency Converter</i></h1></center>
            
                <form action = "" method = "POST">
                
                        <p><select name = "baseCurr"></p>
                            <option>Select Base Currency</option>
                            <option>Naira</option>
                            <option>Cedi</option>
                            <option>Rand</option> </select>
                        
                         <p><select name = "targetCurr" ></p>
                            <option>Select Target Currency</option>
                            <option>Dollar</option>
                            <option>Euro</option>
                            <option>Pound</option>
                           </select>
                         
                          <p><input type = "text" name = "amount" placeholder = "Enter an Amount" required></p>
                            
                                <p><button name = "push">Check</button></p>
                                
                                <div class = "result">
                                <?php
                                //echo "&nbsp;
                                //                    $amount "."<strong>$baseCurr</strong>".
                                //      "&nbsp; =
                                //                    $rate "." <strong>$currency</strong>";
                               echo $rate;
                                ?></div>
               
            </form>
        </body>
        
    </html>