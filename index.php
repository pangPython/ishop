<?php
session_start();
include 'conn.php';

$flag=0;

 ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./images/general.css">
<link rel="stylesheet" type="text/css" href="./images/index.css">
<script type="text/javascript" src="./images/jquery.js"></script>
<script type="text/javascript" src="./images/general.js"></script>
<script type="text/javascript" src="./images/carousel.js"></script>
<title>聚宝盆商城</title>
</head>
<body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<?php include 'header.php'; ?>

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
  <a href="" style="display: block;">
    <img src="./images/56e6a9d26d76d3GZ7ISlt5y10455.jpg" width="630" height="240" alt="VIVO Xplay5 快无边界" border="0">
  </a>
  <a href="" style="display: none;">
    <img src="./images/56ebb54d3c934W0xGnTL6Pz42200.jpg" width="630" height="240" alt="双11购物狂欢节来啦" border="0">
  </a>
  <a href="" style="display: none;">
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
        <h2><a href="/articles.php" class="fr">更多 <i>&gt;</i></a>最新资讯</h2>
                <ul>
                  <?php
                  $sql = "SELECT * FROM wenzhang limit 3";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // 输出每行数据
                      while($row = $result->fetch_assoc()) {
                   ?>
                    <li><a  href="/article.php?wzid=<?php echo $row['id']?>"><?php echo $row['title'] ?></a></li>
                    <?php
                  }
                }
                     ?>
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



<?php include 'footer.php'; ?>
