<?php
    session_start();
    if($_SESSION['uid'] != 1){
        header('Location: ../home.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/adm-header-style.css">
    <link rel="stylesheet" href="../style/adm-menu-style.css">
</head>
<body>
    <?php
    include('../layout/adm-header.php');
    ?> 
    <main>
        <?php
        include("../layout/adm-menu.php");
        ?>
        <div class="row-right">
            <?php
            if(isset($_GET['admin'])){
                $tam=$_GET['admin'];
            }else{
                $tam='';
            }
            if($tam=='profile'){
                include('profile.php');
            }elseif($tam=='user'){
                include('user.php');
            }elseif($tam=='product'){
                include('product.php');
            }elseif($tam=='order'){
                include('order.php');
            }else{
                include('dashboard.php');
            }
            
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>