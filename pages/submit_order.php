<?php
// اتصال بقاعدة البيانات
include('../config.php');

// التحقق من إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // جلب البيانات من النموذج
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $product_image = mysqli_real_escape_string($con, $_POST['product_image']);
    $product_price = mysqli_real_escape_string($con, $_POST['product_price']);
    $product_quantity = mysqli_real_escape_string($con, $_POST['product_quantity']);
    $full_name = mysqli_real_escape_string($con, $_POST['fullName']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $delivery_address = mysqli_real_escape_string($con, $_POST['deliveryAddress']);

    // إدخال البيانات في جدول الطلبات
    $query = "INSERT INTO orders (product_name, product_image, product_price, product_quantity, full_name, phone_number, delivery_address) 
              VALUES ('$product_name', '$product_image', '$product_price', '$product_quantity', '$full_name', '$phone_number', '$delivery_address')";

    // إذا تم الإدخال بنجاح
    if (mysqli_query($con, $query)) {
        // عرض رسالة النجاح
        echo "<script>document.addEventListener('DOMContentLoaded', function() { showSuccessMessage(); });</script>";
    } else {
        echo "حدث خطأ أثناء إرسال الطلب: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إرسال الطلب</title>
    <style>
        /* تصميم النموذج */
        .order-form {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .order-form h2 {
            text-align: center;
            color: #333;
        }

        .order-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .order-form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        /* تصميم النافذة المنبثقة */
        .success-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .success-modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.3s ease-in-out;
        }

        .success-modal-content h2 {
            color: #4CAF50;
        }

        .ok-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .ok-btn:hover {
            background-color: #45a049;
        }

        /* زر الإغلاق */
        .close-success {
            float: right;
            font-size: 24px;
            cursor: pointer;
        }

        .close-success:hover {
            color: red;
        }
    </style>
</head>
<body>

    <!-- النموذج -->
    <div class="order-form">
        <h2>إرسال الطلب</h2>
        <form action="" method="post">
            <input type="hidden" name="product_name" value="اسم المنتج">
            <input type="hidden" name="product_image" value="product.jpg">
            <input type="hidden" name="product_price" value="200">
            <input type="hidden" name="product_quantity" value="1">

            <label for="fullName">الاسم الكامل:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="phoneNumber">رقم الهاتف:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

            <label for="deliveryAddress">مكان تسليم المنتج:</label>
            <input type="text" id="deliveryAddress" name="deliveryAddress" required>

            <button type="submit" class="submit-btn">إرسال الطلب</button>
        </form>
    </div>

    <!-- النافذة المنبثقة -->
    <div id="successMessage" class="success-modal">
        <div class="success-modal-content">
            <span class="close-success">&times;</span>
            <h2>🎉 تم إرسال طلبك بنجاح!</h2>
            <p>شكراً لتعاملك معنا. سيتم التواصل معك قريباً لتأكيد الطلب وتفاصيل الشحن.</p>
            <button class="ok-btn" id="closeSuccessBtn">حسنًا</button>
        </div>
    </div>

    <script>
        // عرض الرسالة بعد نجاح إرسال الطلب
        function showSuccessMessage() {
            const successModal = document.getElementById('successMessage');
            successModal.style.display = 'flex'; // إظهار النافذة
            
            // إغلاق النافذة عند الضغط على زر "حسنًا"
            document.getElementById('closeSuccessBtn').addEventListener('click', function() {
                successModal.style.display = 'none';
            });

            // إغلاق النافذة عند الضغط على زر الإغلاق
            document.querySelector('.close-success').addEventListener('click', function() {
                successModal.style.display = 'none';
            });

            // إغلاق النافذة عند الضغط خارجها
            window.addEventListener('click', function(event) {
                if (event.target == successModal) {
                    successModal.style.display = 'none';
                }
            });

            // إعادة توجيه إلى صفحة المنتجات بعد 5 ثوانٍ
            setTimeout(function() {
                window.location.href = "shop.php"; // تعديل رابط صفحة المنتجات حسب مسارها
            }, 2000);
        }
    </script>

</body>
</html>
