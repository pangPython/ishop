<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shop";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->query('set names utf8');
