<!DOCTYPE>
    <html lang = "us-en">
        <head>
            <meta charset = "UTF-8">
            <title></title>
        </head>   
    
    <form action = "" method = "POST">
        <label for = "usernum">Enter A Number</label>
        <input type = "text" name = "usernum"
                        value = "<?php if(isset($_POST['usernum'])) echo $_POST['usernum'] ?>">
        
                        <button name ="submit">Go</button>
	</form>
            
       
    </html>


<?php

$tellanswer = 0;

if (isset($_POST['submit'])) {

$usernum = $_POST['usernum'];

$answer = array('1' => "A", '2' => "D", '3' => "D", '4' => "D", '5' => "C" );

switch () {
    
    case 1:
        if ($usernum = $answer['1']); {
        $tellanswer = $tellanswer + 10;
        }
        break;
   
}
        echo $tellanswer;
        }
?>