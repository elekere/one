<!DOCTYPE>
<html
    <head>
        <meta charset = "UTF-8">
    </head>
    
    <body>
        <form action = "<?php $_SERVER['PHP_SELF']; ?>" method = "POST">
                    <div><label for="name">Your Name</label><br/>
                    <input type="text" name="name" id="name" value = "<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></div>
                    
                    <div>
                    <label for="lastname"> Your Email Address</label><br/>
                    <input type="email" name="email" id="email" value = "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></div>
                    
                    <div>
                    <label for="feedback">Your Feedback</label><br/>
                    <textarea rows="5" cols = "50" name = "feedback"><?php if(isset($_POST['feedback'])) echo $_POST['feedback']; ?></textarea></div>
                    
                    <div>
                        <p><button name="submit">Submit</button></p></div>
            </form>
    </body>
</html>