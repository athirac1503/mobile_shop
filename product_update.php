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


?>
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
            width:500px;
            margin-left:400px;
            margin-top:100px;
            border-radius:10px
        }
        h1{
            text-align:center;
            padding-top:20px;

        }
        table{
            margin-left:130px;
        }
        button{
            margin-left:150px;
            width:200px;
            margin-top:40px;
            margin-bottom:100px;
            background-color: rgb(139, 3, 83);
            border-radius:10px;
            color:white;


        }
    </style>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="box">
        <h1>UPDATE MOBILE PHONE DETAILS</h1>
        <table>
        <tr>
            <td><label for="">Mobile Name</label></td>
            <td><input type="text" name="_mobilename" id=""></td>
        </tr>
        <tr>
            <td><label for="">Brand</label></td>
            <td><input type="text" name="_brand" id=""></td>
        </tr>
        <tr>
            <td><label for="">Rate</label></td>
            <td><input type="text" name="_rate" id=""></td>
        </tr>
        <tr>
            <td><label for="">Upload Image</label></td>
            <td><input type="file" name="image" id=""></td>
        </tr>
        </table>
        <button type="submit" name="btn_update">Register</button>
    </div>
    <p><?php echo $msg ?></p>

    </form>
</body>
</html>