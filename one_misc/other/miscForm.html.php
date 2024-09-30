<?php

$fullname = "";
$email = "";
$text = "";
if (isset($_POST['fullname'])) && $_POST['fulname'] != "") {
    $fullname = $_POST['fullname'];
}
if (isset($_POST['email']) && $_POST ['email'] != "" ) {
    $email = $_POST ['email'];
}

if (isset($_POST['feedback']) && $_POST ['feedback'] != "" ) {
    $email = $_POST ['feedback'];
}

?>

<!DOCTYPE>
    <html lang = "en-us">
        
        <head>
            <title></title>
        </head>
        
        <body>
            
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div><label for="firstname">Your First Name</label><br/>
                    <input type="text" name="firstname" id="firstname" value = "<php echo $fullna"></div>
                    
                    <div>
                    <label for="lastname">Your Last Name</label><br/>
                    <input type="text" name="lastname" id="lastname"></div>
                    
                    <div>
                    <label for="lastname"> Your Email Address</label><br/>
                    <input type="email" name="email" id="email" value = ""></div
                    
                    <div>
                    <label for="password0">Your Password</label><br/>
                    <input type="password" name="password0" id="password0"></div>
                    
                    <div>
                    <label for="password1">Retype your Password</label><br/>
                    <input type="password" name="password1" id="password1"></div>
                    
                    <div>
                        <p><button name="submit">Submit</button></div></p>
            
        </body>
        
    </html>