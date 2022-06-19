<?php
    require_once("./db/dbhelper.php");
    require_once("./utils/utility.php");
    $sql_select_brands = "SELECT name, id from brands";
    $brands = db_get_data($sql_select_brands, 0);
?>
<header>
    <!-- <div id="w-top"></div> -->
    <div class="h-top">
        <span class="hotline">Hotline: 0985 239 556</span>
        <div class="search">
            <form action="">
                <input type="text" name="s" autocomplete="off" placeholder="Tìm kiếm theo dòng xe, hãng xe">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="account-box">
            <?php
                session_start();
                if(!isset($_SESSION['uid'])){
                   echo "<span><a href='./accounts/signup.php'>Sign Up or Sign In</a></span>"; 
                }
                else{
                    echo "<span><a href='./accounts/logout.php'>Log Out</a></span>";
                }
            ?>
        </div>
    </div>
    <div class="menu" id="menuTop">
        <div class="logo">
            <a href=""><img src="https://img1.oto.com.vn/Static/Images/v3/logo-oto.svg" alt=""></a>
            <p>Kênh thông tin và giao dịch ô tô</p>
        </div>
        <div class="main-menu">
            <div class="menu-item">
                <a href="home.php">Home</a>
            </div>
            <div class="menu-item">
                <a href="">Brands</a>
                <div class="sub-menu">
                    <ul>
                        <?php
                            foreach($brands as $brand){
                                echo '<li><a href="brands.php?brand_id='.$brand['id'].'">'.$brand['name'].'</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="">Range of car</a>
                <div class="sub-menu"></div>
            </div>
            <div class="menu-item">
                <a href="">PreOwned Car</a>
            </div>
            <div class="menu-item">
                <a href="./about-us.php">About Us</a>
            </div>
            <div class="menu-item">
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>
</header>