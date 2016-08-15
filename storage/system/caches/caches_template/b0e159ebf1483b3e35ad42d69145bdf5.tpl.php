<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>个人主页 - 购了么云购平台</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/userindex.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/userindex.js" language="javascript" type="text/javascript"></script>
</head>
<body id="loadingPicBlock">
    <div class="h5-1yyg-v11">
        
<!-- 栏目页面顶部 -->


<!-- 内页顶部 -->
<header class="header" style="position: fixed;width: 100%;z-index: 99999999;">

    <h1 style="width: 100%;text-align: center;float: none;top: 0px;left: 0px;font-size: 25px;" class="fl">
        <span style="display: block;height: 49px;line-height: 49px;">
            <a style="font-size: 20px;line-height: 49px;" href="<?php echo WEB_PATH; ?>/mobile/mobile">
               个人主页
            </a>
        </span>

        <!--<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
        -->
        <!--<img src="/statics/templates/yungou/images/sjlogo.png"/>
        -->
    </h1>

    <a id="fanhui" class="cefenlei" onclick="history.go(-1)" href="javascript:;">
        
        <img width="30" height="30" src="/statics/templates/yungou/images/mobile/fanhui.png">
    </a>

    <div class="fr head-r" style="position: absolute;right: 0px;top: 0px;">

        <!--<a href="<?php echo WEB_PATH; ?>/mobile/user/login" class="z-Member"></a>
    -->
    <a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-shop" style="background-position: 2px 0px;"></a>

</div>

</header>

   <section style="padding-top: 50px;">
	<div class="mainCon"> 
    	<div class="mBanner" style="background:#ffa76c;">
        	<ul>
            	<li class="mUserHead"> <?php 
                    $touxiang = get_user_key($member['uid'],'img')
                 ?>
                    <img src="
                    <?php if($touxiang !='photo/member.jpg'): ?>
                        <?php echo G_UPLOAD_PATH; ?>/<?php echo $touxiang; ?>
                    <?php elseif ($member['headimg'] !=''): ?>
                        <?php echo $member['headimg']; ?>
                    <?php  else: ?>
                        <?php echo G_UPLOAD_PATH; ?>/<?php echo $touxiang; ?>
                    <?php endif; ?>"></li><li class="mUserInfo"><p><?php echo get_user_name($member['uid']); ?></p><br/>积分：<?php echo $member['score']; ?><br/>经验值：<?php echo $member['jingyan']; ?>
                    <span class="<?php if($member['yungoudj']=='云购新手'): ?>
                    z-class-icon01
                <?php elseif ($member['yungoudj']=='云购小将'): ?>
                    z-class-icon02
                <?php elseif ($member['yungoudj']=='云购中将'): ?>
                    z-class-icon03
                <?php elseif ($member['yungoudj']=='云购上将'): ?>
                    z-class-icon04
                <?php elseif ($member['yungoudj']=='云购大将'): ?>
                    z-class-icon05
                <?php elseif ($member['yungoudj']=='云购将军'): ?>
                    z-class-icon06
                <?php endif; ?>"><s></s><?php echo $member['yungoudj']; ?></span></li>
                    
            </ul>
        </div>
        <div class="g-snav" id="divMidNav">
        	<span class="g-snav-lst mCurr"><a href="javascript:void(0);"><?php echo _cfg('web_name_two'); ?>记录</a></span>
            <span class="g-snav-lst"><a href="javascript:void(0);">获得的商品</a></span>
            <span class="g-snav-lst"><a href="javascript:void(0);">晒单</a></span>
        </div>
        <input name="hdUserID" type="hidden" id="hdUserID" value="<?php echo $member['uid']; ?>" />
        <!--梦想购记录-->
        <div id="divBuyRecord" class="mBuyRecord">
        
        </div>
        <!--获得商品-->
        <div id="divGetGoods" class="mBuyRecord" style="display:none">
   
        </div>
        <!--晒单-->
        <div id="divSingle" class="mSingle" style="display:none">
        	<ul>
             
            </ul>
        </div>
        <a id="btnLoadMore" class="loading" href="javascript:void(0);" style="display:none;">点击加载更多</a>
        <div id="divLoading" class="loading"><b></b>正在加载</div>
    </div>
</section>
        
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  Path.imgpath = "<?php echo G_WEB_PATH; ?>/statics";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>
 
    </div>
</body>
</html>
