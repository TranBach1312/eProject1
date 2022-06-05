<?php
require_once('../db/dbhelper.php');
$insert_basic_data_query = file_get_contents('insert-query.sql');
db_config($insert_basic_data_query, true);
echo "<h2>Insert Data Success</h2>";
echo '<button><a href="../admin/admin.php">To Admin</a></button>';
echo '<p>Automatically Redirect After 5 seconds</p>';

?>