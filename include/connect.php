<?php
  $con=mysqli_connect('localhost','root','','mystor');
  if($con){
   echo "";
  }else{
    die(mysqli_error($con));
  }
?>