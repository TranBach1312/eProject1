<?php
    include('getdata.php');
    $sql_select_lastest_car = "SELECT top(9) * from cars order by update_at";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/footer-style.css">
    <link rel="stylesheet" href="./style/style.css">
    
    <link rel="stylesheet" href="./style/header-style.css">
    <link rel="stylesheet" href="./style/slide-style.css">
    <link rel="stylesheet" href="./style/signup.css">
    <!-- <link rel="stylesheet" href="./style/about-us-style.css"> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://kit.fontawesome.com/36fca0a55a.js" crossorigin="anonymous"></script>
    <script src="js/slide.js"></script>
    <script defer src="js/sticky.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/ajax-loadDoc.js"></script>
    <link rel="stylesheet" href="./style/main-content-style.css">

</head>
<body>
    <!-- include and display Header -->
    <?php include('layout/header.php');?>
    <?php include('layout/slide.php'); ?>
    <main>
        <div class="lastest">
            <h3>Xe Mới Nhất</h3>
            <div class="row-cars">
                <div class="car-item">
                    <img src="https://ssa-api.toyotavn.com.vn//VehicleImgs/64EE95D9245744B846EA5D5A94B20334.png" alt="">
                    <h3>CAMRY 2.5Q</h3>
                    <span>Giá 200 tỷ</span>
                    <div class="info">
                        <p><i class="fa-solid fa-calendar"></i>2009</p>
                        <p><i class="fa-solid fa-gear"></i>Số tự động</p>
                        <p><i class="fa-solid fa-flag-checkered"></i>Nhập khẩu</p>
                        <p><i class="fa-solid fa-gas-pump"></i>Xăng</p>
                    </div>
                </div>
                <div class="car-item">
                    <img src="https://hondagiaiphonghn.com/wp-content/uploads/5-9.jpg" alt="">
                    <h3>HONDA CIVIC</h3>
                    <span>Giá 700 tỷ</span>
                    <div class="info">
                        <p><i class="fa-solid fa-calendar"></i>2009</p>
                        <p><i class="fa-solid fa-gear"></i>Số tự động</p>
                        <p><i class="fa-solid fa-flag-checkered"></i>Nhập khẩu</p>
                        <p><i class="fa-solid fa-gas-pump"></i>Xăng</p>
                    </div>
                </div>
                <div class="car-item">
                    <img src="https://hondagiaiphonghn.com/wp-content/uploads/download-2.png" alt="">
                    <h3>HONDA CV-R</h3>
                    <span>Giá 500 tỷ</span>
                    <div class="info">
                        <p><i class="fa-solid fa-calendar"></i>2009</p>
                        <p><i class="fa-solid fa-gear"></i>Số tự động</p>
                        <p><i class="fa-solid fa-flag-checkered"></i>Nhập khẩu</p>
                        <p><i class="fa-solid fa-gas-pump"></i>Xăng</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- include and display footer -->
    <?php include('layout/footer.php');?>
</body>
</html>