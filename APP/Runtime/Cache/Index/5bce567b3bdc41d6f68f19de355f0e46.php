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
	<script src="/Public/dianyun/shouye/jquery.min.js"></script>
	<script src="/Public/dianyun/shouye/swiper.min.js"></script>
	<link href="/Public/dianyun/shouye/swiper.min.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="/Public/js/TouchSlide.1.1.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.pop-background {
			position: fixed;
			left: 0;
			bottom: 0;
			right: 0;
			top: 0;
			z-index: 999999;
			background: rgba(0,0,0,.5);
		}

		.flex {
			width: 100%;
			display: flex;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			align-content: center;
			flex-wrap: nowrap;
		}
		.ggnotice {
			width: 70%;
			max-width: 400px;
			height: auto;
			min-height: 220px;
			background: #ffefe6;
			background: linear-gradient(180deg,#fff,#ffefe6);
			border-radius: 4%;
			-ms-flex-align: start;
			align-items: flex-start;
			-ms-flex-line-pack: start;
			align-content: flex-start;
			position: relative;
		}
		.fw {
			flex-wrap: wrap;
		}
		.ggnotice-img {
			width: 100%;
			transform: translateY(-19.6%);
		}
		.ggnotice-html {
			width: 90%;
			padding: 10px 5%;
			min-height: 100px;
			color: #353535;
			line-height: 24px;
			font-size: 14px;
			margin-top: -20px;
		}
		.close-img {
			position: absolute;
			width: 32px;
			height: 32px;
			bottom: 0;
			left: 50%;
			transform: translate(-50%,150%);
		}
		.index-c{
			margin-top: 1rem;
		}
		.banner img{
			max-height:10rem;
			width: 100%;
		}
	</style>
</head>
<body style="background: #151a37;" class="loading">


<div class="index-top">
	<p class="hello">Hi，欢迎来到云智5G服务。</p>
	<p class="gonggao"><?php echo ($gonggao); ?></p>
</div>

<!--	<div class="swiper-container" id="bannerbgslider" style="	margin-top: 5rem;">
        <div class="swiper-wrapper banner">
            <div class="swiper-slide"><img src="/Public/dianyun/shouye/bg1.jpg"  ></div>

        </div>
    </div>-->


<div class="bannerbg">
	<div class="bannerslider">
		<div class="swiper-banner" id="bannerbgslider" style="	margin-top: 5rem;">
			<div class="swiper-wrapper banner">
				<?php if(is_array($banner)): foreach($banner as $key=>$v): ?><div class="swiper-slide"><a href="<?php echo ($v["href"]); ?>"><img src="<?php echo ($v["path"]); ?>"></a></div><?php endforeach; endif; ?>

			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
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

<div class="pop-background flex" id="myModal" style="visibility: hidden;">
	<div class="ggnotice flex fw">
		<img src="/Public/dianyun/img/topnotice.png" class="ggnotice-img" id="ggnotice-img">
		<div class="ggnotice-html"><p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:12pt"><span style="font-family:宋体"><strong><span style="font-size:13.5pt"><span style="font-family:宋体">
					<?php echo ($notice['title']); ?> </span></span></strong></span></span></p>
			<p>
				<?php echo ($tanchu); ?>
			</p>
		<!--	<p><a class="page_index_ckxxnr" href="#">查看详细内容 </a></p>-->
		</div>
		<img src="/Public/dianyun/img/close_notice.png" class="close-img">
	</div>
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







<input name="is_notis" value="<?php echo ($is_notis); ?>" hidden/>

















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

    // 获取 <span> 元素，用于关闭弹窗 that closes the modal
    var span = document.getElementsByClassName("close-img")[0];




    // 点击 <span> (x), 关闭弹窗
    span.onclick = function() {
        document.getElementById("myModal").style.visibility="hidden";
        setCookie('notice',23);
    }


    window.onload = function(){
        var is_notis=$('input[name=is_notis]').val();
        console.info(is_notis);
        if(is_notis!=1){
            document.getElementById("myModal").style.visibility="visible";
		}

     /*   console.info(getCookie('notice'));
        if(getCookie('notice')!='23'){
            document.getElementById("myModal").style.visibility="visible";
        }*/
    };


    function getCookie(name)
    {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    }

    function setCookie(name,value)
    {
        var mins = 60*12;
        var exp = new Date();
        exp.setTime(exp.getTime() + mins*60*1000);
        document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
    }
    //轮播图初始化
    var swiper1 = new Swiper('.swiper-banner', {
        pagination: {
          //  el: '.swiper-pagination',
        },
        autoplay:true
    });

</script>

</body>
</html>