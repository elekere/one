<?php

require "pconnect.php";

    if ($conn == true){
        $sql = "DELETE FROM users";
            if(mysqli_query($conn,$sql)){
                header("location: pchat.php");
            } else {
                echo "Delete not successful.";
            }
            
        
    }

?>