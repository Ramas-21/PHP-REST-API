<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include_once('../core/initialize.php');

$post = new Post($connect);
?>