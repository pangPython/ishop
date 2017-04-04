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
<?php include 'header.php'; ?>
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
}else{
  echo "没有搜索到关于：".$keywords;
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
