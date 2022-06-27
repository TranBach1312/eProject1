<?php

if (isset($_SESSION['uid'])) {
    $sql_select_user = "SELECT id, user_name, avatar from users where id = " . $_SESSION['uid'];
    $user = db_get_data($sql_select_user);
}
?>

<div class="container">
    <div class="row-left">
    <i class="fa fa-home" aria-hidden="true"><a href="../index.php">Home</a></i></span>
    
    <span>
                <h4 id="time"></h4>
            </span>
        <div class="top">
            <div class="avt" onclick="change_avatar(<?=$user['id']?>)">
                <img src="../img/avatar/<?= $user['avatar'] ?>" alt="avatar">
            </div>
            <h3><?= $user['user_name'] ?></h3>
        </div>
        <div class="menu">
            <hr>
            <div id="demo" class="menu-left">
                <ul>
                    <li><a href="?admin=dashboard.php"><i class="fas fa-book-open"></i>Dashboard</a></li>
                    <li><a href="?admin=profile&id=1>"><i class="fa fa-id-badge" aria-hidden="true"></i> Profile</a></li>
                    <?php

                    if ($_SESSION['uid'] == 1) {
                        echo '<li><a href="?admin=user&id=2"><i class="fa fa-user-circle" aria-hidden="true"></i> User Management</a></li>';
                    }
                    ?>
                    <li><a href="?admin=product&id=3"><i class="fas fa-dharmachakra"></i>Product Management </a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>