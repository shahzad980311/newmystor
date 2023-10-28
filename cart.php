<?php
  include("include/connect.php");
  include("./function/common_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sasty shop</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- fountawsam -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
   <style>
    .cart_image{
      height: 50px;
      width: 50px;
      object-fit:contain;
      
    }
   </style>
</head>
<body>
<div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="container-fluid">
            <img src="image/th.png" alt="" class="logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="display_all.php">Product</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Register</a>
                     </li>
                      <li class="nav-item">
                       <a class="nav-link" href="#">contect</a>
                      </li>
                    <li class="nav-item">
                       <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-plus"></i><sup>1</sup></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Total price</a>
                    </li>
       
                </ul>
                     <form class="d-flex" action="search_product.php" method="get">
                      <input class="form-control me-2" type="search"
                       placeholder="Search" aria-label="Search" name="search_data">
                      <input type="submit" value="search" class="btn btn-outline-light"
                      name="search_data_product">
                     </form>
                  </div>
                 </div>
     </nav>
            <!-- add to cart -->
            <?php
            cart();
            ?>
             <!-- second child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
              <ul class="navbar-nav me-auto">
  
               <li class="nav-item ">
               <a class="nav-link text-light" href="#">Welcom Guest</a>
               </li>
        
               <li class="nav-item">
               <a class="nav-link text-light" href="#">Login</a>
               </li>
               </ul>
         </nav>
            <!-- therd child -->
      <div class="bg-light">
          <h3 class="text-center">Shahzain Stor</h3>
         <p class="text-center">this is our own stor avalebal all thinks</p>
      </div>
                 <!-- fourth child -->
              <div class="container">
                <div class="row">
                    <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan="2">Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                        global $con;
    $get_pi_add=getIPAddress();
    $total_price=0;
    $cart_query="select * from `cart_detail` where ip_adress='$get_pi_add' ";
    $result=mysqli_Query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_products="select * from `insert_product` where product_id='$product_id'";
      $result_products=mysqli_query($con,$select_products);
      while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);
        $price_table=array($row_product_price['product_price']);
        $product_tital=array($row_product_price['product_title']);
        $product_image1=array($row_product_price['product_image1']);
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
     
      ?>
    
       
                            <tr>
                                <td><?php echo $product_tital ?></td>
                                <td><img src ="./image/<?php echo $product_image1 ?>" alt="" class="cart_image"></td>
                               <td><input type="text" name="" id=""></td>
                               <td><?php echo $product_tital ?></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <button class="bg-info px-3 py-2 border-0 mx-3">Update</button>
                                    <button class="bg-secondary px-3 py-2 border-0 mx-3 text-light">Remove</button>
                                </td>
                            </tr>
                            <?php
                             }}
                            ?>
                        </tbody>
                    </table>
        
                    <!-- subtotal -->
                    <div class="d-flex mb-5">
                        <h4 class="px-3">SubTotal : <strong class="text-info">5000</strong></h4>
                        <a href="index.php" ><button class="bg-info px-3 py-2 border-0 mx-3">Cuntinue Shoping</button></a>
                        <a href="#" ><button class="bg-secondary px-3 py-2 border-0 mx-3 text-light">Checkout</button></a>
                    </div>
                </div>
              </div>
                <!-- last child -->
                <?php
                  include("./include/fotter.php");
                 
                ?>

</div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>