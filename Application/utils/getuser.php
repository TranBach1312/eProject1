<?php

session_start();
if (isset($_SESSION['uid'])) {
    $sql_select_user = "SELECT user_name, avatar from users where id = " . $_SESSION['uid'];
    $user = db_get_data($sql_select_user);
}