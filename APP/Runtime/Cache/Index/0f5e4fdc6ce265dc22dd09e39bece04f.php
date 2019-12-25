<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>我的5G服务器</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">


    <link rel="stylesheet" type="text/css" href="/public/css/common.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style1.css">
    <style type="text/css">
                .toolbar:before {display: none;}
                .bxxxx-top{
                	width: 100%; float: left; height: 40px;background: ;font-size: 24px;line-height: 40px;padding-left: 20px;box-sizing: border-box;color: #ddebf5;
                	margin-top: 2rem;
                }
                .bxxxx-top a{
                	font-size: 14px;background: #5946cb;width: 100px;height: 30px;display: inline-block;line-height: 30px;border-radius: 30px;text-align: center;margin-left: 10px;margin-top: -2px;
                }
                .boooooss{
                	width: 92%;
                	height: 1000px;
                	/*background: red;*/
                	float: left;
                	margin-left: 4%;
                	margin-top: 20px;
                }
                .boooooss li{
                	width: 100%;
                	height: 100px;
                	background: #202444;
                	border-radius: 10px;
                	margin-bottom: 10px;
                }
                .sssee{
                	width: 100%;
                	height: 30px;
                	line-height: 30px;
                	font-size: 18px;
                	color: #ddebf5;
                	float: left;
                	margin-top: 10px;
                }
                .sssee img{
                	width: 30px;
                	height: 30px;
                	float: left;
                	margin-left: 10px;
                	margin-right: 4px;
                }
                .sssee span{
                	color: #feb721;
                	font-size: 16px;
                	float: right;
                	margin-right: 10px;
                }
                .yyx_f{
                	width: 65%;
                	height: 50px;
                	float: left;
                }
                .yyx_f p{
                	height: 25px;
                	line-height: 25px;
                	font-size: 14px;
                	padding-left: 10px;
                	color: #7d8b9d;
                	
                }
                .lqkd_r{
                	width: 30%;
                	height: 50px;
                	float: right;
                }
                .lqkd_r a{
                	width: 80%;
                	background: #5946cb;
                	height: 30px;
                	display: block;
                	text-align: center;
                	line-height: 30px;
                	margin: 10px 10%;
                	border-radius: 30px;
                }
            </style>



</head>
<body style="background: #131933;">
	
            <p class="bxxxx-top" style="position: fixed;background: #131933;" >我的5G服务器
            	<a href="<?php echo U('/index/robot/pcontent');?>" style="">购买服务器 > </a>
				<h4 style="color: firebrick;top: 80px; position: fixed;  padding-left: 20px;background: #131933;">
					<?php echo ($context); ?>
				</h4>
            </p>

            <div class="boooooss" style="padding-top: 120px; padding-bottom: 30px;">
            
            	<ul>
            		<?php if(is_array($orders)): foreach($orders as $key=>$v): ?><li>
            				<p class="sssee"><img src="/Public/dianyun/img/yyy.png" /><?php echo ($v["project"]); ?> <span>运行中</span></p>
            
            				<div class="yyx_f">


            						<p>
										已收益：<?php echo (four_number($v["already_profit"])); ?>元
									</p>
								<p>截止时间：<?php echo (date('Y-m-d H:s:i',$v["end_time"])); ?></p>
            				</div>
            
            				<div class="lqkd_r">
            

											<?php if($v["today_sign"] == 1): ?><a href="javascript:alert(&#39;请勿操作，5G服务器在努力的工作中！&#39;);" style="background: #a4a4a4;">今日已签到</a>
												<?php else: ?>
												<a href="<?php echo U('Robot/jiesuan',array('id'=>$v['id']));?>" style="padding:3px 5px; background:#8637f6; color:#FFFFFF; border-radius:4px;">签到</a><?php endif; ?>


            
            				</div>
            
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