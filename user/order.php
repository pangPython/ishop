<?php
session_start();
include '../conn.php';
include 'function.php';
if (!isset($_REQUEST['uid'])) {
  echo "非法访问！";
  exit;
}
$uid=$_REQUEST['uid'];

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
      <ul>


<?php
$sql = "SELECT * FROM orders where user_id = ".$uid;
// echo $sql;
// exit;
$result = $conn->query($sql);
if (isset($result->num_rows) && ($result->num_rows > 0)) {
while($row = $result->fetch_assoc()) {

?>
<li><a href="#" style="font-size:23px">订单id:<?php echo $row['id'].'  '; ?>商品名:<?php echo getGoodsNameById($conn,$row['goods_id']).'  ' ?>用户名:<?php echo getUserNameById($conn,$row['user_id']); ?></a></li>
<?php

}
}else{
  echo "没有订单";
}
 ?>
 </ul>
</div>
<!-- 页脚开始 -->
<?php include '../footer.php'; ?>
