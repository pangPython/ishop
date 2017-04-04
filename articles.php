<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>文章</title>
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
$sql = "select * from wenzhang";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
      echo "<li><a style = 'font-size:19px' href='/article.php?wzid=".$row['id']."'>".$row['title']."  作者：".$row['author']." 时间:".$row['time']."</a></li><br>";

  }
}

 ?>
</ul>
</div>
<?php
include 'db_close.php';
 ?>
