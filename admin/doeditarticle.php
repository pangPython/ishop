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
//接受数据
$aid = $_REQUEST['aid'];

$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content     = $_REQUEST['content'];

//拼装sql
$sql = "update wenzhang set title = '".$title."',author = '".$author."',content = '".$content."' where id = ".$aid;


//写入数据库
if ($conn->query($sql)) {
  echo "更新文章成功！";
}else {
  echo "更新文章失败请重试！error:update article error!";
}
//返回状态

  ?>
