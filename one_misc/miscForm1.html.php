<?php

$fullname = "";
$email = "";
$feedback = "";
if (isset($_POST['fullname'])    && $_POST['fullname'] != "") {
    $fullname = $_POST['fullname'];
}
if (isset($_POST['email']) && $_POST ['email'] != "" ) {
    $email = $_POST ['email'];
}

if (isset($_POST['feedback']) && $_POST ['feedback'] != "" ) {
    $feedback = $_POST ['feedback'];
}

?>

<!DOCTYPE>
    <html lang = "en-us">
        
        <head>
            <title></title>
        </head>
        
        <body>
            <h1>Misc Form</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div><label for="fullname">Your First Name</label><br/>
                    <input type="text" name="fullname" id="fullname" value = "<?php echo $fullname ?>"></div>
                    
                    <div>
                    <label for="email">Your Email</label><br/>
                    <input type="email" name="email" id="email" value = "<?php echo $email; ?>"</div>
                    
                    <div>
                    <label for="feedback">Your Feedback</label><br/>
                    <textarea rows="5" cols = "50" name = "feedback"><?php echo $feedback; ?></textarea></div>
                    
                    <div>
                        <p><button name="submit">Submit</button></p></div>
        </body>
        
    </html>
    