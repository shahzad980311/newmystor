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
                       <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus"></i><super>1</super></a>
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
                  <div class="row" >
                    <!-- product -->
                  <div class="col-10">
                  <div class="row">
                           <?php 
                           view_detail_products();
                         
                           get_unique_categories();
                           get_unique_brands();
                    /*        getIPAddress(); */


      
                           ?>
                       </div>
                     </div>
                       <!-- brand manue -->
                     <div class="col-2 bg-secondary p-0">
                     <ul class="navbar-nav me-auto text-center ">
                       <li class="nav-item bg-info">
                         <a class="nav-link text-light" href="#">Delevery Brands</a>
                       </li>
                       <?php
                       getbrands();
                       
                       ?>
                    </ul>
                      <!-- catagres -->
                     <ul class="navbar-nav me-auto text-center ">
                       <li class="nav-item bg-info">
                         <a class="nav-link text-light" href="#">Catagres</a>
                       </li>
                       <?php
                       getcategories();
                        
                       ?>
                    </ul>
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