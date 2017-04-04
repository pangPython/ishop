
<div class="header mt30">
  <div class="w1100">
    <!-- 头部主体开始 -->
    <div class="module cut">
      <div class="logo fl"><a href="/index.php"><img alt="" src="/images/logo.gif" border="0"></a></div>
      <!-- 头部搜索开始 -->
      <div class="top-search fl">
        <form method="get" action="/search.php">
                    <div class="sf cut">
            <input class="fl" name="kw" type="text" value="" placeholder="双11提前购，畅想全年最低价">
            <button class="fr" type="submit">搜 索</button>
          </div>
        </form>

      </div>
      <!-- 头部搜索结束 -->
      <?php
      if (isset($_REQUEST['uid'])) {
        ?>
        <!-- 头部购物车开始 -->
        <div class="top-cart fr">
          <div class="radius4 mt10">
            <i class="icon"></i>
            <a href="/user/cert.php?uid=<?php echo $_REQUEST['uid']?>"><font>我的购物车</font>(<b>0</b>)</a></div>
        </div>
        <!-- 头部购物车结束 -->
        <?php
      }
       ?>

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
               <li><a href="/user/center.php?uid=<?php echo $uid?>">用户中心</a></li>
              <li><a href="/logout.php?uid=<?php echo $uid?>">退出</a></li>
               <?php

             }
           }
             else
             {?>
               <li><a href="./user/login.php">登录</a></li>
               <li><a href="/user/regist.php">注册</a></li>
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
