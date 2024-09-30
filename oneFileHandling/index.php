<?php

// OPEN OR CREATE
    
    //$fileone = fopen("uragen.txt", 'w') or die("failed to create file");
    //
    //$text = "
    //God is omnipotent, omniscient and omnipresent.
    //HE knows all things, owns every power, and is present everywhere.
    //Trust God with all your heart
    //";
    //
    //fwrite($fileone, $text) or die ("Failed to write on file.");
    //fclose($fileone);
    //echo "File 'uragen.txt' written successfully.";

// COPY
    
    //$fileone = fopen("uragen.txt", 'w') or die("failed to create file");
    //$content = "
    //Jamaica!
    //" ;
    //fwrite($fileone, $content) or die("failed to create file");
    //fclose($fileone);
    //echo "File 'uragen.txt' written successfully.";
    
    //$fileone = fopen("uragen.txt", 'r') or die("file does not exist or you lack permission to access it");
    //
    //$content = fgets($fileone);
    //fclose($fileone);
    //echo $content;

    //if (!copy('guragen.txt', 'turagen.txt')) echo "Copy not successful.";
    //else echo "copy successful";
    //copy('uragen.txt', 'guragen.txt') or die("could not coppy file");
    //    echo "File successfully copied.";
    
// READ FROM FILE
    $fileone = fopen("puragen.txt", 'r') or die("couldn't read from file");
    $content = fread($fileone, 7);
    fclose($fileone);
    echo $content;
    
//RENAME OR MOVE FILE        
    
    //if (!rename('uragen.txt', 'puragen.txt'))
    //    echo "could not rename file";
    //        else echo "File successfully renamed."
    
// DELETE A FILE
    
    //if (!unlink('guragen.txt')) echo "could not delete file";
    //  else echo "delete successful.";

// UPDATE A FILE

        //$fileone = fopen('puragen.txt', 'r+') or die;
        //$content = fgets($fileone);
        //
        //fseek($fileone, 0, SEEK_END);
        //fwrite($fileone,"$content") or die("could not open file");
        //fclose($fileone);
        //echo "File update succesful."
        
        //$fileone = fopen('turagen.txt', 'r+') or die("failed to update file.");
        //$content = fgets($fileone);
        //
        //fseek($fileone, 18, SEEK_CUR);
        //fwrite($fileone, "$content") or die("could not update file.");
        //fclose($fileone);
        //echo "update successful.";

        
// UPDATE A FILE (II)
    
    //$fileone = fopen('puragen.txt', 'r+') or die("failed to open file");
    //$content = fgets($fileone);
    //
    //if (flock($fileone, LOCK_EX)){
    //fseek($fileone, 0, SEEK_END);
    //fwrite($fileone, "$content") or die("could not write to file.");
    //flock($fileone, LOCK_UN);
    //}
    //fclose($fileone);
    //echo "file successfully updated."
    
// READING AN ENTIRE FILE (Using file_get_contents)
    //echo "<pre>";
    //echo file_get_contents('puragen.txt');
    //echo "</pre>";

//echo file_get_contents("http://localhost/one/oneWordCounter/");
    
?>