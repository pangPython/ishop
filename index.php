<?php
session_start();
include 'conn.php';

$flag=0;

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0027)http://localhost/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="verydows-baseurl" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<title>聚宝盆商城</title>
<link rel="stylesheet" type="text/css" href="./images/general.css">
<link rel="stylesheet" type="text/css" href="./images/index.css">
<script type="text/javascript" src="./images/jquery.js"></script>
<script type="text/javascript" src="./images/general.js"></script>
<script type="text/javascript" src="./images/carousel.js"></script>
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
      <div class="logo fl"><a href="/index.php"><img alt="JUBAOPEN商城系统" src="./images/logo.gif" border="0"></a></div>
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
              $flag=1;
	             ?>
               <li><a href="./user/center.php?uid=<?php echo $uid?>">用户中心</a></li>
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
  <div class="module cut">
    <!-- 商品分类开始 -->
    <div class="catebar w210 fl">
</div>
    <!-- 商品分类结束 -->
    <!-- 轮播图片广告开始 -->
    <div class="w640 fl cut"><div class="carousel cut">
  <div class="carousel-imgs cut">
  <a href="http://localhost/index.html" style="display: block;">
    <img src="./images/56e6a9d26d76d3GZ7ISlt5y10455.jpg" width="630" height="240" alt="VIVO Xplay5 快无边界" border="0">
  </a>
  <a href="http://localhost/article/view.html?id=4" style="display: none;">
    <img src="./images/56ebb54d3c934W0xGnTL6Pz42200.jpg" width="630" height="240" alt="双11购物狂欢节来啦" border="0">
  </a>
  <a href="https://www.baidu.com/" style="display: none;">
    <img src="./images/56ebc00d857f6mPasxHIy0S76596.jpg" width="630" height="240" alt="正式版发布啦!点击查看详情" border="0">
  </a>
</div>
  <ul class="carousel-tog">
    <li class="cur">0</li>
    <li class="">1</li>
    <li class="">2</li>
  </ul>
</div></div>
    <!-- 轮播图片广告结束 -->
    <!-- 资讯开始 -->
    <div class="w240 fr cut">
      <div class="news mt10">
        <h2><a href="http://localhost/article/index.html" class="fr">更多 <i>&gt;</i></a>最新资讯</h2>
                <ul>
                    <li><a title="降价降价了" href="http://localhost/article/view.html?id=3"><b>[公告]</b>降价降价了</a></li>
                    <li><a title="特卖女装上市T恤修身浅灰系列" href="http://localhost/article/view.html?id=2"><b>[促销活动]</b>特卖女装上市T恤修身浅灰系列</a></li>
                    <li><a title="华为新机发布，震撼上市HUAWEI P10 ，人像摄影大师" href="http://localhost/article/view.html?id=1"><b>[新闻]</b>华为新机发布，震撼上市HUAWEI P10 ，人像摄影大师</a></li>
                  </ul>
              </div>
      <!-- 广告位(240x70)开始 -->
      <div class="module mt10"></div>
      <!-- 广告位(240x70)结束 -->
    </div>
    <!-- 资讯结束 -->
  </div>
  <!-- 新品上市开始 -->
  <div class="module mt30 cut">
    <div class="gli_t"><h2 class="fl">所有商品</h2></div>
    <div class="gli w1110">
            <ul>
<?php
$sql = "SELECT * FROM goods";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {

        ?>
        <li>
      <div class="im"><a href="./goods.php?id=<?php echo $row["id"];
          if($flag==1){
            echo '&uid='.$uid;
          }
      ?>"><img alt="浅灰色T恤女士上衣" src="./images/9658d66b91d2f3e.jpg"></a></div>
      <h3><a href="./goods.php?id=<?php echo $row["id"];
      if($flag==1){
        echo '&uid='.$uid;
      }
      ?>">
<?php
echo $row["goods_name"];
 ?>
      </a></h3>
      <p class="price"><i>¥</i>
<?php
echo $row["price"]
 ?>
      </p>
      </li>
        <?php
    }
} else {
    echo "0 个结果";
}
 ?>











              </ul>
          </div>
  </div>
  <!-- 首页横幅Banner广告位一(1110x90)开始 -->
  <div class="module mt20 cut"></div>
  <!-- 首页横幅Banner广告位一(1110x90)结束 -->
  <!-- 新品上市结束 -->

  <!-- 首页横幅Banner广告位二(1110x100)开始 -->
  <div class="module mt20 cut"></div>
  <!-- 首页横幅Banner广告位二(1110x100)结束 -->

  <!-- 首页横幅Banner广告位三(1110x80)开始 -->
  <div class="module mt20 cut"></div>
  <!-- 首页横幅Banner广告位三(1110x80)结束 -->
  <div class="helpper cut">

  <div class="cl"></div>

</div></div>

<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="./images/juicer.js"></script>
</body></html>
