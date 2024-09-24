<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dachboard | لوحة التحكم</title>
    <link rel="stylesheet" href="../asscets/css/dachboard.css">
    <link rel="stylesheet" href="../asscets/css/style.css">
</head>
<body>

    <section class="dachboard">
    <div class="titer_services mt-3">
            <div class="shape shape_left"></div>
            <div class="titel_div">
                <h2 class="titel_services ">   لوحة التحكم  </h2>
            </div>
            <div class="shape shape_right"></div>
        </div>

        <form action="../insert.php" method="post" class="upload_prudact" enctype="multipart/form-data">
            <h2 class="titel_section">إضافة المنتاجات</h2>
            <div class="img">
                <img src="../asscets/image/feature_1.svg" alt="">
            </div>
            <div class="inputs">
            <input type="text" placeholder="اسم المنتج" name="name" class="input" >
            <input type="text" placeholder="ثمن المنتج" name="price" class="input" >
            </div>
            <div class="inputs">
            <input type="text" placeholder="وصف المنتج" name="description" class="input" >
            <!-- <input type="text" placeholder="ثمن المنتج" name="price" class="input" > -->
            </div>

            <div class="inputs">
            <input type="text" placeholder="خصم المنتج" name="khasem" class="input" >
            <select id="" name="category">
                <option value="">select category</option>
                <option value="electronic">الكترونيات</option>
                <option value="hois">الملابس</option>
                <option value="tools">الادوات</option>
                <option value="games">الالعاب</option>
                <option value="ecsisoir">اكسيسوارات</option>
            </select>
            </div>

            <div class="upload_img">
            <input type="file" name="image" id="file" style="display:none;">
            <label for="file">اختار صورة المنتج</label>
            </div>
            <button name="upload">رفع المنتج</button>
        </form>
    </section>

    
    <!-- ecommerce section -->
    <section class="ecommerce" id="ecommerce">
        <div class="titer_services mt-3">
            <div class="shape shape_left"></div>
            <div class="titel_div">
                <h2 class="titel_services ">  تحكم في المنتاجات </h2>
            </div>
            <div class="shape shape_right"></div>
        </div>
        <div class='cards_ecommerce'>
        <?php
        
        include('../config.php');
        $ruslte = mysqli_query($con, "SELECT * FROM prod");
        while($row = mysqli_fetch_array($ruslte)){
            echo "
           
            <div class='card_ecommerce' data-category='$row[category]'>
                    <div class='img_prudact'>
                        <img class='img_prudact_1' src='$row[img]' alt=''>
                    </div>
                    <span class='new'>جديد</span>
                    <div class='body_card_ecommerce'>
                        <h3 class='name_prudact'>$row[name]</h3>
                        <div class='content_prudact'>
                            <span class='khasem'>$row[khasem]خصم</span>
                            <span class='prix'>$row[price]</span>
                        </div>
                        <div class='content_prudact controle'>
                            <a href='update.php? id=$row[ID]' class='butn bg-primary'>تعديل</a>
                            <a href='delete.php? id=$row[ID]' class='butn bg-danger'>حذف</a>
                        </div>
                    </div>
                </div> 
        
            ";
        }


        
        ?>
    </div>
     </section>
</body>
</html>