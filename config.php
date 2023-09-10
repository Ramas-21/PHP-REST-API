<?php
$userName = "root";
$password = "";
$databaseName = "API";

$connect = new PDO('mysql:host=127.0.0.1;dbname='.$databaseName.';charset=utf8',$userName,$password);

// set some db attribute
$connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$connect->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>