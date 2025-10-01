<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $product_name=$_POST['product_name'];
        $product_quantity=$_POST['product_quantity'];
        $product_price=$_POST['product_price'];


        $sql = "insert into `crud`(product_name,product_quantity,product_price)values('$product_name','$product_quantity','$product_price')";

        $result=mysqli_query($con,$sql);
        if($result){
           // echo "Data inserted successfully";
            header('location:display.php');

        }else{
            die(mysqli_error($con));
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud operations</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >product_name</label>
    <input type="text" class="form-control"  placeholder="Enter your product name" name="product_name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >product_quantity</label>
    <input type="text" class="form-control"  placeholder="Enter your product quantity" name="product_quantity" autocomplete="off">
  </div>
  <div class="form-group">
    <label >product_price</label>
    <input type="text" class="form-control"  placeholder="Enter your product price" name="product_price" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
    
  </body>
</html>