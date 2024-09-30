<!DOCTYPE html>
    <html lang = "en-us">
        <head>
            <meta charset = "UTF-8">
            <title>First PHP Calculator</title>
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
                
                undl {
                    text-decoration: underline;
                }
                
            </style>
        </head>
        
        <body>
            <center><h1>My First Calculator! <br><!--<i>--> (PHP powered)</i></h1></center>
            
            <form action = "index.php" method = "POST">
                <input type = "text" name = "$variable1" placeholder = "Enter a Number" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type = "text" name = "$variable2" placeholder = "Enter a Number" required>
                
                        <p><Select name = "calcfunction">
                            <option>Choose A Function</option>
                            <option>+</option>
                            <option>-</option>
                            <option>x</option>
                            <option>/</option> </Select>
                            
                                <p><button name = "push">Check</button></p>
                <?php
                 
                 if (isset($_POST['push'])){
                    $var1 = $_POST['$variable1'];
                    $var2 = $_POST['$variable2'];
                    $calcfunction = $_POST['calcfunction'];
							
                     switch ($calcfunction) {
                        
                        case "Choose A Function":
                            $result = "Please, Choose a function";
                            break;
                        
                        case "+":
                            $result = $var1 + $var2;
                            echo "<b>You added $var1 and $var2. The <i>sum</i> is: </b>";
                            break;
                        
                        case "-":
                            $result = $var1 - $var2;
                            echo "<b>You subtracted $var2 from $var1. The <i>difference</i> is: </b>";
                            break;
                        
                        case "x":
                            $result = $var1 * $var2;
                            echo "<b>You multiplied $var1 by $var2. The <i>product</i> is: </b>";
                            break;
                        
                        case "/":
                            $result = $var1 / $var2;
                            echo "<b>You divided $var1 by $var2. <i>The quotient</i> is: </b>";
                            break;
                        
                     }
                     
                       echo "<b>$result.</b>";
					}
                
                 
                ?>
            </form>
        </body>
        
    </html>