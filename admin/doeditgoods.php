<?php
//编辑商品处理逻辑
include '../conn.php';

$gid = $_REQUEST['gid'];

$goods_name  = $_REQUEST['goodsname'];
$type        = $_REQUEST['type'];
$old_price   = $_REQUEST['oldprice'];
$price       = $_REQUEST['price'];
$desc =  $_REQUEST['desc'];

$sql = "update goods set goods_name = '".$goods_name."',type = ".$type.",old_price = ".$old_price.",description = '".$desc ."' where id = ".$gid;

if ($conn->query($sql)) {
  echo "更新成功！";
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
