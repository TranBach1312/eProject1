<?php
require_once("./db/dbhelper.php");
require_once("./utils/utility.php");
?>
<header>
    <!-- <div id="w-top"></div> -->
    <div class="h-top">
        <span class="hotline"></span>
        <div class="search">
            <form action="">
                <input type="text" name="s" autocomplete="off" placeholder="Tìm kiếm theo dòng xe, hãng xe">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="account-box">
            <?php
            session_start();
            if (!isset($_SESSION['uid'])) {
                echo "<span><a href='./accounts/signup.php'>Sign Up or Sign In</a></span>";
            } else {
                echo "<span><a href='./accounts/logout.php'>Log Out</a></span>";
            }
            ?>
        </div>
        <div class="account_manager">
            
            <a href="<?php
                if($_SESSION['uid'] == 1){
                    echo './accounts/admin.php';
                }
                else{
                    echo './accounts/account-setting.php';
                }
            ?>
            "><img class="avt" src="https://i.pinimg.com/474x/b5/40/28/b54028d976f2ddf4d434d49d4f1b2ac3.jpg" alt=""></a>
            
        </div>
    </div>
    <div class="menu" id="menuTop">
        <div class="logo">
            <a href=""><img src="https://img1.oto.com.vn/Static/Images/v3/logo-oto.svg" alt=""></a>
            <p>Kênh thông tin và giao dịch ô tô</p>
        </div>
        <div class="main-menu">
            <div class="menu-item">
                <a href="index.php">Home</a>
            </div>
            <div class="menu-item">
                <a href="show.php">Show Room</a>
            </div>
            <div class="menu-item">
                <a href="brands.php">Brands</a>
                <div class="sub-menu" >
                    <ul>
                        <?php
                        foreach ($brands as $brand) {
                            echo '<li><a href="show.php?brand=' . $brand['id'] . '">' . $brand['name'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="">Range of car</a>
                <div class="sub-menu">
                    <ul>
                        <?php
                        foreach ($ranges as $range) {
                            echo '<li><a href="show.php?range=' . $range['id'] . '">' . $range['name'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
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