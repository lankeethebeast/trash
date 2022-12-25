<?php
include('connect/connection.php');
$msg=$_POST['msg'];
$name=$_SESSION['name'];

$query="INSERT into post('msg','name')values('$msg','$name') ";
$stmt=$conn -> prepare($query);
$stmt->execute();
$result= $stmt ->fetchALL();

header('location:chat.php')
?>