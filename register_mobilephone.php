<?php
    require('dbconnection.php');
    $msg="";
    if(isset($_POST['btn_reg'])){
        $mobile_name=$_POST['_mobilename'];
        $brand=$_POST['_brand'];
        $rate=$_POST['_rate'];
        $targetdirectory="images/";
        $targetfile=$targetdirectory.basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);
        $exec_query=mysqli_query($connection,"INSERT INTO register_mobile_phone(model_name,brand,rate,product_image) VALUES('$mobile_name','$brand','$rate','$targetfile')");
        
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 

    <style>
       body{
            background:rgba(79, 158, 125, 0.726);
        }
        .box{
            background:rgba(79, 158, 125, 0.726);
            height:500px;
            width:500px;
            margin-left:250px;
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
        .form-control{
            width:350px;
            height:40px;
            margin-left:80px;
            margin-top:30px;
        }
        button{
            margin-left:150px;
            width:200px;
            margin-top:40px;
            margin-bottom:100px;
            background-color: black;
            border-radius:10px;
            color:white;
        }  
        .box1{
        background-color:black;
        width:20%;
        height:650px;
    }
    .box2{
        background-color:rgba(79, 158, 125, 0.726);
        width:80%;
        height:650px;
    }
    a{
        text-decoration:none;
        color:#fff;
    }
    .b1,.b2,.b3,.b4{
        height:150px;
        padding-top:60px;
        padding-left:50px;
    }
    .b1:hover{
        background-color:rgba(63, 62, 61, 0.87);
    }
    .b2:hover{
        background-color:rgba(63, 62, 61, 0.87);
    }
    .b3:hover{
        background-color:rgba(63, 62, 61, 0.87);
    }
    .b4:hover{
        background-color:rgba(63, 62, 61, 0.87);
    }
    #error_msg{
        margin-left:80px
    }
    </style>
</head>


<body>
<div class="row">
        <div class="col-md-4 box1">
            <div class="row">
                <div class="col-md-12 b1">
                    <a href="registerd_customer.php">Customer details</a>
                </div>
                <div class="col-md-12 b2">
                    <a href="register_mobilephone.php">Register mobile phone</a>
                </div>
                <div class="col-md-12 b3">
                    <a href="manage_product.php">Manage Product</a>
                </div>
                <div class="col-md-12 b4">
                    <a href="purchase_request.php">Purchase request</a>
                </div>
            </div>

        </div>
        <div class="col-md-8 box2">
        <form action="" method="POST"  enctype="multipart/form-data" onsubmit="return validate();">
    <div class="box">
        <h1>REGISTER MOBILE PHONE</h1>
        <div class="mb-3">
            <input type="text" class="form-control" name="_mobilename"id="mobile1" placeholder="Mobile Name">
            <span id="_name"></span>
            <div id="error_msg"></div><br>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="_brand" id="brand1" placeholder="Brand">
            <span id="_brand"></span>

        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="_rate" id="rate1" placeholder="Rate">
            <span id="_rate"></span>

        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="image" id="image1" placeholder="Upload Image">
            <span id="_image"></span>

        </div>
    
        <button type="submit" name="btn_reg">Register</button>
    </div>
    <p><?php echo $msg ?></p>

    </form>
        </div>
    </div>

</body>  
</html>
<script>
    $(document).ready(function(){
            $('#mobile1').keyup(function(){
                var mobilename=$('#mobile1').val();
                $.ajax({
                    type:"POST",
                    url:"check_mobilename.php",
                    data:{
                        mobile_name:mobilename
                    },
                    success:function(response){
                        $('#error_msg').html(response);
                    }//call back function
                })
            })

        });
</script>