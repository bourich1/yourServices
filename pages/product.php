<?php
// تضمين ملف الاتصال بقاعدة البيانات
include('../config.php');

// التحقق من وجود معرف المنتج في الرابط
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM prod WHERE id = $product_id";
    $result = mysqli_query($con, $query);

    // التحقق من وجود المنتج في قاعدة البيانات
    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "المنتج غير موجود.";
        exit;
    }
} else {
    echo "لم يتم تحديد المنتج.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../asscets/css/prudact.css">

</head>

<body>
    <div class="product-page">
        <div class="product-container">
            <div class="product-image">
                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
            </div>
            <div class="product-details">
                <h1 class="product-title"><?php echo $product['name']; ?></h1>
                <p class="product-description"><?php echo $product['description']; ?></p>
                <span class="product-price">السعر : <?php echo $product['price']; ?> MAD</span>

                <div class="quantity-container">
                    <button class="quantity-btn" id="decrease">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button class="quantity-btn" id="increase">+</button>
                </div>


                <button class="add-to-cart-btn">
                    <i class="fas fa-shopping-cart"></i> أضف إلى السلة
                </button>
            </div>
        </div>
    </div>



    <div id="cartModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>تفاصيل المنتج</h2>
            <div class="product-details-popup">
                <img id="productImage" src="<?php echo $product['img']; ?>" alt="صورة المنتج">
                <h3 id="productName"><?php echo $product['name']; ?></h3>
                <p id="productQuantity">الكمية: <span id="quantityValue">1</span></p>
                <p id="productPrice">السعر الإجمالي: <span id="totalPrice"><?php echo $product['price']; ?></span> MAD
                </p>
            </div>
            <h3>معلومات الاتصال</h3>
            <form id="orderForm" action="submit_order.php" method="post">
                <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $product['img']; ?>">
                <input type="hidden" name="product_price" id="finalPrice" value="<?php echo $product['price']; ?>">
                <input type="hidden" name="product_quantity" id="finalQuantity" value="1">

                <label for="fullName">الاسم الكامل:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="phoneNumber">رقم الهاتف:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>

                <label for="deliveryAddress">مكان تسليم المنتج:</label>
                <input type="text" id="deliveryAddress" name="deliveryAddress" required>

                <button type="submit" class="submit-btn">إرسال الطلب</button>
            </form>
        </div>
    </div>


    <script>
        document.getElementById('increase').addEventListener('click', function () {
            let quantityInput = document.getElementById('quantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });

        document.getElementById('decrease').addEventListener('click', function () {
            let quantityInput = document.getElementById('quantity');
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });


        document.addEventListener('DOMContentLoaded', function () {
            const addToCartBtn = document.querySelector('.add-to-cart-btn');
            const modal = document.getElementById('cartModal');
            const closeBtn = document.querySelector('.close-btn');
            const quantityInput = document.getElementById('quantity');
            const productPrice = parseFloat(<?php echo $product['price']; ?>); // السعر الأصلي للمنتج
            const totalPriceElem = document.getElementById('totalPrice'); // عنصر يظهر السعر الإجمالي
            const finalQuantityInput = document.getElementById('finalQuantity');
            const finalPriceInput = document.getElementById('finalPrice');

            // عند الضغط على زر "أضف إلى السلة"
            addToCartBtn.addEventListener('click', function () {
                // تحديث الكمية في النافذة المنبثقة
                const quantityValue = parseInt(quantityInput.value);
                const totalPrice = (productPrice * quantityValue).toFixed(2);

                document.getElementById('quantityValue').innerText = quantityValue;
                totalPriceElem.innerText = totalPrice;

                // تحديث القيم المخفية في النموذج
                finalQuantityInput.value = quantityValue;
                finalPriceInput.value = totalPrice;

                // إظهار الـ modal
                modal.style.display = "block";
            });

            // عند تغيير الكمية، تحديث السعر الإجمالي
            quantityInput.addEventListener('input', function () {
                const quantityValue = parseInt(quantityInput.value);

                // التحقق من أن الكمية 1 على الأقل
                if (quantityValue >= 1) {
                    const totalPrice = (productPrice * quantityValue).toFixed(2);
                    totalPriceElem.innerText = totalPrice;
                } else {
                    quantityInput.value = 1;
                    totalPriceElem.innerText = productPrice.toFixed(2);
                }
            });

            // عند الضغط على زر الإغلاق
            closeBtn.addEventListener('click', function () {
                modal.style.display = "none";
            });

            // إغلاق النافذة عند الضغط خارجها
            window.addEventListener('click', function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        });




    </script>
</body>

</html>