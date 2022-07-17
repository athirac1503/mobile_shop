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
            height:630px;
            width:500px;
            margin-left:450px;
            margin-top:20px;
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
        span{
            margin-left:90px
        }
    </style>
</head>


<body>
    <form action="" method="POST" onsubmit="return validate();">
    <div class="box">
        <h1>USER REGISTATION</h1>
        <div class="mb-3">
            <input type="text" class="form-control" name="_name"id="name1" placeholder="Name">
            <span id="name_s"></span>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="_email" id="email1" placeholder="Email">
            <span id="email_s"></span>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="_contact" id="contact1" placeholder="Contact">
            <span id="contact_s"></span>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="_username" id="username1" placeholder="User Name">
            <span id="username_s"></span>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="_password" id="password1" placeholder="Password">
            <span id="password_s"></span>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="_confim" id="confirmpassword1" placeholder="Confirm Password">
            <span id="cpassword_s"></span>
        </div>
        <button  type="submit" name="btn_register">Register</button>
    </div>

    </form>
</body>
<script>
     function validate(){
        var status=1
        var txt_name=document.getElementById("name1")
        var txt_email=document.getElementById("email1")
        var txt_contact=document.getElementById("contact1")
        var txt_usname=document.getElementById("username1")
        var txt_pswd=document.getElementById("password1")
        var txt_cpswd=document.getElementById("confirmpassword1")
        var mobile_pattern=/^[6-9]\d{9}$/ 
        var email_pattern= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/          


        if(txt_name.value=="")
        {
            document.getElementById("name_s").innerHTML="Please Enter Name"
            document.getElementById("name_s").style.color="red"
            txt_name.style.borderColor = "red"
            status=0

        }
        else{
            document.getElementById("name_s").innerHTML=""
            txt_name.style.borderColor = ""
            status=1


        }
        if(txt_email.value=="")
        {
            document.getElementById("email_s").innerHTML="Please Enter Email"
            document.getElementById("email_s").style.color="red"
            txt_email.style.borderColor = "red"
            status=0

        }
        else{
            document.getElementById("email_s").innerHTML=""
            txt_email.style.borderColor = ""
            status=1


        }
        if (txt_email.value.match(email_pattern)){
            txt_email.style.borderColor = ""
            document.getElementById("email_s").innerHTML=""
            status=1
        }
        else{
            document.getElementById("email_s").innerHTML="Please Enter a valid email address"
            document.getElementById("email_s").style.color="red"
            txt_email.style.borderColor = "red"
            status=0

            }
        if(txt_contact.value=="")
        {
            document.getElementById("contact_s").innerHTML="Please Enter contact number"
            document.getElementById("contact_s").style.color="red";
            txt_contact.style.borderColor = "red"
            status=0

        }
        if (txt_contact.value.match(mobile_pattern)){
            txt_contact.style.borderColor = ""
            document.getElementById("contact_s").innerHTML=""
            status=1
        }
        else{
            document.getElementById("contact_s").innerHTML="Please Enter a valid contact number"
            document.getElementById("contact_s").style.color="red"
            txt_contact.style.borderColor = "red"
            status=0

        }
        if(txt_usname.value=="")
        {
            document.getElementById("username_s").innerHTML="Please Enter Username"
            document.getElementById("username_s").style.color="red"
            txt_usname.style.borderColor = "red"
            status=0

        }
        else{
            document.getElementById("username_s").innerHTML=""
            txt_usname.style.borderColor = ""
            status=1


        }
        if(txt_pswd.value=="")
        {
            document.getElementById("password_s").innerHTML="Please Enter Usename"
            document.getElementById("password_s").style.color="red"
            txt_pswd.style.borderColor = "red"
            status=0

        }
        else{
            document.getElementById("password_s").innerHTML=""
            txt_pswd.style.borderColor = ""
            status=1


        }
        if(txt_cpswd.value=="")
        {
            document.getElementById("cpassword_s").innerHTML="Please Enter Confirm Password"
            document.getElementById("cpassword_s").style.color="red"
            txt_cpswd.style.borderColor = "red"
            status=0

        }
        else if(txt_pswd.value!=txt_cpswd.value){
            document.getElementById("cpassword_s").innerHTML="Password does'nt match "
            document.getElementById("cpassword_s").style.color="red"
            txt_cpswd.style.borderColor = "red"
            status=0

        }
        else{
            document.getElementById("password_s").innerHTML=""
            txt_cpswd.style.borderColor = ""
            status=1 

        }
        if(status==0){
            return false;
        }
        
        

        
    }

</script>
</html>