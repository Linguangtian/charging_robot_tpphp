<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en" class="pixel-ratio-3 retina android android-5 android-5-0"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Public/bao/reset.css">
    <link rel="stylesheet" href="/Public/bao/light7.css">
    <link rel="stylesheet" href="/Public/bao/swiper.css">
    <link rel="stylesheet" href="/Public/bao/style.css">
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <title>抢红包</title>
    <style>
        .swiper-container {
            width: 75%;
            height: 7.5rem;
        }

        .swiper-slide {
            text-align: center;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>
<body style="background: #131933;">

	<div class="login_logo">
  		<img src="/Public/dianyun/img/lg.png"/>
  	</div>

	<p style="color: #fdb523;margin-top: 10rem;font-size: 26px;font-weight: bold;text-align: center;" >送你21元现金(可提现)</p>

	<form action="<?php echo U('/Index/sem/regsems');?>" method="post">
					<input type="hidden" name="id" value="<?php echo ($uid); ?>">
                    <button style="width: 80%;height: 3rem;background: #fdb523;margin-left: 10%;margin-top: 1rem;border-radius: 3rem;" class="redbtn">领取到账户</button>
	</form>

    <script src="/Public/bao/jquery.js"></script>
    <script src="/Public/bao/light7.js"></script>
    <script src="/Public/bao/swiper.js"></script>
    <script>

        $(function () {
            $.init();

            var swiper = new Swiper('.redSwiper', {
                init: true,
                direction: 'vertical',
                slidesPerView: 4,
                spaceBetween: 10,
                autoplay: {
                    delay: 2000,//1秒切换一次
                },
                speed: 400
            });


            // 点击领取(按钮动画)

            // 按钮动画
            $('.getRed').click(function () {
                $(this).addClass('btnClass')
                setInterval(function () {
                    $('.redModal').css('display', function () {
                        return 'block'
                    })
                    $(this).removeClass('btnClass')
                }, 2000)
            })







        })
    </script>

</body></html>