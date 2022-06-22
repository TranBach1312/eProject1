<?php
    
require_once("../db/dbhelper.php");
require_once("../utils/utility.php");
$msg = null;
$stop = 0;
if(!isset($_GET['action']) || ($_GET['action'] != 'signup' and $_GET['action'] != 'signin') || empty($_POST)){
    header('Location: ../index.php');
    exit;
}
elseif($_GET['action'] == 'signup'){
if(!empty($_POST)){
    $id = getPost('id');
    $username = getPost('username');
    $email = getPost('email');
    $address = getPost('address');
    $pwd = getMD5(getPost('pwd'));
    $repwd = getMD5(getPost('repwd'));
    $phonenumber = getPost('phonenumber');
    $seller_register = getPost('seller_register');
    if(!isset($seller_register)){
        $seller_register = 0;
    }
}
if(isset($email)){
    $sql_check_signup = "SELECT email from users where email = '$email'";
    $check_signup = db_get_data($sql_check_signup, 1);
    if(($check_signup)){
        $msg = '<p>This Email is already registered</p>';
    $stop = 1;
    }
}
if($pwd == $repwd and $stop == 0){
    $sql_signup = "INSERT into `users`(id_card, email, user_name, address, phone_number, password, sell_permission)
        values('$id', '$email', '$username','$address', '$phonenumber', '$pwd', '$seller_register')
    ";
    if(db_config($sql_signup)){
        $msg = '<p>Signup Successful</p>';
    }
}
elseif($pwd != $repwd and !$stop){
    $msg = '<p>Passwords are not the same!!</p>';
}}
elseif($_GET['action'] == 'signin'){
    session_start();
       if(!empty($_POST)){
          $email = getPost('email_in');
          $pwd = getMD5(getPost('pwd_in'));
       }
       if(isset($email)){
        $sql_check_signin = "SELECT id, email, password from `users` where email = '$email'";
        $check_signin = db_get_data($sql_check_signin, 1);
    }
       if(isset($check_signin)){
            if(($check_signin['password']) == $pwd){
            $_SESSION['uid'] = $check_signin['id'];
            $_SESSION['logged'] = 1;
            $msg = '<p>Loged Successful</p>';
            $msg .= "<span>Trở về trang chủ trong ... giây hoặc bấm vào <a href='../index.php'>đây</a>";
        }
        else{
            $msg = '<p>Password is\'n correct!!</p>';
        }
       }
       else{
           $msg = '<p>This email is not registered</p>';
       }}
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
    <div class="msg">
        <h3><?=$msg?></h3>
    </div>
</body>
</html>