<!DOCTYPE>
<html lang = "en=us">
        
<head>
    <meta charset = "UTF-8">
    <title>Word Count</title>
    <style>
        body {background-image: url("Penguins.jpg"); color: white;}
        
        form {  background-color: lightblue;
                text-align: center; font-weight: bold;
                height: 300px; width: 300px;
                border-style: solid; border-width: 7px;
                padding: 10px 10px 10px 10px;   
                margin: 30px 0 0 350px
                
            }
            
         h1 {
                    text-align: center;
                }
        
        label {text-align: justify;}
    </style>
</head>
    
<body>
        
    <form action = "" method = "POST">
        
        <h1>I Count Words!</h1>
        
            <textarea type="text"
            name = "comment"
            id = "comment"
            placeholder = "What's on your mind?" required><?php if(isset($_POST['comment']))
                                                      echo $_POST['comment']; ?></textarea>
        </div>
            
            <div>
                <p><button name="submit">Check</button></p>
            </div>
        
                <div>
                    <p><?php echo $wordcount; ?></p>
                </div>
            
    </form>
    
</body>
    
</html>