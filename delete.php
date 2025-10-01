<?php
include "connect.php";
if(isset($_GET['deleteid'])){
    $product_id = $_GET['deleteid'];



    $sql = "delete from `crud` where product_id =$product_id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfull";
        header('location:display.php');
    
    }else{
            die(mysqli_error($con));
        }
}


?>