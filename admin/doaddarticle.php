<?php
//检测表单字段是否为空
if (!isset($_REQUEST['title'])) {
  echo "请输入文章标题！";
  exit;
}
if (!isset($_REQUEST['author'])) {
  echo "请输入作者！";
  exit;
}
if (!isset($_REQUEST['content'])) {
  echo "请输入文章内容！";
  exit;
}


$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content = $_REQUEST['content'];


include '../conn.php';
$sql = "insert into wenzhang(title,content,author)"
      ." values('".$title."','".$content."','".$author."')";

if($conn->query($sql)=== TRUE){

    header("Location:/admin/articlelist.php");

}else{
  echo '添加文章失败！:error:add article failed!';
}
