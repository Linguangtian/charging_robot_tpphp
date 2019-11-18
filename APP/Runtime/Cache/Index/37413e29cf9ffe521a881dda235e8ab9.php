<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>个人中心</title>

    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		text-decoration: none;
    		list-style: none;
    	}
    </style>
  </head>
  <body style="background: #131933;">
   
     <div class="me-index-top">
     	
     	<div class="me-index-top-t">
     		<img src="/Public/dianyun/img/lg.png?v=102"/>
     		<p class="me-index-top-s"><?php echo ($minfo["mobile"]); ?></p>
     		<p class="me-index-top-k"> <span>领袖</span>  推荐码：XD<?php echo ($minfo["id"]); ?></p>
     	</div>
     	
     	<div class="me-index-top-b">
     		<div class="me-index-top-ab">
     			<p class="me-index-top-uyy"><?php echo ($minfo["money"]); ?><span>元</span> </p>
     			<p>余额</p>
     		</div>
     		
     		<div class="me-index-top-ab">
     			<p class="me-index-top-uyy"><?php echo ($count); ?><span>台</span> </p>
     			<p>5G服务器</p>
     		</div>
     		
     		<div class="me-index-top-ab">
     			<p class="me-index-top-uyy"><?php echo ($minfo["gamecount"]); ?><span>位</span> </p>
     			<p>下级伙伴</p>
     		</div>
     		
     	</div>
     	
     	
     </div>
     
     
     <div class="me-index-cccc">
     	
     	<ul>
     		
     		
     		<li>
     			<a href="<?php echo U('Index/Index/personal');?>"> <img src="/Public/dianyun/img/userLink-icon1.png"/>会员资料</a>
     		</li>
     		
     		
     		
     		<li style="float: right;">
     			<a href="<?php echo U('Index/Wallet/404');?>"> <img src="/Public/dianyun/img/userLink-icon2.png"/>修改密码</a>
     		</li>
     		
     		<li>
     			<a href="<?php echo U('Wallet/award');?>"> <img src="/Public/dianyun/img/userLink-icon3.png"/>我的收益</a>
     		</li>
     		
     		
     		
     		<li style="float: right;">
     			<a href="<?php echo U('Wallet/tixian');?>"> <img src="/Public/dianyun/img/userLink-icon4.png"/>我要提现</a>
     		</li>
     		
     		<li>
     			<a href="<?php echo U('Index/Index/team');?>"> <img src="/Public/dianyun/img/userLink-icon5.png"/>我的下级</a>
     		</li>
     		
     		
     		
     		<li style="float: right;">
     			<a href="<?php echo U('Index/Index/tgm');?>"> <img src="/Public/dianyun/img/userLink-icon6.png"/>推荐好友</a>
     		</li>
     		
     		<li>
     			<a href="<?php echo U('Index/Wallet/bangzhu');?>"> <img src="/Public/dianyun/img/userLink-icon7.png"/>帮助中心</a>
     		</li>
     		
     		
     		
     		<li style="float: right;">
     			<a href="<?php echo U('Index/New/help');?>"> <img src="/Public/dianyun/img/userLink-icon8.png"/>关于街电</a>
     		</li>
     		
     	</ul>
     	
     	
     	<a class="me-index-tc" href="<?php echo U('Index/Index/logout');?>" onclick="if(confirm('确认退出当前账号吗？')==false)return false;">退出系统</a>
     	
     	
     </div>
     

























  	<footer>
  	
  		<div class="foot_bo">
  			<a href="<?php echo U('Index/New/index');?>">
  				<img src="/Public/dianyun/img/i1.png" />
  				<p>首页</p>
  			</a>
  		</div>
  	
  		<div class="foot_cen">
  			<a href="<?php echo U('Index/Robot/robot');?>">
  				<img src="/Public/dianyun/img/i5.png" />
  			</a>
  		</div>
  	
  		<div class="foot_bo">
  			<a href="<?php echo U('Index/Wallet/index');?>">
  				<img src="/Public/dianyun/img/i4.png" />
  				<p class="xz">我的</p>
  			</a>
  		</div>
  	
  	</footer>





</body>
</html>