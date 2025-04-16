<?php

//DB Conn
include '../../library/db_conn.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$check = 0;

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

if($check = 1){
    echo "<script>";
    echo "alert('admin login succesfuly!');";
    echo "window.location.replace('../../admin/orders.php')";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('username or password inccorect!');";
    echo "window.location.replace('../../admin/login.php')";
    echo "</script>";
}


?>