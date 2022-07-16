<?php
    require('dbconnection.php');
    if(isset($_POST['btn_login'])){
        $username=$_POST['_username'];
        $password=$_POST['_password'];
        $exec_query=mysqli_query($connection,"SELECT * FROM user_registration WHERE username='$username' AND u_password='$password'");
        if(mysqli_num_rows($exec_query)>0){
            $userdata=mysqli_fetch_array($exec_query);
            session_start();
            $_SESSION['user_id']=$userdata[0];
            header('location:view_product.php');
        }
        else{
            echo "Login fail";
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
    <style>
        .box{
            background:pink;
            length:500px;
            width:500px;
            margin-left:400px;
            margin-top:200px;
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
</head>


<body>
   <form action="" method="POST">
   <div class="box">
        <h1>USER LOGIN</h1>
        <table>
        <tr>
            <td><label for="">username</label></td>
            <td><input type="text" name="_username" id=""></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td><input type="password" name="_password" id=""></td>
        </tr>
        </table>
        <button type="submit"name="btn_login">LOGIN</button>
    </div>
   </form>
</body>
</html>