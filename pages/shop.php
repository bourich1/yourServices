<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجرنا || YourServices</title>
    <link rel="stylesheet" href="../asscets/css/style.css">
    <link rel="stylesheet" href="../asscets/css/shop.css">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <header class="site-header">
        <a href="myCard.php" class="my_card">
            <i class="fas fa-shopping-bag shopping-icon"></i>
        </a>
        <div class="logo">
            <img src="../asscets/image/logo.svg" alt="Logo">
        </div>
    </header>

    <div class="home_ecommerce">

    </div>
    <!-- ads -->
   



    </div>
    <!-- prudacts -->
    <div class="prudacts">
        <!-- filter -->
        <div class="fliters_btns">
            <span class="btn_filter active_btn_filter">الكل</span>
            <span class="btn_filter">الكترونيات</span>
            <span class="btn_filter">الملابس</span>
            <span class="btn_filter">adidas</span>
            <span class="btn_filter">NIKE</span>
        </div>
        <!-- cards ecommerce -->
        <div class='cards_ecommerce'>
            <?php

            include('../config.php');
            $ruslte = mysqli_query($con, "SELECT * FROM prod");
            while ($row = mysqli_fetch_array($ruslte)) {
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
                            <span class='prix'>$row[price] MAD</span>
                        </div>
                        <a href='product.php?id=$row[ID]' class='view_product_btn'>
                          شراء 
                    </a>
                    </div>
                </div> 
            ";
            }



            ?>
        </div>
    </div>


    <script>
        
// add active link filter
var btn_filter = document.querySelectorAll(".btn_filter");
btn_filter.forEach(btn =>{
    btn.addEventListener("click" , ()=>{
        if(document.querySelector(".active_btn_filter")){
            document.querySelector(".active_btn_filter").classList.remove("active_btn_filter");
            btn.classList.add("active_btn_filter");
        }
    })
    
})
    </script>
</body>

</html>