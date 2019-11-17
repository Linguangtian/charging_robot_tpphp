<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="wap-font-scale" content="no">
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
	<style>
	.wrapper{
	min-height:auto;
	}
	body{
		background-size: auto;
	}
	*{
		margin: 0;
		padding: 0;
		text-decoration: none;
		list-style: none;
	}
	</style>
</head>

  <body style="background: url(/Public/dianyun/img/login_bg.png) no-repeat #151a37;">
  	
  	<div class="login_logo">
  		<img src="/Public/dianyun/img/lg.png"/>
  	</div>
  	
  	
  	<div class="login_form">
  		<form name="form" method="post" id="form">
  		<div class="input-container" >
  			<div class="input-control">
  				<i class="icon iconfont icon-yonghuming"></i>
  				<input class="inputfield" type="text" id="txtUid" name="username" placeholder="会员ID或手机号码" maxlength="11" value="">
  			</div>
  		</div>
  		<div class="input-container">
  			<div class="input-control">
  				<i class="icon iconfont icon-mima"></i>
  				<input class="inputfield" type="password" id="password" name="password" placeholder="登录密码" value="">
  			</div>
  		</div>
  	
  		<div class="row loginfield">
  			
  		</div>
  	
  		<div class="center">
  			<div class="space-20"></div>
  			
  			<a href="javascript:tryLogin();" class="btn_submit_my login_la">
  				立即登录
  			</a>
  		</div>
  	</form>
  	<a href="<?php echo U('Index/Login/reg');?>" class="login_laa" style="margin-top: 1rem;">立即注册？</a>
  	</div>
  	<div>&#22823;&#37327;&#28304;&#30721;&#65292;&#25345;&#32493;&#26356;&#26032;&#65306;&#119;&#119;&#119;&#46;&#108;&#97;&#110;&#114;&#101;&#110;&#122;&#104;&#105;&#106;&#105;&#97;&#46;&#99;&#111;&#109;</div>
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	

<script src="/Public/js/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
	$(".btn_submit_my").click(function(){
			$.ajax({
				url:'<?php echo U("Index/Login/index");?>',
				type:'POST',
				data:$("#form").serialize(),
				dataType:'json',
				success:function(json){
						alert(json.info);
						if(json.result ==1){
							window.location.href=json.url;
						}
				},
				error:function(){
						alert("网络故障");
				}
			})

	})


</script>

<script type="text/javascript" src="https://js.users.51.la/19447899.js"></script>

	</body>
</html>