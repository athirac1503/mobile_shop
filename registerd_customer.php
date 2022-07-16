<?php
require("dbconnection.php");
$qurey="SELECT * FROM user_registration";
$exec_query=mysqli_query($connection,$qurey);

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
            margin-left:190px;
            margin-bottom:50px;

        }
</style>
<body>
   <div class="box">
   <h1>REGISTERD CUSTOMERS</h1>
    <table border=1>
        <thead>
            <tr>
                <th>CUSTOMER ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CONTACT</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($exec_query)>0){
            while($row=mysqli_fetch_assoc($exec_query)){

            ?>
            <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['u_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['contact'] ?></td>

            </tr>
            <?php

            }
        }
        ?>
        </tbody>
    </table>
   </div>
</body>
</html>