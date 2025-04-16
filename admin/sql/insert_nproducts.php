<?php

//DB Conn
include '../../library/db_conn.php';

// New Arrival Products
$N_product_name = $_REQUEST['N_product_name'];
$N_product_description = $_REQUEST['N_product_description'];
$N_product_price = $_REQUEST['N_product_price'];
$N_product_img1 = $_REQUEST['N_product_img1'];
$N_product_img2 = $_REQUEST['N_product_img2'];
$N_product_img3 = $_REQUEST['N_product_img3'];
$N_product_img4 = $_REQUEST['N_product_img4'];
$N_product_img5 = $_REQUEST['N_product_img5'];


$sql = "INSERT INTO new_arrival_products(N_product_name, N_product_description, N_product_price, N_product_img1, N_product_img2, N_product_img3, N_product_img4, N_product_img5) VALUES('$N_product_name', '$N_product_description', '$N_product_price', '$N_product_img1', '$N_product_img2', '$N_product_img3', '$N_product_img4', '$N_product_img5')";
if($conn->query($sql) === TRUE){
    echo "<script>";
    echo "alert('Product Added Successfully')";
    echo "window.location.replace('../../admin/addproducts.php');";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Product Added Unsuccessfully')";
    echo "window.location.replace('../../admin/addproducts.php');";
    echo "</script>";
}

?>