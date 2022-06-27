<?php
require_once('../database/utility.php');
require_once('../database/dbhelper.php');
$user_name=$email=$phone_number=$role='';
if(!empty($_GET)) {
	$id = getGet('id');

	$sql = "delete from users where id = '$id'";
	execute($sql);
}
$sql = "select * from users where id = '$id'";
$list = executeResult($sql, true);
if($list == null) {
	header('Location:../layout/admin.php?admin=user ');
	die();
}
?>