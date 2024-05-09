<?php


$con = mysqli_connect('localhost','root','','ecommerce');


 $ID = $_GET['Id'];
if(mysqli_query($con,"DELETE FROM `products` WHERE Id = $ID")){
    header("Location:index.php?suc=true");
}else{
   echo "Record Delete Failed";
}

?>