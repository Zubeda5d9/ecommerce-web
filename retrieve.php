<?php


$con = mysqli_connect('localhost','root','','ecommerce');



if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "Images/".$img_name;
    move_uploaded_file($img_loc,'Images/'.$img_name);


    mysqli_query($con,"INSERT INTO `products`( `Name`, `Price`, `Image`) VALUES ('$name','$price','$img_des')");
    header("location:index.php");

}

?>