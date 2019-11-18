<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>首页</title>

    
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <link rel="stylesheet" href="/Public/css/style.css">
    <script type="text/javascript" src="/Public/js/TouchSlide.1.1.js"></script>
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
    </style>
</head>
<body style="background: #151a37;">
	
	
	<div class="index-top">
		<p class="hello">Hi，欢迎来到云智5G服务。</p>
		<p class="gonggao">全新高性能共享5G服务器上架了</p>
	</div>
	
	<div class="index-c">
		<ul>
			<a href="<?php echo U('Index/Wallet/paihangban');?>">
			<li class="il1">
				<img src="/Public/dianyun/img/i-link-itemIcon1.png"/>
				<p>收益</p>
			</li>
			</a>
			<a href="<?php echo U('Index/Index/tgm');?>">
			<li class="il2">
				<img src="/Public/dianyun/img/i-link-itemIcon2.png"/>
				<p>邀请赚钱</p>
			</li>
			</a>
			
			<a href="<?php echo U('Index/New/help');?>">
			<li class="il3">
				<img src="/Public/dianyun/img/i-link-itemIcon3.png"/>
				<p>项目说明</p>
			</li>
			</a>
			
		</ul>
	</div>
	
	
	
	
	
	<div class="xxcctt">
		<a href="<?php echo U('Index/Task/index');?>">
		<img src="/Public/dianyun/img/zzz.png"/>
		<p class="yyp">恭喜您</p>
		<p class="yyyp">获得一台5G服务器</p>
		<a class="lqu" href="#">领</a>
		</a>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="index-d">
		<p class="index-d-p"> <img src="/Public/dianyun/img/hot-icon.png"/>热门5G服务器 <span>更多</span> </p>
		
		<ul>
			<!--调用后台数据-->
			<?php if(is_array($typeData)): foreach($typeData as $key=>$v): ?><li>
				<p class="index-nc"><?php echo ($v["title"]); ?></p>
					<p class="index-fd">合约有效期：<?php echo ($v["yxzq"]); ?>小时</p>
				<p class="index-cd">每小时收益：<?php echo ($v["shouyi"]); ?>元</p>
				<p class="index-bq">  <span>5G服务器</span> <span>高性能</span> </p>
				<p class="index-jz"><?php echo ($v["price"]); ?> </p>
				<p class="index-cd">租中的服务器数量：<?php echo ($v["have"]); ?>台</p>
				<p class="index-cd">剩余可租台数：<?php echo ($v["unhave"]); ?>台</p>
				<a href="<?php echo U('Robot/buy',array('id'=>$v['id']));?>" class="index-ljgm"><?php echo ($v["price"]); ?>元租凭服务器</a>
			</li><?php endforeach; endif; ?>
			
		</ul>
		
	</div>
	
	
	<div class="index-i-lb">
		
	</div>
	<div class="area-20 buyer-history" style="border: 0px red solid;background: #202444; margin-top: 0px;width: 84%;margin-left: 3%;border-radius: 10px;box-shadow: 0px 3px 6px 0px rgba(85,54,237,0.13);background: #202543;margin-bottom: 5rem;">
							<h3 style="color: #ecbf54;"><i class="icon iconfont icon-yonghuming"></i> 最近购买用户</h3>
								<marquee scrolldelay="200" id="lstBuyHistory" direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: 60px;">
								<ul id="ulBuyHistory">
									<?php if(is_array($mai_log)): foreach($mai_log as $key=>$v): ?><li style="color: #ecbf54;"><?php echo (yc_phone($v["user"])); ?>&nbsp;&nbsp;购买了[<?php echo ($v["project"]); ?>]5G服务器&nbsp;</li>&nbsp;<!--<?php echo (mb_substr($v["addtime"],5,11,'utf-8')); ?>--><?php endforeach; endif; ?>
								</ul>
							</marquee>
						</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<footer>
		
		<div class="foot_bo">
		<a href="#">
			<img src="/Public/dianyun/img/i2.png"/>
			<p class="xz">首页</p>
		</a>
		</div>
		
		
		<div class="foot_cen">
		<a href="<?php echo U('Index/Robot/robot');?>">
			<img src="/Public/dianyun/img/i5.png"/>
		</a>
		</div>
		
		
		<div class="foot_bo">
		<a href="<?php echo U('Index/Wallet/index');?>">
			<img src="/Public/dianyun/img/i3.png"/>
			<p>我的</p>
		</a>
		</div>
		
		
	</footer>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <script type="text/javascript">
      TouchSlide({
        slideCell:"#slideBox",
        titCell:"#slideBox .hd ul",
        mainCell:"#slideBox .bd ul",
        effect:"leftLoop",
        autoPage:true,
        autoPlay:true,
        interTime:3000

      });
    </script>

</body>
</html>