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
            margin-left:100px;
            margin-bottom:50px;

        }
</style>
<body>
   <div class="box">
   <h1>MANAGE PRODUCT</h1>
    <table border=1>
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
                <td><a href="product_update.php?prod_id=<?php echo $row['mobile_id']; ?>">Update</a></td>
                <td><a href="product_delete.php?id=<?php echo $row['mobile_id']; ?>"onclick="confirm('are you sure,you want to delete');">Delete</a></td>


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