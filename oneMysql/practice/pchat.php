<?php session_start(); ?>

<!DOCTYPE html>
    <html lang = "en-us">
        <head>
            <meta charset = "UTF-8">
            <title>Chat</title>
            <style>
                body {background-image: url("Penguins.jpg");}
                
                form { 
				resize: both;
				overflow: auto;
				background-color: lightblue;
                text-align: center; font-weight: bold;
                height: 300px; width: 300px;
                border-style: solid; border-width: 7px; border-color: lightgreen;
                padding: 10px 10px 10px 10px;   
                margin: 30px 0 0 350px
				}
                
                form input {
                    background-color: lightgreen;
                }
            </style>
        </head>
        
         <body>
               <form action = "pchat.php" method = "POST">
                <h4>CHAT</h4>
                <p>PC: <br><input type = "text" name = "user0"></p>
                <p><?php echo $_SESSION["username"].": ";?><br></r><input type = "text" name = "user1"></p>
                    <button name = "submit">Send</button></p>
                    <a href = "pdelete.php">Delete</a>
                    <a href = "psignout.php">Signout</a>
                    </p>
                     
    
<?php
        if  (isset($_POST['submit'])) {
            $user0 = $_POST['user0'];
            $user1 = $_POST['user1'];
            
            require "pconnect.php";
            
            $sql = mysqli_query($conn,"INSERT INTO users(id, user0, user1) VALUES('','$user0','$user1')");
            
            if ($sql == true) {
                
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                
                    if ($resultcheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "PC: ". $row['user0']."<br>";
                            echo $_SESSION["username"]. ": ". $row['user1']."<br>";
                        }
                    }
            }
        }
?>


</form>  
        </body>
    </html>