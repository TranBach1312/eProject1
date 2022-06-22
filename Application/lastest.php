<?php
    $sql_select_lastestcar = "SELECT top(100) * from cars order by update_at";
    $lastest_cars = db_get_data($sql_select_lastestcar);
?>

