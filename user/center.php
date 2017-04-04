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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0027)http://localhost/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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

<script type="text/template" id="logined-userbar-tpl">
<a class="m"><i class="icon"></i>${username}</span><b class="icon"></b></a><font class="c999 ml10">欢迎您回来!</font>
<div class="m hide">
  <div class="avatar fl">
    {@if avatar != null}
    <a href="http://localhost/user/profile.html"><img width="60" height="60" src="http://localhost/upload/user/avatar/${avatar}" /></a>
    {@else}
    <a href="http://localhost/user/index.html"><img width="60" height="60" href="http://localhost/user/profile.html" src="http://localhost/public/image/noavatar_m.gif" /></a>
    {@/if}
  </div>
  <ul>
    <li><a href="http://localhost/user/index.html">进入用户中心</a></li>
    <li><a href="http://localhost/user/profile.html">编辑资料</a></li>
    <li><a href="http://localhost/user/logout.html">退出</a></li>
  </ul>
</div>
</script>

<!-- 头部开始 -->
<div class="header mt30">
  <div class="w1100">
    <!-- 头部主体开始 -->
    <div class="module cut">
      <div class="logo fl"><a href="/index.php"><img alt="JUBAOPEN商城系统" src="../images/logo.gif" border="0"></a></div>
      <!-- 头部搜索开始 -->
      <div class="top-search fl">
        <form method="get" action="/search/index.html">
                    <div class="sf cut">
            <input class="fl" name="kw" type="text" value="" placeholder="双11提前购，畅想全年最低价">
            <button class="fr" type="submit">搜 索</button>
          </div>
        </form>

      </div>
      <!-- 头部搜索结束 -->
      <!-- 头部购物车开始 -->
      <div class="top-cart fr">
        <div class="radius4 mt10"><i class="icon"></i><a href="http://localhost/cart/index.html" id="cartbar"><font>我的购物车</font>(<b>0</b>)</a></div>
      </div>
      <!-- 头部购物车结束 -->
    </div>
    <!-- 头部主体结束 -->
    <div class="module mt20">
      <!-- 导航开始 -->
      <div class="nav cut">

        <div class="cross cut">
          <ul>
            <li><a href="http://localhost/">首页</a></li>
            <?php
            if(isset($_REQUEST['uid'])){
              $uid = $_REQUEST['uid'];


            // echo $_SESSION['uid'.$uid];
            // exit;
            if(isset($_SESSION['uid'.$uid]))
            {
	             ?>
               <li><a href="/user/center.php?uid=<?php echo $uid?>">用户中心</a></li>
              <li><a href="/logout.php?uid=<?php echo $uid?>">退出</a></li>
               <?php

             }
           }
             else
             {?>
               <li><a href="./user/login.php">登录</a></li>
               <li><a href="/regist.php">注册</a></li>
               <?php

              }
            ?>

			</ul>
        </div>
      </div>
      <!-- 导航结束 -->
    </div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">

      <br>  <br>  <br>  <br>
<?php

while($row = $result->fetch_assoc()) {

  echo "<p style='font-size:30px'>用户名：".$row['uname']."<br>密码:".$row['pwd']."<br>手机号:".$row['tel']
  ."<br>性别:".$row['sex']."<br>邮箱:".$row['email']
  ."<br>密码:".$row['pwd'].'</p>';

}

 ?>
<p style='font-size:30px'><a href="/user/upload.php">上传头像</a></p>
<p style='font-size:30px'><a href="/user/order.php">我的订单</a></p>
</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
