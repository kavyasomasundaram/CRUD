<?php
    include 'connect.php';
    $product_id = $_GET['viewid'];
    $sql="Select * from `crud` where product_id=$product_id";
    $result=mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($result);
    $product_name=$row['product_name'];
    $product_quantity=$row['product_quantity'];
    $product_price=$row['product_price'];

   
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
    <input type="text" class="form-control"  placeholder="Enter your product name" name="product_name" autocomplete="off" value=<?php echo $product_name;?>>
  </div>
  <div class="form-group">
    <label >product_quantity</label>
    <input type="text" class="form-control"  placeholder="Enter your product quantity" name="product_quantity" autocomplete="off" value=<?php echo $product_quantity;?>>
  </div>
  <div class="form-group">
    <label >product_price</label>
    <input type="text" class="form-control"  placeholder="Enter your product price" name="product_price" autocomplete="off" value=<?php echo $product_price;?>>
  </div>


  
  
  <button type="submit" class="btn btn-primary" name="submit"><a href="display.php" class="text-light">Back</a></button>
</form>
    </div>

   
    
  </body>
</html>