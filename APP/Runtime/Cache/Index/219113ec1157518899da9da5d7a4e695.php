<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">

	<title>客服服务</title>

	<link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">
	<link rel="stylesheet" href="/Public/dianyun/css/app.css">
	<link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">


</head>
<body onload="onload()" class="framework7-root">
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal layout-dark">
</div>

<div class="views">
	<div class="view view-main" data-page="system-service">
		<div class="pages">
			<div data-page="system-service" class="page navbar-fixed" isinited="true">
				<div class="navbar theme-white">
					<div class="navbar-inner">
						<div class="left">
							<a href="javascript:history.go(-1);" class="external link"> <i class="icon iconfont icon-angleleft" style="transform: translate3d(0px, 0px, 0px);"></i>返回</a>
						</div>
						<div class="center" data-i18n="member.myinfo" style="left: -24px;color: #fff;">联系客服</div>
						<div class="right"></div>
					</div>
				</div>

				<div class="page-content" style="background: #33a4ff;">
					<div class="content-block">
						<div id="serviceList" class="row">

							<div class="col-100 h-jgg2">
								<div class="row service-bar">
									<div class="col-20"><img class="avatar" src="http://ae01.alicdn.com/kf/HTB1yjsZaBCw3KVjSZFl763JkFXak.png"></div>
									<div class="col-50">
										<label>QQ客服一001</label>
										<span id="copy-num" style="color: #fff;"><?php echo ($kefu1); ?></span>
									</div>
									<div class="col-30" style="padding-top:10px;">
										<a href="javascript:void(0);" onclick="jsCopy()" class="external button-clipboard" data-clipboard-target="#lblNo0">
											<img src="http://ae01.alicdn.com/kf/HTB18UASavWG3KVjSZPc762kbXXaT.png" style="width:70px;height: auto;">
										</a>
									</div>
								</div>
							</div>
							<?php if(kefu2): ?><div class="col-100 h-jgg2">
								<div class="row service-bar">
									<div class="col-20"><img class="avatar" src="http://ae01.alicdn.com/kf/HTB1yjsZaBCw3KVjSZFl763JkFXak.png"></div>
									<div class="col-50">
										<label>QQ客服一002</label>
										<span id="copy-numa" style="color: #fff;"><?php echo ($kefu2); ?></span>
									</div>
									<div class="col-30" style="padding-top:10px;">
										<a href="javascript:void(0);" onclick="jsCopya()" class="external button-clipboard" data-clipboard-target="#lblNo1">
											<img src="http://ae01.alicdn.com/kf/HTB18UASavWG3KVjSZPc762kbXXaT.png" style="width:70px;height: auto;">
										</a>
									</div>
								</div>
							</div><?php endif; ?>

							<div class="col-100 h-jgg2">
								<div class="row service-bar">
									<div class="col-20"><img class="avatar" src="http://ae01.alicdn.com/kf/HTB1yjsZaBCw3KVjSZFl763JkFXak.png"></div>
									<div class="col-50">
										<label>客服邮箱</label>
										<span id="copy-numa" style="color: #fff;"><?php echo ($email); ?></span>
									</div>
									<div class="col-30" style="padding-top:10px;">
										<a href="javascript:void(0);" onclick="jsCopya()" class="external button-clipboard" data-clipboard-target="#lblNo1">
											<img src="http://ae01.alicdn.com/kf/HTB18UASavWG3KVjSZPc762kbXXaT.png" style="width:70px;height: auto;">
										</a>
									</div>
								</div>
							</div>

							<div class="col-100 h-jgg2">
								<div class="row service-bar">
									<div class="col-20"><img class="avatar" src="http://ae01.alicdn.com/kf/HTB1yjsZaBCw3KVjSZFl763JkFXak.png"></div>
									<div class="col-50">
										<label>客服微信</label>
										<span id="copy-numa" style="color: #fff;"><?php echo ($wechat); ?></span>
									</div>
									<div class="col-30" style="padding-top:10px;">
										<a href="javascript:void(0);" onclick="jsCopya()" class="external button-clipboard" data-clipboard-target="#lblNo1">
											<img src="http://ae01.alicdn.com/kf/HTB18UASavWG3KVjSZPc762kbXXaT.png" style="width:70px;height: auto;">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-100 h-jgg2">
								<div class="row service-bar">
									<div class="col-20"><img src="/Public/dianyun/img/service-tel.png"></div>
									<div class="col-60">
										<label>服务电话</label>
										<span style="color: #FFFFFF;"><?php echo ($tel); ?></span>
									</div>
									<div class="col-20"><a href="tel://<?php echo ($tel); ?>" class="external">
										<img src="/Public/dianyun/img/service-dial.png" style="width:32px;height: auto;">
									</a></div>
								</div>
							</div>
						</div>

						<div style="height:30px"></div>
						<!--<div class="row">
							<div class="col-100">
								<a href="tel://<?php echo ($tel); ?>" class="external button button-large button-fill submitbtn">
									<img src="/Public/dianyun/img/service-dial2.png" style="width:auto; height:35px;">
								</a>
							</div>
						</div>-->

					</div>
				</div>

			</div>
						</div>
					</div>
				</div>





<script type="text/javascript">
    function jsCopy(){
        var e = document.getElementById("copy-num").innerHTML;
		alert(e);
    }
    function jsCopya(){
        var a = document.getElementById("copy-numa").innerHTML;
        alert(a);
    }
    function jsCopyb(){
        var b = document.getElementById("copy-numb").innerHTML;
        alert(b);
    }
</script>

</html>