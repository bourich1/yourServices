<?php

include('../config.php');

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $khasem = $_POST['khasem'];
    $IMG = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update = "UPDATE prod SET name='$NAME' , price='$PRICE' , khasem='$khasem' , img='$image_up' WHERE id=$ID";
    mysqli_query($con , $update);
    if(move_uploaded_file($image_location, "pages/images/".$image_name)){
        echo "<script>alert('تم رفع المنتج')</script>";
    }else{
        echo "<script>alert('حدت خطاء')</script>";
    };
    header('location: dachboard.php');
};
?>