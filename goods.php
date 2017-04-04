<?php
session_start();
include 'conn.php';
//获取URL参数中的id
$goods_id = $_REQUEST['id'];

   ?>
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <!-- saved from url=(0038)http://localhost/goods/index.html?id=5 -->
   <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <meta name="verydows-baseurl" content="http://localhost">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <title>商城系统</title>
   <link rel="stylesheet" type="text/css" href="./images/general.css">
   <link rel="stylesheet" type="text/css" href="./images/goods.css">
   <script type="text/javascript" src="./images/jquery.js"></script>
   <script type="text/javascript" src="./images/jquery.zoom.min.js"></script>
   <script type="text/javascript" src="./images/general.js"></script>
   <script type="text/javascript" src="./images/goods.js"></script>
   <script type="text/javascript">
   $(function(){
     showReviewList(1);
     $('#contabs li').eq(2).on('click', function(){
       var container = $('#rating-satis'), move = parseFloat(container.find('dt').text()) * 100 - 14;
       container.animate({'padding-left': move}, 1000);
     });
   });



   function reviewPageTurn(page_id){showReviewList(page_id);}
   function reviewPageJump(e){showReviewList($(e).prev('input').val())}
   </script>
   </head>
   <body>

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
   <div class="header">
     <div class="w1100">
       <div class="module cut">
         <div class="logo fl"><a href="http://localhost/index.html"><img alt="JUBAOPEN商城系统" src="./images/logo.gif" border="0"></a></div>
         <!-- 头部搜索开始 -->
         <div class="top-search fl">
           <form method="get" action="http://localhost/search/index.html">
                       <div class="sf cut"><input class="fl" name="kw" type="text" value="" placeholder="双11提前购，畅想全年最低价"><button class="fr" type="submit">搜 索</button></div>
           </form>
                 </div>
         <!-- 头部搜索结束 -->
         <!-- 头部购物车开始 -->
         <div class="top-cart fr">
           <div class="radius4 mt10"><i class="icon"></i><a href="http://localhost/cart/index.html" id="cartbar"><font>我的购物车</font>(<b>0</b>)</a></div>
         </div>
         <!-- 头部购物车结束 -->
       </div>
       <div class="module mt20">
         <!-- 导航开始 -->
         <div class="nav">

           <div class="cross cut">
             <ul>


               <?php
               if(isset($_REQUEST['uid'])){
                 $uid = $_REQUEST['uid'];


               // echo $_SESSION['uid'.$uid];
               // exit;
               if(isset($_SESSION['uid'.$uid]))
               {
                  ?>
                  <li><a href="/index.php?uid=<?php echo $uid?>">首页</a></li>
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
   </div><!-- 头部结束 -->

   <!-- 主体开始 -->
   <div class="container w1100 mt10">
     <div class="gtds cut">
       <div class="gimbox fl">
         <!-- 商品图片开始 -->
         <div class="module">
           <div class="im cut">
             <div id="goods-imgarea" style="position: relative; overflow: hidden;"><img src="./images/9658d66b91d2f3e.jpg"><img src="./images/9658d66b91d2f3e(1).jpg" class="zoomImg" style="position: absolute; top: 0px; left: 45.5px; opacity: 0; width: 300px; height: 300px; border: none; max-width: none; max-height: none;"></div>
             <ul class="hide" id="goods-imgsrc">
               <li data-zoom="http://localhost/upload/goods/prime/0/9658d66b91d2f3e.jpg"><img src="./images/9658d66b91d2f3e.jpg"></li>
                                       <li data-zoom="http://localhost/upload/goods/album/0/3458d66b9dd5515.jpg"><img src="./images/3458d66b9dd5515.jpg"></li>
                                     </ul>
             <i class="zoom icon"></i> </div>
           <div class="tmb mt10 cut">
             <a class="tmb-arrow lh disabled" id="tmb-back-btn"><i class="icon">&lt;</i></a>
             <div class="tmb-im cut">

             </div>
             <a class="tmb-arrow rh disabled" id="tmb-forward-btn"><i class="icon">&gt;</i></a>
           </div>
         </div>
         <!-- 商品图片结束 -->

       </div>
       <div class="gtbox cut">
<?php
$sql = "select * from goods where id = '".$goods_id."'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // 输出每行数据
      while($row = $result->fetch_assoc()) {

          ?>


         <h1>

         </h1>
         <p class="mt8 c888"></p><p style="font-size:30px">
<?php
echo $row['goods_name'];
 ?>
         </p><p></p>
         <div class="gatt module mt10 cut">
           <dl>
             <dt>商品ID:</dt>
             <dd>
<?php
  echo $row['id'];
 ?>
             </dd>
           </dl>

                   <dl class="mt5">
             <dt>价格:</dt>
             <dd class="npri"><i>¥</i><font id="nowprice" data-price="89.00">
<?php echo $row['price']; ?>

             </font></dd>
           </dl>
                 </div>
                 <?php
             }
         } else {
             echo "0 个结果";
         }
        ?>
         <div class="cutline mt10"></div>
         <div class="gatt module">
  <form method="post" action="/user/buy.php?gid=<?php echo $goods_id?>&uid=<?php echo $uid?>" id="buy-form">
           <dl class="mt15">
             <dt>购买数量:</dt>
             <dd >
               <input name="count"  type="text">
               <font class="c999 ml5">件</font>
             </dd>
           </dl>
           <input type="submit"  value="立即购买">
           <a href="/user/addcart.php">加入购物车</a>
           </form>
         </div>
         <div class="buy mt30"><a class="add-cart icon" onclick="addToCart(this, &#39;5&#39;)">加入购物车</a><a class="buy-now icon" onclick="toBuy(&#39;5&#39;, &#39;http://localhost/cart/index.html&#39;)">立即购买</a></div>
       </div>
     </div>
     <div class="module mt10 cut">
       <!-- 左边开始 -->
       <div class="w210 fl cut">

       </div>
       <!-- 左边结束 -->

     </div>
     <div class="cl"></div>

     <div class="cl"></div>
     <div class="helpli cut">

     </div>
   </div> </div>
   <!-- 主体结束 -->
   <div class="cl"></div>
   <!-- 页脚开始 -->

   <!-- 评价模板开始 -->
   <script type="text/template" id="review-tpl">
   {@each list as v}
   <dl>
     <dt><div class="avatar">{@if v.avatar != ''}<img width="60" height="60" src="http://localhost/upload/user/avatar/${v.avatar}" />{@else}<i class="icon"></i>{@/if}</div><div class="uname">${v.username}</div></dt>
     <dd>
       <div><span class="rating s_${v.rating}"></span><font>${v.satisficing}</font></div>
       <p class="mt10 c666">${v.content}</p>
       <p class="mt8 caaa aln-r">${v.created_date}</p>
     </dd>
     {@if v.replied != ''}
     <dd class="replied mt10">
       <p class="c666"><strong>客服回复：</strong>${v.replied.content}</p>
       <p class="mt5 caaa aln-r">${v.replied.dateline}</p>
     </dd>
     {@/if}
   </dl>
   {@/each}
   </script>
   <!-- 评价模板结束 -->
   <!-- 评价翻页模板开始 -->
   <script type="text/template" id="review-paging-tpl">
   <div class="module aln-r cut">
     <div class="paging small">
       {@if paging.first_page == paging.current_page}<span class="disabled">上一页</span>{@else}<a onclick="reviewPageTurn(${paging.prev_page})">上一页</a>{@/if}
       {@each paging.all_pages as v}
       {@if paging.current_page == v}<span class="cur">${paging.current_page}</span>{@else}<a onclick="reviewPageTurn(${v})">${v}</a>{@/if}
       {@/each}
       {@if paging.last_page == paging.current_page}<span class="disabled">下一页</span>{@else}<a onclick="reviewPageTurn(${paging.next_page})">下一页</a>{@/if}
       <span class="tot">共<b>${paging.total_page}</b>页</span>
       <span class="jump">转到第<input type="text" value="${paging.current_page}" />页<button type="button" onclick="reviewPageJump(this)">确 定</button></span>
     </div>
   </div>
   </script>
   <!-- 评价翻页模板结束 -->
   <!-- 加入购物车对话框开始 -->
   <div class="tocart-dialog cut" id="tocart-dialog">
     <p><i class="icon"></i><font class="ml10"></font></p>
     <div class="mt20"><a class="sm-green" href="http://localhost/cart/index.html">结算付款</a><a class="sm-gray" onclick="cancelTocartDialog()">继续购物</a></div>
     <a class="c999" onclick="cancelTocartDialog()">×</a>
   </div>
   <!-- 加入购物车对话框结束 -->
   <!-- 用户登陆框开始 -->
   <script type="text/javascript">
   function popLoginbar(callback){
     var login = $('#vdspoploginbar');
     $.getJSON("http://localhost/api/captcha/login", function(captchaStatus){
       if(captchaStatus.enabled){
         resetCaptcha();
         login.find('.captcha').show();
       }

       var width = login.width(), height = login.height(), left = ($(window).width()-login.outerWidth(true))/2, top = ($(window).height()-login.outerHeight(true))/2;

       $.vdsMasker(true);
       login.show().css({width:0, height:0, left:'50%', top:'50%'}).find('span.vdsfielderr').remove();
       login.animate({width:width, height:height, left:left, top:top}, 'fast').find('.close').on('click', function(){
         $.vdsMasker(false);
         login.hide().find('span.vdsfielderr').remove();
       });
       //登录请求
       login.find('.go').on('click', function(){
         var username = login.find('input[name="username"]'), password = login.find('input[name="password"]'), captcha = login.find('dl.captcha'), btn = this;
         username.vdsFieldChecker({rules:{required:[true, '请输入用户名']}, tipsPos:'fixed'});
         password.vdsFieldChecker({rules:{required:[true, '请输入密码']}, tipsPos:'fixed'});
         if(!captcha.is(':hidden')){
           captcha.find('input[name="captcha"]').vdsFieldChecker({rules: {required:[true, '请输入验证码']}, tipsPos:'fixed'});
         }
         var formChecker = login.find('form').vdsFormChecker({isSubmit: false});

         if(formChecker){
           $.ajax({
             type: 'post',
             dataType: 'json',
             url: "http://localhost/api/user/login",
             beforeSend: function(){$(btn).addClass('disabled').text('正在登陆...').prop('disabled', true)},
             data: {username:username.val(), password:hex_md5($('#password').val()+'Verydows'), captcha:captcha.find('input[name="captcha"]').val(), stay:login.find('input[name="stay"]').val()},
             success: function(res){
               if(res.status == 'success'){
                 $.vdsMasker(false); login.hide(); viewTopUserbar();
                 if(typeof(callback) === 'function') callback();
               }else{
                 login.find('p.red').text(res.msg).show().fadeOut(2500, function(){
                   $(btn).removeClass('disabled').text('登 陆').prop('disabled', false);
   	resetCaptcha();
                 });
                 if(res.captcha == 'enabled' && captcha.is(':hidden')){
   	login.find('.captcha').show();
   	login.css({height:'auto', top:login.position().top - (captcha.outerHeight(true) + login.find('div.captcha').outerHeight(true))});
                 }
               }
             }
           });
         }
       });
     });
   }

   function resetCaptcha(){
     var container = $('#vdspoploginbar'), src = "http://localhost/api/captcha/image?v=random";
     container.find('.captcha img').attr('src', src.replace('random', Math.random()));
     container.find('input[name="captcha"]').focus();
   }
   </script>

   <script type="text/javascript" src="./images/md5.js"></script><!-- 用户登陆框结束 -->
   <script type="text/javascript" src="./images/juicer.js"></script>


   </body></html>
