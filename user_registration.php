<?php
    require('dbconnection.php');
    if(isset($_POST['btn_register'])){
        $name=$_POST['_name'];
        $email=$_POST['_email'];
        $contact=$_POST['_contact'];
        $username=$_POST['_username'];
        $password=$_POST['_password'];
        $query="INSERT INTO  user_registration(u_name,email,contact,username,u_password) VALUES ('$name','$email','$contact','$username','$password')";
        $exec_query=mysqli_query($connection,$query);
        

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
</head>


<body>
    <form action="" method="POST">
    <div class="box">
        <h1>USER REGISTATION</h1>
        <table>
        <tr>
            <td><label for="">Name</label></td>
            <td><input type="text" name="_name" id=""></td>
        </tr>
        <tr>
            <td><label for="">Email</label></td>
            <td><input type="email" name="_email" id=""></td>
        </tr>
        <tr>
            <td><label for="">Contact</label></td>
            <td><input type="text" name="_contact" id=""></td>
        </tr>
        <tr>
            <td><label for="">Username</label></td>
            <td><input type="text" name="_username" id=""></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td><input type="password" name="_password" id=""></td>
        </tr>
        <tr>
            <td><label for="">Confirm password</label></td>
            <td><input type="password" name="_confim" id=""></td>
        </tr>
        </table>
        <button type="submit" name="btn_register">Register</button>
    </div>

    </form>
</body>
</html>