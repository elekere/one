<!DOCTYPE>
    <html lang = "en-us">
        
<head>
    <title>Sticky Form</title>
    
    <style>
        form {
            margin: 0 0 0 430px ;
        }
        
        label {
            text-align: left;
        }
    </style>
    
</head>

<style></style>
        
<body>
    <center><h1>Sticky Form</h1></center>
    <form action = "" method = "POST">
                
        <div><label for="firstname">Your First Name</label><br/>
        <input type="text" name="firstname" id="firstname"
               value = "<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></div>
        
        <div><label for="lastname">Your Last Name</label><br/>
        <input type="text" name="lastname" id="lastname"
               value = "<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></div>
        
        <div>
        <label for="lastname"> Your Email Address</label><br/>
        <input type="email" name="email" id="email"
               value = "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></div>
        
        <div>
        <label for="password0">Your Password</label><br/>
        <input type="password" name="password0" id="password0"
               value = "<?php if(isset($_POST['password0'])) echo $_POST['password0']; ?>"></div>
        
        <div>
        <label for="password1">Retype your Password</label><br/>
        <input type="password" name="password1" id="password1"
               value = "<?php if(isset($_POST['password1'])) echo $_POST['password1']; ?>"></div>
        
        <div>
        <label for="remark">Your Comment</label><br/>
        <textarea rows="5" cols = "16" name = "remark">
                        <?php if(isset($_POST['remark'])) echo $_POST['remark']; ?></textarea></div>
        
        <div>
        <p><button name="submit">Submit</button></p></div>
            
        </form>
    </body>
</html>
