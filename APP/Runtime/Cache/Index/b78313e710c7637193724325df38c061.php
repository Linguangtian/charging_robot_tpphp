<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>提现</title>

    <link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <script src="/public/js/jquery-1.8.3.min.js"></script>
    <script src="/public/js/layer/layer.js"></script>
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
    	.layui-layer-hui{
    		color: red;
    		background-color: rgb(220, 235, 245);
    	}
    </style>

</head>
<body style="background: #131933;">
	
	<form action="" method="POST" style="font-size:14px"  id="myform1">
	<div class="wi-tix">
		<p class="wi-tix-ktx">申请提现<span><a href="<?php echo U('Index/Wallet/withdrawnlog');?>" style="color: #FEB620;">提现记录</a></span> </p>
		<p class="wi-tix-sss"><span>¥</span> <input style="color: #fff;" id="money" name="money" type="text" maxlength="10" value=""> </p>
		<div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-input">
                                                    <select id="type" name="type" maxlength="50" style="color: rgba(220, 235, 245, 1);width: 100%;height: 2rem;border: none;background: rgba(33, 37, 68, 1);padding: 0 1rem;">
                                                        <option value="" selected="selected">请选择</option>
                                                        <option value="2">支付宝</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
		<p class="wi-tix-oo">温馨提示：提现每笔收取5%手续费</p>
	</div>
	
	<a href="javascript:bank_modify_commit()" class="r_but wi-tix-ttxx" idtype="myform1">立即提现</a>
	
	</form>
	
	
	
	
	
	
	
	<div class="layui-layer layui-anim layui-layer-dialog layui-layer-border layui-layer-msg layui-layer-hui" id="layui-layer1" type="dialog" times="1" showtime="3000" contype="string" style="z-index: 19891015; top: 297.5px; left: 94px;"><div class="layui-layer-content">请正确填写提现金额！</div><span class="layui-layer-setwin"></span></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<script type="text/javascript">
    $(".r_but").click(function(){
        var idtype=$(this).attr("idtype");
        $.ajax({
            url:'<?php echo U("Index/Wallet/withpost");?>',
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