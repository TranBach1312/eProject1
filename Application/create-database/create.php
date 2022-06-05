<?php
    require_once('../db/config.php');
    $create_db_query = 'CREATE DATABASE if not EXISTS eProject1';
    $conn = mysqli_connect(HOST, USER, PWD);
    $create_table_query = file_get_contents('create-query.sql');
    $conn -> query($create_db_query);
    $conn -> select_db(DATABASE);
    $conn -> multi_query($create_table_query);
    $conn -> close();
    echo '<h3>Create DataBase Success</h3>';
    
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
    <form action="" onsubmit="return loadDoc()">
    <button onclick="loadDoc()" id="b">Insert Basic data</button>
    
</form>
    <div id="noti"></div>
    <script>
        function loadDoc(){
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(xhttp.readyState == 4 && xhttp.status == 200){
                    document.getElementById("noti").innerHTML = this.responseText;
                }
            }
            xhttp.open("GET", "insert-basic-data.php");
            xhttp.send();
            document.getElementById("b").style.display = "none";
            setTimeout(
            'redirect()', 5000
            )
            return false;
        }
        function redirect(){        
                window.location = "http://localhost/eProject1/Application/admin/admin.php";
        }
    </script>
</body>
</html>