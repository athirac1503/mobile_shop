<?php
    require('dbconnection.php');
    session_start();
    if(isset($_SESSION['_user_id'])){
        $id=$_SESSION['_user_id'];
        $qurey="SELECT * FROM user_registration";
        $exec_query=mysqli_query($connection,$qurey);
        echo $id;

    }
    else{
?>
<script>
    alert("please Login");
    window.location='user_login.php';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<style>
    .b1{
        width:100%;
        height:50px;
        background-color:rgba(79, 158, 125, 0.726);

    }
    .b2{
        margin-left:1100px;
        margin-top:10px;
        width:200px;
        background-color:rgba(79, 158, 125, 0.726);
        border:solid 2px rgba(79, 158, 125, 0.726);
        color:black;
        font-weight: bolder;
    }
    .card-text,#a1,.card-title{
        margin-left:100px;
    }
    #b3{
        background-color:green;
        width:200px;
        border-radius:10px;
        color:white;
        font-weight:bolder;
    }
</style>
<body>
    <div class="b1">
        <h1>hiiii  </h1>
        <a  href="user_login.php"><button class="b2">Home</button></a>
    </div>
    <div>
        <form action="" method="POST">
        <?php
                if(mysqli_num_rows($exec_query)>0){
                while($row=mysqli_fetch_assoc($exec_query)){
            ?>
           <div class="row">
           
             <div class="col-md-4">
                <img src="<?php echo $row['product_image']; ?>" class="card-img-top" alt="..." width="160px" height="250">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['model_name']?></h5>
                    <p class="card-text"><?php echo $row['rate'] ?></p>
                    <a id="a1" href="add_product.php?prod_id=<?php echo $row['mobile_id'];?>"><button id="b3" onclick="alert('your purchase is done');" type="submit">Purchase</button></a>
                </div>
             </div> 
            </div
          
            <?php 

                 }
            }
            ?>
        
        </form>

            
        
    </div>
</body>
</html>