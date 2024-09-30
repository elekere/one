<!doctype html>
    <html lang= "us-en">
        <head>
            <meta charset = "UTF-8">
        <title>form with validations</title>

        <style type="text/css">
            
        body{
            background-color: lightblue;
        }
        
        form {
            margin: 0 0 0 430px;
        }
        
        label {
            font-style: normal;
        }
        
        </style>

       </head>  

            <body>
                
                <center><h1>Form With Validations</h1></center>
                    <form action="index.php" method="post">
                    <div><label for="firstname">Your First Name</label><br/>
                    <input type="text" name="firstname" id="firstname" value = ""></div>
                    
                    
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

                </form>
            </body>
    </html>