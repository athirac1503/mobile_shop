<?php
require('dbconnection.php');
$msg="";
$product_id=$_GET['prod_id'];
$sql="SELECT * FROM user_registration WHERE user_id='$product_id'";
$exec_query=mysqli_query($connection,$sql);
if($exec_query){

    header('location:manage_product.php');
    
}
else{
    $msg="error";
}
echo $msg;
?>