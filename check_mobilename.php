<?php
require('dbconnection.php');
if(isset($_POST['mobile_name'])){
    $mobile=$_POST['mobile_name'];
    $exec_query=mysqli_query($connection,"SELECT * FROM register_mobile_phone WHERE model_name='$mobile'");
    if(mysqli_num_rows($exec_query)>0){
        echo "<span style='color:red'>Mobile is exist add another</span>";
    }
    else{
        echo "<span style='color:green'>Mobile name is available</span>";
 
    }
}

?>