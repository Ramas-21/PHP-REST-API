<?php
$userName = "root";
$password = "";
$databaseName = "API";

$connect = new PDO('mysql:host=127.0.0.1;dbname='.$databaseName.';charset=utf8',$userName,$password);

?>