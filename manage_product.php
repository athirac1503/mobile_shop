<?php
require("dbconnection.php");
$qurey="SELECT * FROM register_mobile_phone";
$exec_query=mysqli_query($connection,$qurey);

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
     .box{
            background:rgba(79, 158, 125, 0.726);
            height:600px;
            width:800px;
            margin-left:80px;
            margin-top:40px;
            border-radius:10px
        }
        h1{
            text-align:center;
            padding-top:20px;
            font-family: 'Times New Roman', Times, serif;
            font-weight:bolder;
        }
        table{
            margin-top:40px;
        }
        .bt1{
            background-color:green;
            border:solid 2px green;
            color:black;
            font-weight:bolder;
        }
        .bt2{
            background-color:brown;
            border:solid 2px brown;
            color:black;
            font-weight:bolder;
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
</style>
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
        <div class="box">
   <h1>MANAGE PRODUCT</h1>
    <table  class="table" border=1>
        <thead>
            <tr>
                <th>PRODUCT ID</th>
                <th>MODEL NAME</th>
                <th>BRAND</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
        <body>
        <?php
        if(mysqli_num_rows($exec_query)>0){
            while($row=mysqli_fetch_assoc($exec_query)){

            ?>
            <tr>
                <td><?php echo 1 ?></td>
                <td><?php echo $row['model_name'] ?></td>
                <td><?php echo $row['brand'] ?></td>
                <td><?php echo $row['rate'] ?></td>
                <td><img src="<?php echo $row['product_image']; ?>" alt="" height="100px" width="100px"></td>
                <td><a href="product_update.php?prod_id=<?php echo $row['mobile_id']; ?>"><button class="bt1">Update</button ></a></td>
                <td><a href="product_delete.php?id=<?php echo $row['mobile_id']; ?>"><button class="bt2" onclick="confirm('are you sure,you want to delete');">Delete</button ></a></td>


            </tr>
            <?php

            }
        }
        ?>
        </div>
    </div>
        
        </tbody>
    </table>
   </div>
</body>
</html>