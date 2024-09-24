<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update | تعديل المنتج</title>
    <link rel="stylesheet" href="../asscets/css/dachboard.css">
    <link rel="stylesheet" href="../asscets/css/style.css">
</head>
<body>

    <?php
    include('../config.php');
    $ID = $_GET['id'];
    $update = mysqli_query($con, "SELECT * FROM prod where id=$ID");
    $data = mysqli_fetch_array($update);
    
    ?>


<!-- <input type="text" name="id" placeholder=" ادخل id العنصر " value='<?php echo $data['ID'] ?>'>

<input type="text" name="name" placeholder="اسم المنتج" value='<?php echo $data['name'] ?>'>

<input type="text" name="price" placeholder=" ثمن المنتج" class="price" value='<?php echo $data['price'] ?>'>

<input type="file" name="image" id="file" style="display:none;">
<label for="file">تحديت صورة المنتج</label> -->

    <form action="up.php" method="post" class="upload_prudact" enctype="multipart/form-data">
    <h2 class="titel_section">تعديل المنتاجات</h2>
            <div class="inputs">
            <input type="text" placeholder="اسم المنتج" name="name" class="input" value='<?php echo $data['name'] ?>'>
            <input type="text" placeholder="ثمن المنتج" name="price" class="input" value='<?php echo $data['price'] ?>'>
            </div>

            <div class="inputs">
            <input type="text" placeholder="خصم المنتج" name="khasem" class="input" value='<?php echo $data['khasem'] ?>'>
            <input type="text" placeholder="ID المنتج" name="id" class="input"  value='<?php echo $data['ID'] ?>'>
            </div>

            <div class="upload_img">
            <input type="file" name="image" id="file" style="display:none;">
            <label for="file">اختار صورة المنتج</label>
            </div>
        <button name="update" type="submit">تعديل المنتج</button><br>
    </form>





    </body>
</html>