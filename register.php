<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register </title>
</head>
<body>
    <?php
    include('process/processing.php');
    ?>
    <center>
        <fieldset>
            <h2>PLEASE LOGIN</h2>
            <form action="register.php" method="POST">
                Firstname: 
                <input type="text" name="fname" placeholder="ENTER FIRSTNAME" required>
                <br>
                <br>
                Lastname: 
                <input type="text" name="lname" placeholder="ENTER LASTNAME" required>
                <br>
                <br>
                Username: 
                <input type="text" name="uname" placeholder="ENTER USERNAME" required>
                <br>
                <br> 
                Password: 
                <input type="password" name="pword" placeholder="ENTER PASSWORD" required> 
                <br>
                <br>
                <button name="register">Sign Up</button> <a href="login.php"> Back to Login</a>

            </form>
        </fieldset>
    </center>
</body>
</html>