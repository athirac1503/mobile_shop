<?php
require('dbconnection.php');
$msg="";
$product_id=$_GET['id'];
$sql="DELETE FROM register_mobile_phone WHERE mobile_id='$product_id'";
$exec_query=mysqli_query($connection,$sql);
if($exec_query){

    header('location:manage_product.php');
    
}
else{
    $msg="error";
}
echo $msg;
?>