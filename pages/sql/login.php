<?php

//DB connn
include '../../library/db_conn.php';

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];


$check = 0;

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

if($check = 1){
    echo "<script>";
    echo "alert('Login success.');";
    echo "window.location.replace('../../')";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Error!');";
    echo "window.location.replace('../signup.php');";
    echo "</script>";
}



?>
