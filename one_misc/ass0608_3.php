<!DOCTYPE>
    <html lang = "en-us">
        <meta charset = "UTF-8">
            <head>
                <title>Assignment</title>
                    
                    
            </head>
            
            <body>
                 <h4>Game!</h4>
                 <h5>Enter any Number</h5>
                 <form action = "ass0608_3.php" method= "POST">
                    <input type= "text" name= "usernum" placeholder= "Type A Number">
                    
                     </p>
                    <button name= "submit" >submit</button>
                 </form>
    
    
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
        </body>
</html>