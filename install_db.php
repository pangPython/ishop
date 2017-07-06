<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>安装数据库</title>
  </head>
  <body>

  </body>
</html>
<?php
//读取文件内容 根目录sql
$_sql = file_get_contents('shop_navicat.sql');

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "root";
//根据分号切分sql语句
$_arr = explode(';', $_sql);
$_mysqli = new mysqli($DB_HOST,$DB_USER,$DB_PASS);

if (mysqli_connect_errno()) {
    exit('连接数据库出错');
}
//如果数据库不存在就先建立数据库
$_mysqli->query("CREATE DATABASE IF NOT EXISTS shop DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");
$_mysqli->query("USE shop");

//执行sql语句
foreach ($_arr as $_value) {
    $_mysqli->query($_value.';');
}
echo '执行成功...';
$_mysqli->close();
$_mysqli = null;
