<!DOCTYPE>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="用户登录">
<meta name="description" content="用户登录">
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/general.js"></script>
<script src="../js/jquery.validate.min.js"></script>
</head>
<body>
<!-- 头部开始 -->
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href=""><img src="../images/logo.gif"></a></div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>
    <form method="post" action="/user/doregist.php" id="regform">
      <input type="password" value="" class="hide">
      <div class="login ml530">
        <h2 class="c666">用户注册</h2>
        <dl class="username mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="username" id="username" type="text" placeholder="请输入用户名" required></dd>

        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="password" id="password" type="password" placeholder="请输入密码" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="tel"  type="text" placeholder="手机号" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="sex" type="text" placeholder="性别" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="email"  type="text" placeholder="邮箱" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="address"  type="text" placeholder="地址" required></dd>
        </dl>
        <!--  -->
        <div class="ck module mt20 cut">
          <div class="fl"></div>
          <div class="fr"></div>
        </div>
        <input class="form-submit aln-c radius4 mt20" type="submit" value="注&nbsp;册">


      </div>
    </form>
  </div>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<div class="footer mt20">
  <div class="links radius4 mt20">

      </div>

</div><!-- 页脚结束 -->

<script type="text/javascript">
$().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
  $("#regform").validate();
}
</script>

</body></html>
