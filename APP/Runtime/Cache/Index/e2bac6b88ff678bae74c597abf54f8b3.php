<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>直接推荐</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
    </style>


</head>
<body style="background: #131933;">


<div class="tixianlog">
		<p class="tixianlog_t"> <span>姓名</span> <span>电话</span> <span>金额</span> <span>直推</span> </p>
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><p class="tixianlog_b"> <span><?php echo ($v["truename"]); ?></span> <span><?php echo ($v["username"]); ?></span> <span><?php echo ($v["money"]); ?></span> <span><?php echo ($v["zhitui"]); ?></span> </p><?php endforeach; endif; ?>
	</div>



</body>
</html>