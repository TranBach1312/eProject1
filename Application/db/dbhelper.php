<?php
    require_once('config.php');
    function db_config($sql){
        $conn = mysqli_connect(HOST, USER, PWD, DATABASE);
        $conn -> set_charset('utf8');
        
        $conn -> query($sql);

        $conn -> close();
    }

    function db_get_data($sql, $isSingle = true){
        $conn = mysqli_connect(HOST, USER, PWD, DATABASE);
        $conn -> set_charset('utf8');
        
        $dataResult = $conn -> query($sql);
        $data = null;
        if($isSingle){
            $data = mysqli_fetch_assoc($dataResult);
        }
        else{
            $data = [];
            while(($result = mysqli_fetch_assoc($dataResult))!=null){
                $data[] = $result;
            }
        }
        $conn -> close();
        return $data;
    }