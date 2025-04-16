<?php

//DB conn
include '../../library/db_conn.php';

$T_product_name = $_REQUEST['T_product_name'];
$T_product_description = $_REQUEST['T_product_description'];
$T_product_price = $_REQUEST['T_product_price'];
$T_product_img1 = $_REQUEST['T_product_img1'];
$T_product_img2 = $_REQUEST['T_product_img2'];
$T_product_img3 = $_REQUEST['T_product_img3'];
$T_product_img4 = $_REQUEST['T_product_img4'];
$T_product_img5 = $_REQUEST['T_product_img5'];


$sql = "INSERT INTO top_selling_products(T_product_name, T_product_description, T_product_price, T_product_img1, T_product_img2, T_product_img3, T_product_img4, T_product_img5) VALUES('$T_product_name', '$T_product_description', '$T_product_price', '$T_product_img1', '$T_product_img2', '$T_product_img3', '$T_product_img4', '$T_product_img5')";
if($conn->query($sql) === TRUE ){
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