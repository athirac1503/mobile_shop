<?php
require('dbconnection.php');
$msg="";
$pid=$_GET['prod_id'];
$exec_query=mysqli_query($connection,"SELECT * FROM register_mobile_phone  WHERE mobile_id='$pid'");
$row=mysqli_fetch_array($exec_query);

if(isset($_POST['btn_update'])){
    $mobile_name=$_POST['_mobilename'];
    $brand=$_POST['_brand'];
    $rate=$_POST['_rate'];
    $targetdirectory="images/";
    $targetfile=$targetdirectory.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);
    $query="UPDATE register_mobile_phone SET model_name='$mobile_name',brand='$brand',rate='$rate',product_image='$targetfile' WHERE mobile_id='$pid'";
    $exec_query=mysqli_query($connection,$query);
    if($exec_query){
        header('location:manage_product.php');
    }
    else{
        echo "error";
    }

}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .box{
            background:pink;
            length:500px;
            width:800px;
            margin-left:280px;
            margin-top:100px;
            border-radius:10px
        }
        h1{
            text-align:center;
            padding-top:20px;

        }
        table{
            margin-left:100px;
            margin-bottom:50px;

        }
</style>
<body>
   <div class="box">
   <h1>PURCHASE REQUEST</h1>
    <table border=1>
        <thead>
            <tr>
                <th>REQUEST ID</th>
                <th>PRODUCT</th>
                <th>BRAND</th>
                <th>CUSTOMER</th>
                <th>RATE</th>
                <th>VIEW MORE</th>
            </tr>
        </thead>
    </table>
   </div>
</body>
</html>