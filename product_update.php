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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<style>
     body{
            background:rgba(79, 158, 125, 0.726);
        }
        .box{
            background:rgba(79, 158, 125, 0.726);
            height:600px;
            width:500px;
            margin-left:450px;
            margin-top:20px;
            border-radius:10px
        }
        h1{
            text-align:center;
            font-size:30px;
            padding-top:20px;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
        }
        button{
            margin-left:150px;
            width:200px;
            margin-top:40px;
            margin-bottom:100px;
            background-color: black;
            border-radius:10px;
            color:white;
            height:50px;
        }
        .form-control,.form-label{
            width:350px;
            height:40px;
            margin-left:80px;
        }
        button{
            margin-left:150px;
            width:200px;
            margin-top:10px;
            margin-bottom:100px;
            background-color: black;
            border-radius:10px;
            color:white;


        }  
    </style>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="box">
        <h1>UPDATE MOBILE PHONE DETAILS</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mobile Name</label>
            <input type="text" class="form-control" name="_mobilename"id="exampleFormControlInput1" placeholder="Mobile Name" value="<?php echo $row[1] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Brand</label>
            <input type="text" class="form-control" name="_brand" id="exampleFormControlInput2" placeholder="Brand" value="<?php echo $row[2] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Rate</label>
            <input type="text" class="form-control" name="_rate" id="exampleFormControlInput3" placeholder="Rate" value="<?php echo $row[3] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Upload image</label>
            <input type="file" class="form-control" name="image" id="exampleFormControlInput4" placeholder="Upload Image" value="<?php echo $row['product_image'] ?>">
        </div>
        <button type="submit" name="btn_update">Update</button>
    </div>
    <p><?php echo $msg ?></p>

    </form>
</body>
</html>