<!DOCTYPE>
    <html lang = "en=us">
        
    <head>
        <meta charset = "UTF-8">
        <title>Welcome</title>
        <style>
            body {background-color: rgb(000,250,150);}
            
            form {text-align: center;}
            
            
            label {text-align: justify;}
        </style>
    </head>
    
    <body>
        
    <form action = "" method = "POST">
        
        <h1>Welcome!</h1>
                
        <div><label for="regnum">Your Registration Number</label><br/>
        <input type="text" name="regnum" id="regnum" placeholder = "E.g: 'ABC/1234'"
               value = "<?php if(isset($_POST['regnum'])) echo $_POST['regnum']; ?>" required></div>
        
        <div>
        <p><button name="submit">Submit</button></p></div>
            
    </form>
    
</body>
    
</html>