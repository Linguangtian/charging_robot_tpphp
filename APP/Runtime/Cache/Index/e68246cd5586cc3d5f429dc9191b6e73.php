<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>提现</title>

    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
        .tixian-index-b{height: auto;}
    </style>

  </head>
  <body style="background: #131933;">
  	
  	<div class="award-index-t">
   	<p class="award-ysy">可提现金额</p>
   	<p class="award-sss"><?php echo ($money); ?></p>
   </div>
   
   <div class="award-index-a">
   	<p class="award-ysy">已提现(元)</p>
   	<p class="award-sss"><?php echo ($yiti); ?></p>
   </div>
   
   <div class="award-index-b">
   	<a class="awaredd-ls" href="<?php echo U('Index/Wallet/withdrawn');?>">立即提现</a>
   </div>
  	
  	<div class="tixian-index-b">
  		<p class="tixian-iddds">
  			提现规则：<br>
            1、工作日8:30-17:40提现T+1到帐。<br>
            2、满100元提现、10的倍数提现、5%+3元/笔手续费。<br>
            3、会员首笔提现不限金额，不收取手续费。<br>
            备注：您的提现钱包必须与充值时真实姓名一致，否则不予通过。
  		</p>
  	</div>
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	

<script type="text/javascript">
    var m_WithdrawalsLimit = "0";
</script>


</body>
</html>