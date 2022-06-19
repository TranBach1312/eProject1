<?php
    require_once("./db/dbhelper.php");
    require_once("./utils/utility.php");
    $brand_id = getGet('brand_id');
    $brand_id_max = db_get_data("SELECT MAX(id) as max from brands where 1", 1);
    if($brand_id > (int)$brand_id_max['max']){
        $brand_id = 1;
    }
    $sql_select_brands = "SELECT name, id from brands where id = $brand_id";
    $brands = db_get_data($sql_select_brands, 0);
?>