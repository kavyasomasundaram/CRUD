<?php
include 'connect.php';?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>
<body>
    
<div class="container">
    <button class="btn btn-primary my-5"><a href="users.php" class="text-light">Add Product</a>
    </button>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">product_id</th>
      <th scope="col">product_name</th>
      <th scope="col">product_quantity</th>
      <th scope="col">product_price</th>
      <th scope="col">Operations</th>
    
    </tr>
  </thead>
  <tbody>





  <?php

$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $product_id = $row['product_id'];
        $product_name= $row['product_name'];
        $product_quantity= $row['product_quantity'];
        $product_price= $row['product_price'];
        echo '<tr>
        <th scope="row">'.$product_id.'</th>
        <td>'.$product_name.'</td>
        <td>'.$product_quantity.'</td>
        <td>'.$product_price.'</td>
        <td><button class="btn btn-success"><a href="view.php? viewid='.$product_id.' " class="text-light">View</a></button>
    <button class="btn btn-primary"><a href="update.php? updateid='.$product_id.' " class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?  deleteid='.$product_id.'" class="text-light">Delete</a></button>
 </td>   
  
      </tr>';
    }
}




?>
 





</tbody>
</table>




</div>
</body>
</html>