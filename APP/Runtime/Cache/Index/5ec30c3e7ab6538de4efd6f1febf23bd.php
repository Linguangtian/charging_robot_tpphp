<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<style>
	.phb-shouyi{
		overflow: hidden;
	}

</style>
<html>
	<head>
		<meta charset="UTF-8">
		<title>排行榜</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<link rel="stylesheet" href="/Public/dianyun/css/app.css">
        <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
		<style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		text-decoration: none;
    		list-style: none;
    	}
    	body{
    		background: url(/Public/dianyun/img/about-bg.png)no-repeat #151a36;
    		background-size: 100% ;
    	}
    </style>
	</head>
	<body>
		
		<div class="help-index-top">
  		<p>排行榜</p>
  	    </div>
		
		<div class="paihangbang">
			<ul>
				<li class="paihanbb-t">
					<p style="text-align: left;box-sizing: border-box;padding-left: 0.5rem;">用户头像</p>
					<p style="text-align: left;padding-left: 0.2rem;box-sizing: border-box;">用户手机号码</p>
					<p style="text-align: right;box-sizing: border-box;padding-right: 1rem;">推广收入</p>
				</li>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
						<img src="/Public/dianyun/img/lg.png?v=102"/>
						<p><?php echo (yc_phone($v["user_name"])); ?></p>
						<a class="phb-shouyi"><?php echo ($v["money"]); ?>元</a>
					</li><?php endforeach; endif; ?>

				<li class="yisyh">
					<p>以上所有用户奖励1000元现金</p>
				</li>
			</ul>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>