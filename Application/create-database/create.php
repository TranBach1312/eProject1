<?php
    require_once('../db/config.php');
    $sql1 = 'CREATE DATABASE if not EXISTS eProject1';
    $conn = mysqli_connect(HOST, USER, PWD);
    $sql = file_get_contents('create-code.sql');
    $conn -> query($sql1);
    $conn -> select_db(DATABASE);
    echo $sql;
    $conn -> multi_query($sql);
    echo '<h3>Create DataBase Success</h3>';