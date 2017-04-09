<?php
session_start();
include '../conn.php';
include 'function.php';

$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = '".$uid."'";
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
  <title>聚宝盆商城</title>
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
  <p style="font-size:30px">我的购物车</p>
      <br>  <br>  <br>  <br>
      <p style='font-size:30px'>
<?php
$sql = "SELECT * FROM cart where user_id = ".$uid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

  echo "用户名：".getUserNameById($conn,$row['id'])."<br>商品名称:".getGoodsNameById($conn,$row['goods_id'])."<br>数量:".$row['count'];
 ?>
 </p>
 <p style='font-size:30px'><a href="/user/payall.php?uid=<?php echo $row['user_id']?>">全部付款</a></p>
 <p style='font-size:30px'><a href="/user/cleancart.php?uid=<?php echo $row['user_id']?>">清空购物车</a></p>
 <?php
}
}
 ?>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
