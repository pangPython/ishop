<?php
session_start();
include '../conn.php';
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
      <br>  <br>  <br>  <br>
      <p style="font-size:30px">
<?php

while($row = $result->fetch_assoc()) {

  echo "用户名：".$row['uname']
        ."<br>头像:<image src='".$row['avatar']."' width='80px'>"
      ."<br>密码:".$row['pwd']
      ."<br>手机号:".$row['tel']
      ."<br>性别:".$row['sex']
      ."<br>邮箱:".$row['email']
      ."<br>密码:".$row['pwd'];

}

 ?>
 </p>
<p style='font-size:30px'><a href="/user/upload.php?uid=<?php echo $uid?>">上传头像</a></p>
<p style='font-size:30px'><a href="/user/order.php?uid=<?php echo $uid?>">我的订单</a></p>
</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
