<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mobile_phone";
    $connection=mysqli_connect($servername,$username,$password,$dbname);
    if(!$connection){
        die("unable to connect".mysqli_connect_error());
    }
?>