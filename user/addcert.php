<?php
session_start();
include '../conn.php';
if (!isset($_REQUEST['uid'])||!isset($_REQUEST['gid'])||!isset($_REQUEST['count'])) {
  echo "非法访问！";
  exit;
}
$uid=$_REQUEST['uid'];
$gid = $_REQUEST['gid'];
$count = $_REQUEST['count'];
$sql = "SELECT * FROM user where id = ".$uid;
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

echo '请先注册或登录！';
exit;
  }

?>
<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>我的订单</title>
  <link rel="stylesheet" type="text/css" href="../images/general.css">
  <link rel="stylesheet" type="text/css" href="../images/index.css">
  <script type="text/javascript" src="../images/jquery.js"></script>
  <script type="text/javascript" src="../images/general.js"></script>
  <script type="text/javascript" src="../images/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->

<!-- 头部开始 -->
<?php include '../header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">

      <br>  <br>  <br>  <br>

      <?php
      //添加成功
      //添加失败
      $sql = "INSERT INTO cert(user_id,goods_id,count) VALUES(".$uid.",".$gid.",".$count.")";

      if ($conn->query($sql) === TRUE) {
          echo "添加购物车成功！";
      }else {
        echo "添加购物车失败！";
      }
?>
</div>
<!-- 页脚开始 -->
<?php include '../footer.php'; ?>
