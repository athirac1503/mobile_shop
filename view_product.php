<?php
    require('dbconnection.php');
    session_start();
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];

    }
    else{
?>
<script>
    alert("please Login");
    window.location='login.php';

</script>
<?php
    }
?>
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
<body>
    <div>
        <form action="">
        <?php
        if(mysqli_num_rows($exec_query)>0){
            while($row=mysqli_fetch_assoc($exec_query)){

            ?>
            <div>
            <img src="<?php echo $row['product_image']; ?>" alt="" height="100px" width="100px">
            <h2><?php echo $row['model_name'] ?></h2>
            <h4><?php echo $row['rate'] ?></h4>
            <button onclick="confirm('successfully purchased');">Purchase</button>
            </div><br>
            
            <?php

            }
        }
        ?>
        </form>
    
    </div>
</body>
</html>