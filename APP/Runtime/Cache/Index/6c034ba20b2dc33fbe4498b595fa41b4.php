<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0057)http://4.sxhengtaiweiye.com.cn/index.php/index/shop/plist -->
<html class="pixel-ratio-1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link type="text/css" rel="stylesheet" href="/Public/dianyun/css1/lib.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <title>购买充电宝</title>


    <!--<link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">-->
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">

</head>
<body style="background: #151a37;">
	
	
	<div class="index-d" style="margin-bottom: 2rem;">
		<p class="index-d-p"> <img src="/Public/dianyun/img/hot-icon.png" />充电宝列表</p>
	
		<ul>
			<?php if(is_array($typeData)): foreach($typeData as $key=>$v): ?><li>
				<p class="index-nc"><?php echo ($v["title"]); ?></p>
				<p class="index-fd">发电周期：720小时</p>
				<p class="index-cd">预计充电：<?php echo ($v["shouyi"]); ?>元</p>
				<p class="index-bq"> <span>全新机型</span> <span>高性能</span> </p>
				<p class="index-jz"> <?php echo ($v["price"]); ?> <span>元</span> </p>
				<a href="<?php echo U('Robot/buy',array('id'=>$v['id']));?>" class="index-ljgm"><?php echo ($v["price"]); ?>元建站</a>
			</li><?php endforeach; endif; ?>
			
	
		</ul>
	
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
				<img src="/Public/dianyun/img/i6.png" />
			</a>
		</div>
	
		<div class="foot_bo">
			<a href="<?php echo U('Index/Wallet/index');?>">
				<img src="/Public/dianyun/img/i3.png" />
				<p>我的</p>
			</a>
		</div>
	
	</footer>







</body>
</html>