<?php
/* connection */
include("./include/connect.php");
/* get product function */
function getproduct(){
    global $con;
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $select_query="select * from `insert_product` order by rand() LIMIT 0,3";
    $Result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($Result_query);
    // echo $row['product_title'];
     while($row=mysqli_fetch_assoc($Result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-4 mb-1'>
      <div class='card' style='width: 18rem;'>
         <img src='./image/$product_image1' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
           <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Prodect</a>
         </div>
      </div>
   </div>";
    
     }
    }
  }
}
   /* Desplay Unique Categories */
   function get_unique_categories(){
    global $con;
    /* condirion to check */
    if(isset($_GET['category'])){
      $category_id=$_GET['category'];
    $select_query="select * from `insert_product` where category_id=$category_id";
    $Result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($Result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>This Category is not available for service ...</h2>";
    }
    //$row=mysqli_fetch_assoc($Result_query);
    // echo $row['product_title'];
     while($row=mysqli_fetch_assoc($Result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-4 mb-1'>
      <div class='card' style='width: 18rem;'>
         <img src='./image/$product_image1' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
           <a href='#' class='btn btn-secondary'>View Prodect</a>
         </div>
      </div>
   </div>";
    
     }
   }
  }
  /* Desplay Unique Categories */
  function get_unique_brands(){
    global $con;
    /* condirion to check */
    if(isset($_GET['brand'])){
      $brand_id=$_GET['brand'];
    $select_query="select * from `insert_product` where brand_id=$brand_id";
    $Result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($Result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>This Category is not available for service ...</h2>";
    }
    //$row=mysqli_fetch_assoc($Result_query);
    // echo $row['product_title'];
     while($row=mysqli_fetch_assoc($Result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-4 mb-1'>
      <div class='card' style='width: 18rem;'>
         <img src='./image/$product_image1' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
           <a href='#' class='btn btn-secondary'>View Prodect</a>
         </div>
      </div>
   </div>";
    
     }
   }
  }
   /* Get Categories */
function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
    $Result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($Result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
        echo "<li class='nav-item'>
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
  } 
}
    /* Get Brands */
    function getbrands(){
        global $con;
        $select_brands="select * from `brands`";
        $Result_brands=mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($Result_brands)){
         $brand_title=$row_data['brand_title'];
         $brand_id=$row_data['brand_id'];
         echo "<li class='nav-item'>
         <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
       </li>";
        }
    }
    /* search data */
    function search_product(){
      global $con;
      if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
      $search_query="select * from `insert_product` where product_keyword like 
      '%$search_data_value%'";
      $Result_query=mysqli_query($con,$search_query);
      //$row=mysqli_fetch_assoc($Result_query);
      // echo $row['product_title'];
       while($row=mysqli_fetch_assoc($Result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-4 mb-1'>
        <div class='card' style='width: 18rem;'>
           <img src='./image/$product_image1' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'>$product_description</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
             <a href='#' class='btn btn-secondary'>View Prodect</a>
           </div>
        </div>
     </div>";
      
       }
      }
    }
    function display_allproducts(){
      global $con;
      
      $select_query="select * from `insert_product` order by rand() ";
      $Result_query=mysqli_query($con,$select_query);
      //$row=mysqli_fetch_assoc($Result_query);
      // echo $row['product_title'];
       while($row=mysqli_fetch_assoc($Result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-4 mb-1'>
        <div class='card' style='width: 18rem;'>
           <img src='./image/$product_image1' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'>$product_description</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
             <a href='#' class='btn btn-secondary'>View Prodect</a>
           </div>
        </div>
     </div>";
      
       }
      }
      /* Product detail view */
      function view_detail_products(){
        global $con;
        if(isset($_GET['product_id'])){
        if(!isset($_GET['category'])){
          if(!isset($_GET['brand'])){
            $product_id=$_GET['product_id'];
        $select_query="select * from `insert_product` where product_id=$product_id";
        $Result_query=mysqli_query($con,$select_query);   
         while($row=mysqli_fetch_assoc($Result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_image2=$row['product_image2'];
          $product_image3=$row['product_image3'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-4 mb-1'>
                  <div class='card' style='width: 18rem;'>
                    <img src='./image/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add Prodect</a>
                    <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Prodect</a>
                    </div>
                    </div>
               </div>
        
       <div class='col-md-8'>
              <div class='row'>
                  <div class='col-md-12'>
                     <h4 class='text-center text-info mb-5'>Releted Products </h4>
                  </div>
                 <div class='col-md-6'>
                   <img src='./image/$product_image2' class='card-img-top' alt='$product_title'>
                 </div>
                 <div class='col-md-6'>
                  <img src='./image/$product_image3' class='card-img-top' alt='$product_title'>
                </div>
           
         </div>
       </div>";
       
        
         }
        }
      }
    }
      }
    /* Get ip adress */
    function getIPAddress() {  
      //whether ip is from the share internet  
       if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                  $ip = $_SERVER['HTTP_CLIENT_IP'];  
          }  
      //whether ip is from the proxy  
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
       }  
  //whether ip is from the remote address  
      else{  
               $ip = $_SERVER['REMOTE_ADDR'];  
       }  
       return $ip;  
  }  
 /*  $ip = getIPAddress();  
  echo 'User Real IP Address - '.$ip; */  

  /* add to cart function */
  function cart(){
    if(isset($_GET['add_to_cart'])){
      global $con;
      $get_pi_add=getIPAddress();
      $get_product_id=$_GET['add_to_cart'];
      $select_query="select * from `cart_detail` where ip_adress='$get_pi_add' and product_id=$get_product_id";
      $Result_query=mysqli_query($con,$select_query);
      $num_of_rows=mysqli_num_rows($Result_query);
      if($num_of_rows>0){
        echo "<scipt>alert('this item is already present inside cart')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }else{
        $insert_query="insert into `cart_detail` (product_id,ip_adress,quantity) values 
        ($get_product_id,'$get_pi_add',0)";
        $Result_query=mysqli_query($con,$insert_query);
        echo "<scipt>alert('product add to cart')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
      
    }
  }

?>