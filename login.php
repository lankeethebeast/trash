<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    include('process/processing.php');
    ?>
    <center>
        <fieldset>
            <h2>PLEASE LOGIN</h2>
            <form action="login.php" method="POST">
                Username: 
                <input type="text" name="uname" placeholder="ENTER USERNAME" required>
                <br>
                <br>
                Password: 
                <input type="password" name="pword" placeholder="ENTER PASSWORD" required> 
                <br>
                <br>
                <button name="login">Login</button><span> No account? </span> <a href="register.php">sign up</a>

            </form>
        </fieldset>
    </center>
</body>
</html>