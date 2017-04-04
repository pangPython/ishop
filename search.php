<?php
session_start();
include 'conn.php';


?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>搜索</title>
<link rel="stylesheet" type="text/css" href="../images/general.css">
<link rel="stylesheet" type="text/css" href="../images/index.css">
<script type="text/javascript" src="../images/jquery.js"></script>
<script type="text/javascript" src="../images/general.js"></script>
<script type="text/javascript" src="../images/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<div class="header mt30">
  <div class="w1100">
    <!-- 头部主体开始 -->
    <div class="module cut">
      <div class="logo fl"><a href="/index.php"><img alt="" src="../images/logo.gif" border="0"></a></div>
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

            <?php
            if(isset($_REQUEST['uid'])){
              $uid = $_REQUEST['uid'];

              $sql = "SELECT * FROM user where id = '".$uid."'";
              $result = $conn->query($sql);

            // echo $_SESSION['uid'.$uid];
            // exit;
            if(isset($_SESSION['uid'.$uid]))
            {
	             ?>
               <li><a href="/index.php??uid=<?php echo $uid?>">首页</a></li>
               <li><a href="/user/center.php?uid=<?php echo $uid?>">用户中心</a></li>
              <li><a href="/logout.php?uid=<?php echo $uid?>">退出</a></li>
               <?php

             }
           }
             else
             {?>
               <li><a href="/index.php">首页</a></li>
               <li><a href="/user/login.php">登录</a></li>
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
        <ul>
<?php

if (isset($_REQUEST['kw'])) {

  $keywords = $_REQUEST['kw'];
//包含关键词，进行搜索
$sql = "select * from goods where goods_name like '%".$keywords."%'";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
    echo "<li><a style = 'font-size:19px' href='/goods.php?id=".$row['id']."'><img alt='浅灰色T恤女士上衣' src='./images/9658d66b91d2f3e.jpg'>".$row['goods_name']."</a></li><br>";
  }
}
}else {
  //不包含关键词，显示全部商品
  echo "all goods";
}


 ?>
</ul>
</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
<?php
include 'db_close.php';
 ?>
