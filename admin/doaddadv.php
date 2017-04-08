<?php
include '../conn.php';
//接受数据

$advsname = $_REQUEST['advsname'];
$keywords = $_REQUEST['keywords'];
$picture  = $_REQUEST['picture'];
$link     = $_REQUEST['link'];

//拼装sql
$sql = "insert into adv(name,keywords,picture,link) values('".$advsname."','".$keywords."','".$picture."','".$link."')";
//写入数据库
if ($conn->query($sql)==TRUE) {
  echo "添加广告成功！";
}else {
  echo "添加失败请重试！";
}
//返回状态

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
