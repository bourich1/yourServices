<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $description = $_POST['description'];
    $khasem = $_POST['khasem'];
    $category = $_POST['category'];
    $IMG = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO prod (name , price , description , khasem , category  ,img) VALUES ('$NAME' , '$PRICE' , '$description' , '$khasem'  , '$category' , '$image_up')";
    mysqli_query($con , $insert);
    if(move_uploaded_file($image_location, "pages/images/".$image_name)){
        echo "<script>alert('yesss')</script>";
    }else{
        echo "<script>alert('nooo')</script>";
    };
    header('location: pages/dachboard.php');
};
?>