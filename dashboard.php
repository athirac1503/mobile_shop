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
    h1{
        font-size:100px;
        font-family: 'Times New Roman', Times, serif;
        text-align:center;
        margin-top:250px;   
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
            <h1>Welcome admin</h1>
        </div>
    </div>
    
</body>
</html>