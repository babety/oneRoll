<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title><?php echo $string; ?> - 购了么云购平台</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/cartList.css" rel="stylesheet" type="text/css" />
</head>
<script>
function locahost(){
    <?php if($defurl == ':js:'): ?>window.history.back();<?php  else: ?>location.href="<?php echo $defurl; ?>";<?php endif; ?>
}

    function closeWindow(){window.open('', '_self', '');window.close();}

var i = <?php echo $time; ?>; if(i!=0){window.close_id = setInterval(function() {if (i > 0) {document.getElementById('time').innerHTML = i;i = i - 1;} else {
        locahost();clearInterval(window.close_id);}}, 1000);}
        </script>


<body>
    <div class="h5-1yyg-v1">
    <!-- 栏目页面顶部 -->
<header class="header" style="position: fixed;width: 100%;z-index: 99999999;">

    <h1 style="width: 100%;text-align: center;float: none;top: 0px;left: 0px;font-size: 25px;" class="fl">
        <span style="display: block;height: 49px;line-height: 49px;">
            <a style="font-size: 20px;line-height: 49px;" href="<?php echo WEB_PATH; ?>/mobile/home">
                消息提示 
            </a>
        </span>

        
    </h1>
	
    <a id="fanhui" class="cefenlei" onclick="history.go(-1)" href="javascript:;">
        
        <img width="30" height="30" src="/statics/templates/yungou/images/mobile/fanhui.png">
    </a>

   <div class="fr head-r" style="position: absolute;right: 6px;top: 10px;">

        <!--<a href="<?php echo WEB_PATH; ?>/mobile/user/login" class="z-Member"></a>
    -->
    <a href="<?php echo WEB_PATH; ?>/mobile/home" class="z-shop" style="background-position: 2px -73px;"></a>

</div>

</header>

<!-- 栏目导航 -->


	<div class="g-pay-auto" style="padding-top: 150px;color: #999;">
    		<div class="z-pay-tips" style="display: block;margin:0 auto;height: 70px;font-size: 16px;font-weight: 600;width: 100%;color: #666;text-align: center;line-height: 30px;">
                    <?php echo $string; ?>
                    
        </div>
        <font id="time" style="color:red;"><?php echo $time; ?></font>秒后返回上一页面
        
	</div>
        
<?php include templates("mobile/index","footer");?>
</div>
</body>
</html>
