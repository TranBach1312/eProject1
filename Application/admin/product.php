<?php
    require_once('../utils/utility.php');
    require_once('../db/dbhelper.php');
    $brand_data = db_get_data("SELECT brand_id, brand_name from brands", false);
    $range_data = db_get_data("SELECT range_id, range_name from ranges", false);
    $fuel_data = db_get_data("SELECT fuel_id, fuel_name from fuels", false);
    $range_data = db_get_data("SELECT transmission_id, transmission_name from transmissions", false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .insert-product-form{
            display: none;
        }
    </style>
</head>
<body>
    <?php
        include('../layout/adm-header.php');
    ?>
    <main>
        <?php
            include("../layout/adm-menu.php");
        ?>
        <div class="main-content">
            <button onclick="show('pf')">Add Product</button>
            <button onclick="show('bf')">Add Brand</button>
            <div class="product-list">
                <table></table>
            </div>
            <div class="insert-product-form" id="pf">
                <form action="" method="POST">
                    <div class="row">

                    </div>
                    <div class="row">
                        <label for="">Tên xe</label>
                        <input type="text" name="car_name">
                    </div>
                    <div class="row">
                        <label for="">Thương hiệu</label>
                        <select name="car_brand" id="">
                            <option value="">--Select--</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="">Kiểu dáng xe</label>
                        <select name="car_range" id="">
                            <option value="">--Select--</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="">Loại nhiên liệu</label>
                        <select name="car_fuel" id="">
                            <option value="">--Select--</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="">Loại hộp số</label>
                        <select name="car_transmission" id="">
                            <option value="">--Select--</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for=""></label>
                        <input type="reset" name="" id="">
                        <input type="submit" name="" id="">
                    </div>
                </form>
            </div>
            <div class="insert-brand-form" style="display: none;" id="bf">
                <form action="" method="POST">
                    <div class="row">
                        <label for="">Tên thương hiệu</label>
                        <input type="text" name="brand_name">
                    </div>
                    <div class="row">
                        <label for="">Mô tả thương hiệu</label>
                        <input type="text" name="brand_infomation">
                    </div>
                    <div class="row">
                    <label for=""></label>
                        <input type="reset" name="" id="">
                        <input type="submit" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function show(id){
            document.getElementById(id).style.display = 'block';    
        }
    </script>
</body>
</html>