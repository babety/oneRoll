<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $key; ?> - 购了么云购平台</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/help.css?v=130726001" rel="stylesheet" type="text/css" />
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/help.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<div class="h5-1yyg-v11">

    
<!-- 栏目页面顶部 -->


<!-- 内页顶部 -->

        <?php include templates("mobile/index","header1");?>
    <section>
	    <div class="helpCon" style="padding-top: 60px;">
    	    <div class="helpMain m-round">	
             <?php $tiezi=$this->DB()->GetList("select * from `@#_article` where cateid = 142 order by posttime DESC",array("type"=>1,"key"=>'',"cache"=>0)); ?>
                <?php $ln=1; if(is_array($tiezi)) foreach($tiezi AS $key => $tz): ?>	
                 <?php 
                    $num=0;
                    if(10>$key){
                     $num='0'.($key+1);
                    }
                 ?>
                <div class="helpInfo">
                    <dt>
                        <h3><i class="z-arrow fr iOpen"></i><em><?php echo $num; ?>.</em><?php echo $tz['title']; ?> </h3>
                    </dt>
                    <dd id="dd1" class="helpBox" style="display:none;">
                        <h4 class="orange"></h4>
                        <?php echo $tz['content']; ?>                     
                    </dd>
                </div>
                <?php  endforeach; $ln++; unset($ln); ?>
    	    </div>
        </div>
    </section>

    
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js');
</script>

</div>
</body>
</html>