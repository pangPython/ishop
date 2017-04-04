<?php
include '../conn.php';
//获取注册表单的数据
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel = $_REQUEST['tel'];
$sex = $_REQUEST['sex'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
?>
<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="../images/general.css">
<link rel="stylesheet" type="text/css" href="../images/login.css">
<script type="text/javascript" src="../images/jquery.js"></script>
<script type="text/javascript" src="../images/general.js"></script>

</head>
<body>
<!-- 头部开始 -->
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href="http://localhost/index.php"><img src="../images/logo.gif"></a></div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>

<?php
$sql = "INSERT INTO user(uname,pwd,tel,sex,email,address) VALUES('".$username."','".$password."','".$tel."','".$sex."','".$email."','".$address."')";

if ($conn->query($sql) === TRUE) {
?>
注册成功，请
<a href="/user/login.php">登录</a>！
<?php
} else {
  ?>
  注册失败，请重新
  <a href="/user/regist.php">注册</a>！
  <?php
}

$conn->close();

 ?>

  </div>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<div class="footer mt20">
  <div class="links radius4 mt20">

      </div>

</div><!-- 页脚结束 -->
<script type="text/javascript" src="../images/md5.js"></script>


</body></html>
