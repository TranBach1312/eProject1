<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
$user_name="";
if (!empty($_POST)) {
    $user_name=getPost('user_name');
}
$id = getGet('id');
$sql = "select * from users where id = '$id'";
$list = db_get_data($sql, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <label for="">User Name:</label>
            <input type="text" name="user_name" value="<?=$list['user_name']?>">
        </div>
        <div class="row">
            <label for="">Email:</label>
            <input type="text" name="email" value="<?=$list['email']?>">
        </div>
        <div class="row">
            <label for="">Phone Number:</label>
            <input type="text" name="user_name" value="<?=$list['phone_number']?>">
        </div>
        <div class="row">
            <label for="">Role:</label>
            <input type="text" name="user_name" value="<?=$list['seller_permission']?>">
        </div>
    </div>

</body>
</html>