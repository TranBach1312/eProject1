<?php
include_once('getdata.php');
$current = [];
$current['brand'] = getGet('brand');
$current['range'] = getGet('range');
$current['transmission'] = getGet('transmission');
$current['fuel'] = getGet('fuel');
$current['status'] = getGet('status');
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
    <link rel="stylesheet" type="text/css" href="./style/filter-style.css">
    <link rel="stylesheet" href="./style/brand-detail-style.css">
</head>

<body>
    <!-- include and display Header -->
    <?php include('layout/header.php'); ?>
    <main>
        <div class="brand-detail">
            
            <?php
            

            if (isset($current['brand'])) {
                $sql_select_detail_brand = "SELECT name, id, logo, description from brands where id = " . $current['brand'] . "";
                $brand_detail = db_get_data($sql_select_detail_brand, 1);
                include('brand-detail.php');
            }  ?>
        </div>
        <div class="filter">
            <?php
            include('filter.php');
            ?>
        </div>
    </main>
    <!-- include and display footer -->
    <?php include('layout/footer.php'); ?>
</body>

</html>