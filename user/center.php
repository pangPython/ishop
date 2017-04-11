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
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/general.js"></script>
  <script type="text/javascript" src="../js/carousel.js"></script>
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

if ($row['sex']==1) {
  $sexx = '男';
}else {
  $sexx = '女';
}

  echo "用户名：".$row['uname']
        ."<br>头像:<image src='".$row['avatar']."' width='80px'>"
      ."<br>密码:".$row['pwd']
      ."<br>手机号:".$row['tel']
      ."<br>性别:".$sexx
      ."<br>邮箱:".$row['email'];

}

 ?>
 </p>
 <p style='font-size:30px'><a href="/user/edituserinfo.php?uid=<?php echo $uid?>">修改信息</a></p>
<p style='font-size:30px'><a href="/user/upload.php?uid=<?php echo $uid?>">上传头像</a></p>
<p style='font-size:30px'><a href="/user/order.php?uid=<?php echo $uid?>">我的订单</a></p>
</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
