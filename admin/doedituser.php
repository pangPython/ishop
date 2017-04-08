<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
include '../conn.php';
//获取内容
$uid = $_REQUEST['uid'];

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];

//写入数据库
$sql = "update user set uname = '".$username."',pwd = '".$password."',tel = '".$tel."',sex = '".$sex."',email = '".$email."',address = '".$address."' where id = ".$uid;

if ($conn->query($sql)) {
  echo "success！";
}else {
  echo "failed！";
}
