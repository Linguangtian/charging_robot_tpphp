<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">

	<title>会员资料编辑</title>
	<link rel="stylesheet" href="/Public/dianyun/css/app.css">
	<link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
	<script src="/public/js/jquery-1.8.3.min.js"></script>
	<script src="/public/js/layer/layer.js"></script>
	<style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    	}
    </style>

</head>
<body style="background: #151a36;">

<div class="pe-index-t">
  		<p class="pe-index-t-t">我的头像 <img src="/Public/dianyun/img/lg.png"/> </p>
  		
  		<p class="pe-index-t-c">真实姓名<span><input id="truename" name="truename" type="text" maxlength="10" required="" requiredmsg="请输入真实姓名" value="<?php echo ($minfo["truename"]); ?>"></span> </p>
  		
  		<p class="pe-index-t-c">我的昵称<span><input id="truename" name="truename" type="text" maxlength="10" required="" requiredmsg="请输入真实姓名" value="<?php echo ($minfo["truename"]); ?>"></span> </p>
  		<p class="pe-index-t-c">我的UID <span>XD<?php echo ($minfo["id"]); ?></span> </p>
  		<p class="pe-index-t-c">绑定手机 <span><?php echo ($minfo["mobile"]); ?></span> </p>
  	</div>
  	
<!--<a class="xgwdxx" href="<?php echo U('Index/Index/card');?>">绑定银行卡</a>-->













<script type="text/javascript">
    $(".r_but").click(function(){
        var idtype=$(this).attr("idtype");
        $.ajax({
            url:'<?php echo U("Index/index/editname");?>',
            type:'POST',
            data:$("#"+idtype).serialize(),
            dataType:'json',
            success:function(json){
                layer.msg(json.info);
                if(json.result ==1){
                    window.location.href=json.url;
                }


            },
            error:function(){

                layer.msg("网络故障");
            }



        })

    })


</script>


</body></html>