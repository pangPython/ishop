<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<?php
session_start();
include '../conn.php';

$uid=$_REQUEST['uid'];
$goods_id = $_REQUEST['gid'];
$count = $_REQUEST['count'];

$sql = "SELECT * FROM user where id = '".$uid."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

echo '请先注册或登录！';
exit;
  }

?>


<meta name="verydows-baseurl" content="">
<meta name="keywords" content="">
<meta name="description" content="">
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

      <br>  <br>  <br>  <br>
        <p style='font-size:20px'>订单详情：</p><br>
      <p style='font-size:30px'>

<?php
$sql = "SELECT * FROM goods where id = '".$goods_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
  echo "货物:".$row['goods_name'];
  echo "<br>价格:".$row['price'].'元';
  echo "<br>数量:".$count;
}

}
 ?>
 </p>
<p style='font-size:30px'>
  <a href="/user/pay.php?uid=<?php echo $uid?>&gid=<?php echo $goods_id?>&count=<?php echo $count?>">
    付款购买</a></p>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
