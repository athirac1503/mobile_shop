<?php
    require('dbconnection.php');
    $msg="";
    if(isset($_POST['btn_login'])){
        $username=$_POST['_username'];
        $password=$_POST['_password'];
        $exec_query=mysqli_query($connection,"SELECT * FROM admin_login WHERE user_name ='$username' AND admin_password='$password'");
        if(mysqli_num_rows($exec_query)>0){
            $userdata=mysqli_fetch_array($exec_query);
            header('location:dashboard.php');
        }
        else{
            $msg="Invalied User Name and Password";
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
    <style>
       body{
            background:rgba(79, 158, 125, 0.726);
        }
        .box{
            background:rgba(79, 158, 125, 0.726);
            height:450px;
            width:500px;
            margin-left:400px;
            margin-top:100px;
            border-radius:10px
        }
        h1{
            text-align:center;
            padding-top:20px;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
        }
        button{
            margin-left:150px;
            width:200px;
            margin-top:40px;
            background-color: black;
            border-radius:10px;
            color:white;
            height:50px;
        }
        .form-control{
            width:350px;
            height:50px;
            margin-left:80px;
            margin-top:30px;
        }
        .a1{
            margin-left:180px;
            margin-top:10px;
            margin-bottom:10px

        }
        h6{
            text-align:center;
            margin-top:10px;

        }
        p{
            color:red;
            margin-left:140px;
        }
    </style>
</head>


<body>
   <form action="" method="POST">
   <div class="box">
        <h1>ADMIN LOGIN</h1>
        <div class="mb-3">
            <input type="text" class="form-control" name="_username" id="exampleFormControlInput1" placeholder="User name">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="_password" id="exampleFormControlInput1" placeholder="Password">

        </div>
        <button type="submit" name="btn_login">LOGIN</button>
        <p> <?php  echo $msg?></p>

    </div>
   </form>
</body>
</html>