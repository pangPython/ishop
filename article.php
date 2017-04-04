<?php
session_start();
include 'conn.php';
if (isset($_REQUEST['wzid'])) {
  $wzid = $_REQUEST['wzid'];
}else {
  echo "非法访问";
}



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
<?php
$sql = "select * from wenzhang where id = ".$wzid;
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
      echo "<p style='font-size:30px'>".$row['title']."</p><br>";
      echo "<br>作者：".$row['author']." 时间:".$row['time'];
      echo "<br><br><br><p style='font-size:15px'>".$row['content']."</p>";
  }
}

 ?>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
