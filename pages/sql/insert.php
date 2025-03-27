<?php

//DB connn
include '../../library/db_conn.php';

echo $username = $_REQUEST["username"];
echo $email = $_REQUEST["email"];
echo $phonenumber = $_REQUEST["phonenumber"];
echo $password = $_REQUEST["password"];

$sql = "INSERT INTO users(username, email, phonenumber, password) VALUES('$username', '$email', '$phonenumber', '$password')";
if($conn->query($sql) === TRUE){
    echo "<script>";
    echo "alert('Registration success. Please login!');";
    echo "window.location.replace('../../pages/login.php')";
    echo "</script>";

}else{
    echo "<script>";
    echo "alert('Error!');";
    echo "window.location.replace('../../pages/signup.php');";
    echo "</script>";
}

?>