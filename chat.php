<?php

include('connect/connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        include('connect/connection.php');

        $query= "SELECT * FROM post";
        $stmt=$conn -> prepare($query);
        $stmt->execute();
        $result= $stmt ->fetchALL();

        if ($result && $stmt -> rowCount() > 0) {  
            echo $msg;
        }
        else {
            echo"no message yet";
        }
        ?>

    </div>

    
        <center>
        <div>
            <form action="chat.php" method="POST">
            
                <textarea name=",msg" placeholder="Type your messages here..."></textarea>
                <input type="submit" value="send">
            </form>

        </div>
        </center>
    

</body>
</html>