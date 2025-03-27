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
}else if($check = 0){
    $check1 = 0;

    $sql1 = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result1 = $conn1->query($sql1);
    while($row1 = $result1->fetch_assoc())

    if($check1 = 1){
        echo "<script>";
        echo "alert('admin Login success.');";
        echo "window.location.replace('../../admin/dashboard.php')";
        echo "</script>";
    }
}else{
    echo "<script>";
    echo "alert('Error!');";
    echo "window.location.replace('../../pages/login.php');";
    echo "</script>";
}



?>
