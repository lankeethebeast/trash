<?php

if(isset($_POST['register'])){
    include_once('connect/connection.php');

    $f_name= $_POST['fname'];
    $l_name= $_POST['lname'];
    $u_name= $_POST['uname'];
    $p_word= $_POST['pword'];

  
  

    $new_record = array(

        "fname"=> $f_name,
        "lname"=> $l_name,
        "uname"=> $u_name,
        "pword"=> $p_word
        
       
    );


    try{
        $query=sprintf("INSERT INTO %s(%s) values(%s)",
        "users",
        implode(",", array_keys($new_record)),
        ":".implode(",:", array_keys($new_record)));

        $stmt=$conn -> prepare($query);
        $stmt->execute($new_record);

        if ($stmt){
            echo 
            "<p>REGISTRATION SUCCESSFULL</p>";
            // sleep(2.4);
            header('location: login.php');
        }
        else {
            echo
            "<p>REGISTRATION UNSUCCESSFUL</p>";
        }
    }   
    catch(PDOExeption $e){
        echo $e->getMessage();
    }
}
       
        
    

if(isset($_POST['login'])){

    include('connect/connection.php');

    
    $u_name= $_POST['uname'];
    $p_word= $_POST['pword'];
    $_SESSION['user'] = $p_word;

    

    $query = "SELECT * FROM users WHERE uname = '{$u_name}' and pword = '{$p_word}' ";
    $stmt=$conn -> prepare($query);
    $stmt->execute();
    $result= $stmt ->fetchALL();


    if ($result && $stmt -> rowCount() > 0) {  
        
        echo"you're logged in";
        $_SESSION['name']=$_POST['uname'];
        header('location: chat.php');

        
 
    }
    else{
    echo "Invalid Login Details";
    }

}

?>
