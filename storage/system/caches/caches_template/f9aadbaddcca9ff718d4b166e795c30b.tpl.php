<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="35466724776156776375" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Index_new.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/common.css"/>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<!--滚动-->
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.SuperSlide.2.1.1.js"></script>
<!--滚动 end-->

<script type="text/javascript">

$(function(){
	var str=new String();
	var arr=new Array();
	var li_num='<li class="index_pp_text" style="width:80px;">累计参与金额</li>';
	str="16795439";
	arr=str.split('');
	var l=arr.length;
	for(var i=0;i<l;i++)
	{
		if(l>3&&i!=(l-1)&&(i==l%3-1||(i+1-l%3)%3==0))
			li_num+='<li class="index_pp_num">'+arr[i]+'</li><li class="index_pp_sign">,</li>';
		else
			li_num+='<li class="index_pp_num">'+arr[i]+'</li>';
	}
	li_num+='<li class="index_pp_text" style="width:40px;"><span>元</span><img src="http://127.0.0.1/gongsi/statics/templates/yungou/img/index_nav_bt.gif" /></li>';
	$(".num_ul").html(li_num);
	/**menu**/	
	
	
	$(".index_menu").click(function(){
	    var aaa=$(".index_menu").css("background-image");
		$(".index_submenu").toggle();
		if(aaa.indexOf('index_menus.png')>0){
			$(".index_menu").css("background-image","url(<?php echo G_TEMPLATES_STYLE; ?>/images/index_menu.png)")
		}else{
			$(".index_menu").css("background-image","url(<?php echo G_TEMPLATES_STYLE; ?>/images/index_menus.png)")
		}
		
	})

	$(".index_head_gz").mouseover(function(){
		$(".index_head_gz_menu").show();
	})
	$(".index_head_gz_menu").mouseout(function(){
		$(this).hide();	
	})
	
	$(".index_head_iossys").mouseover(function(){
		$(".index_head_iosma").show();
	})
	$(".index_head_iossys").mouseout(function(){
		$(".index_head_iosma").hide();	
	})
	
	$(".index_head_Androidsys").mouseover(function(){
		$(".index_head_Androidma").show();
	})
	$(".index_head_Androidsys").mouseout(function(){
		$(".index_head_Androidma").hide();	
	})
	
	$(".index_head_yg").mouseover(function(){
		$(".index_head_yg_menu").show();
	})
	$(".index_head_yg_menu").mouseout(function(){
		$(this).hide();	
	})
	
	$(".w-search").click(function(){
		$("#pro-view-1").hide();
	}).blur(function(){
		$("#pro-view-1").show();
	})
	
	$(".w-input-input").focus(function(){
		$("#pro-view-1").hide();
	}).blur(function(){
		$("#pro-view-1").show();
	})
	
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
	
	$(function(){
		$("#sCart").hover(
			function(){			
				$("#sCartlist,#sCartLoading").show();
				$("#sCartlist p,#sCartlist h3").hide();
				$("#sCart .mycartcur").remove();
				$("#sCartTotal2").html("");
				$("#sCartTotalM").html("");
				$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
					$("#sCart .mycartcur").remove();
					$("#sCartLoading").before(data.li);
					$("#sCartTotal2").html(data.num);
					$("#sCartTotalM").html(data.sum);
					$("#sCartLoading").hide();
					$("#sCartlist p,#sCartlist h3").show();
				});
			},
			function(){
				$("#sCartlist").hide();
			}
		);
		$("#sGotoCart").click(function(){
			window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
		});
	})
	})
	function delheader(id){
		var Cartlist = $.cookie('Cartlist');
		var info = $.evalJSON(Cartlist);
		var num=$("#sCartTotal2").html()-1;
		var sum=$("#sCartTotalM").html();
		info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];
			
		delete info[id];
		//$.cookie('Cartlist','',{path:'/'});
		$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
		$("#sCartTotalM").html(info['MoenyCount']);
		$('#sCartTotal2').html(num);
		$('#sCartTotal').text(num);											
		$('#btnMyCart em').text(num);
		$("#mycartcur"+id).remove();
	}

	$(document).ready(function(){
		$.get("<?php echo WEB_PATH; ?>/member/cart/getnumber/"+ new Date().getTime(),function(data){
			$("#sCartTotal").text(data);											
			$("#btnMyCart em").text(data);											
		});
	});

	function get_cp()
	{
		$.get("<?php echo WEB_PATH; ?>/go/index/caipiao/"+ new Date().getTime(),function(data){
			$(".index_caipiao").html(data);
		});
	}
	


</script>

<style>
		#crazy_rabbit{
			position: absolute;
			z-index: 1;
			left:65%;
			top:-135px;
			animation: rabbit 10s;
			opacity: 0;
			height:130px;
		}
		#crazy_rabbit img{
			position:relative;
			height:80px;
			width:255px;
			left:50px;
			top:-80px;
		}
		#crazy_amount{
			position: relative;
			height:25px;
			overflow: hidden;
			left:77px;
			top:-120px;
		}
		#crazy_amount ul{
			float: left;
		}
		#crazy_amount ul li{
			font-size: 200%;
			color:#fff;
			padding-right:6px;
		}
		.ul1,.ul2,.ul3,.ul4,.ul5,.ul6,.ul7,.ul8,.ul9{
			position: relative;
		}
		#crazy_talk{
			position:absolute;
			top:120px;
			left:-120px;
			opacity: 0;
			animation: talks 10s;
			color:#fff;
			font-size: 18px;
		}
		#crazy_talk img{
			width:100px;
			position:absolute;
		}
		@keyframes talks {
			from{
				top:130px;
				left:0;
				opacity: 0;
			}
			50%{
				top:130px;
				left:0;
				opacity: 0;
			}
			60%{
				top:130px;
				left:-120px;
				opacity: 0.5;
			}
			80%{
				top:130px;
				left:-120px;
				opacity: 1;
			}
			90%{
				top:130px;
				left:-120px;
				opacity: 1;
			}
			to{
				top:130px;
				left:-120px;
				opacity: 1;
			}
		}
		@keyframes rabbit {
			from{
				top:-135px;
				opacity: 0;
				left:65%;
			}
			35%{
				top:-25px;
				opacity: 1;
				left:65%;
			}
			36%{
				top:-35px;
				opacity: 1;
				left:65%;
			}
			40%{
				top:-30px;
				opacity: 1;
				left:65%;
			}
			45%{
				top:-35px;
				opacity: 1;
				left:65%;
			}
			80%{
				top:-35px;
				opacity: 1;
				left:65%;
			}
			to{
				top:-35px;
				left:75%;
				opacity: 0;
			}
		}
	</style>

</head>

<body onload= "main()" onselectstart="return false">
<!--兔子-->
<div id="crazy_rabbit">
	<canvas id="canvas" width="100" height="125"></canvas>
	<img src="<?php echo G_TEMPLATES_STYLE; ?>/img/board.png" alt=""/>
	<div id="crazy_amount">
		<ul class="ul1">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul2">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul3">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul4">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul5">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul6">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul7">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul8">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
		<ul class="ul9">
			<li>0</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
			<li>8</li>
			<li>9</li>
		</ul>
	</div>
	<!--
	<div id="crazy_talk">
		<img src="<?php echo G_TEMPLATES_STYLE; ?>/img/tegether.png" alt=""/>
	</div>
	-->
</div>
<!--兔子结束-->
<script>
	window.onload = function () {
		//canvas
		var canvas=document.getElementById('canvas');
		var c=canvas.getContext('2d');
		var loadings=[];
		for(var j=0;j<13;j++){
			var k=j+1;
			loadings[j]=new Image();
			loadings[j].src='<?php echo G_TEMPLATES_STYLE; ?>/img/rabbit'+k+'.png';
			loadings.push(loadings[j]);
		}
		var i=0;
		var t=null;
		var WIDTH=canvas.width;
		var HEIGHT=canvas.height;
		var wait=0;
		function draw(){
			c.clearRect(0,0,WIDTH,HEIGHT);
			wait++;
			if(i>=loadings.length){
				clearInterval(t);
				c.drawImage(loadings[loadings.length-1],0,0,170,130);
			}else if(wait>=15){
				c.drawImage(loadings[i],0,0,170,130);
				i++;
			}else{
				c.drawImage(loadings[0],0,0,170,130);
			}
		}
		loadings[i].onload=function(){
			t=setInterval(draw,100)
		};
		//数字滚动
		var Height=290/10;
		var arr="<?php echo go_count_renci(); ?>";
		(function fn(){
			$('.ul1').animate({'top':-Height*0},2000);
			$('.ul2').animate({'top':-Height*arr[0]},2000);
			$('.ul3').animate({'top':-Height*arr[1]},2000);
			$('.ul4').animate({'top':-Height*arr[2]},2000);
			$('.ul5').animate({'top':-Height*arr[3]},2000);
			$('.ul6').animate({'top':-Height*arr[4]},2000);
			$('.ul7').animate({'top':-Height*arr[5]},2000);
			$('.ul8').animate({'top':-Height*arr[6]},2000);
			$('.ul9').animate({'top':-Height*arr[7]},2000);
		})();
	};


</script>

<!--TOP-->
<div class="index_head">
	<div class="index_head_cont">
		<div class="index_head_cont_left"><a href="<?php echo WEB_PATH; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>" /></a></div>
		<div class="index_head_cont_right">
			<div class="index_head_cont_right_l">
				<ul>
					<li class="index_head_iossys"><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_ios.png" />&nbsp;微信版</a>
						<div class="index_head_iosma"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_iosma.png" /></div>
					</li>
					<li class="index_head_Androidsys"><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_Android.png" />&nbsp;手机版</a>
						<div class="index_head_Androidma"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_Androidma.png" /></div>
					</li>
					<li><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_gz.jpg" />&nbsp;关注</a>&nbsp;</li>
					<!--<li><a href="<?php echo WEB_PATH; ?>/single/qqgroup" target="_blank">官方QQ群</a></li>-->
					<li class="index_head_time"><span id="sp_ServerTime"></span></li>
				</ul>
			</div>
			<div class="index_head_cont_right_r">
				<ul>
					<?php if(get_user_arr()): ?>
					  <li class="h_wel" id="logininfo">
							<a href="<?php echo WEB_PATH; ?>/member/home" class="gray01" >					
								<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>" width="20" height="20"/>					
								<span>&nbsp;<?php echo get_user_name(get_user_arr(),'username'); ?></span>
							</a>&nbsp;&nbsp;				
						</li>
					  <li class="index_head_yg"><a href="<?php echo WEB_PATH; ?>/member/home">我的购了么</a><img src="<?php echo G_TEMPLATES_STYLE; ?>/img/index_head_bt.png">
						<ul class="index_head_yg_menu">
							<li><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist">云购记录</a></li>
							<li><a href="<?php echo WEB_PATH; ?>/member/home/orderlist">中奖记录</a></li>
							<li><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge">账户充值</a></li>
							<li><a href="<?php echo WEB_PATH; ?>/member/home/modify">个人设置</a></li>
						</ul>
					  </li>
					  <li><a href="<?php echo WEB_PATH; ?>/member/user/cook_end" class="gray01">[退出]</a></li>
					  <li class="index_head_span"><span>|</span></li>
					<?php  else: ?>			
					<li><a href="<?php echo WEB_PATH; ?>/login">[请登录]</a></li>
					<li><a href="<?php echo WEB_PATH; ?>/register">[免费注册]</a></li><li class="index_head_span"><span>|</span></li>
					<?php endif; ?>
					
					
					<li class="index_head_qd"  id="sCart">
						<a href="<?php echo WEB_PATH; ?>/index.php/member/cart/cartlist" id="sCartNavi"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_qd.jpg" />&nbsp;我的清单</a>&nbsp;|
						<div class="mycart_list" id="sCartlist" style="z-index: 99999; display: none;">				
							<div class="goods_loding" id="sCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">正在加载......</div>
							<p id="p1">共计 <span id="sCartTotal2"> </span> 件商品 金额总计：<span id="sCartTotalM" class="rmbred"></span></p>
							<h3><input type="button" id="sGotoCart" value="去购物车并结算"></h3>
						</div>
					</li>
					<li class="index_head_sq"><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" >快速充值</a>&nbsp;|</li>
					<li><a href="<?php echo WEB_PATH; ?>/help/1">帮助中心</a></li>      
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!--time-->
<script type="text/javascript">
(function(){				
		var week = '日一二三四五六';
		var innerHtml = '{0}:{1}:{2}';
		var dateHtml = "{0}月{1}日 &nbsp;周{2}";
		var timer = 0;
		var beijingTimeZone = 8;				
				function format(str, json){
					return str.replace(/{(\d)}/g, function(a, key) {
						return json[key];
					});
				}				
				function p(s) {
					return s < 10 ? '0' + s : s;
				}			

				function showTime(time){
					var timeOffset = ((-1 * (new Date()).getTimezoneOffset()) - (beijingTimeZone * 60)) * 60000;
					var now = new Date(time - timeOffset);
					document.getElementById('sp_ServerTime').innerHTML = format(innerHtml, [p(now.getHours()), p(now.getMinutes()), p(now.getSeconds())]);				
					//document.getElementById('date').innerHTML = format(dateHtml, [ p((now.getMonth()+1)), p(now.getDate()), week.charAt(now.getDay())]);
				}				
				
				window.yungou_time = 	function(time){						
					showTime(time);
					timer = setInterval(function(){
						time += 1000;
						showTime(time);
					}, 1000);					
				}
	window.yungou_time(<?php echo time(); ?>*1000);
				
})();
				
				
				
$(document).ready(function(){
	try{  
       if(typeof(eval(pleasereg_initx))=="function"){
            pleasereg_initx();
	   }
    }catch(e){
       //alert("not function"); 
    }  
})
</script>  
<!--time end-->
<!--TOP END-->
<!--NAV-->
<div class="index_nav">
	<div class="index_nav_cont">
		<div class="index_nav_left">
			<div class="index_menu">
				<div class="index_submenu" style="display:none;">
					<ul>
					<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order` desc limit 0,8",array("type"=>1,"key"=>'',"cache"=>0)); ?>
					<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
					<li class="index_submenu_sj"><a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $categoryx['pic_url']; ?>" /><span><?php echo $categoryx['name']; ?><br/><small><?php echo $categoryx['catdir']; ?></small></span></a></li>
					<?php  endforeach; $ln++; unset($ln); ?>
					<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
						<!--<li class="index_submenu_sj"><a href="<?php echo WEB_PATH; ?>/goods_list/5"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_sj.png" /></a></li>
						<li class="index_submenu_dn"><a href="<?php echo WEB_PATH; ?>/goods_list/13"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_dn.png" /></a></li>
						<li class="index_submenu_sm"><a href="<?php echo WEB_PATH; ?>/goods_list/12"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_sm.png" /></a></li>
						<li class="index_submenu_nx"><a href="<?php echo WEB_PATH; ?>/goods_list/14"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_nx.png" /></a></li>
						<li class="index_submenu_fc"><a href="<?php echo WEB_PATH; ?>/goods_list/36"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_fc.png" /></a></li>
						<li class="index_submenu_cl"><a href="<?php echo WEB_PATH; ?>/goods_list/6"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_cl.png" /></a></li>
						<li class="index_submenu_zb"><a href="<?php echo WEB_PATH; ?>/goods_list/35"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_zb.png" /></a></li>
						<li class="index_submenu_qt"><a href="<?php echo WEB_PATH; ?>/goods_list/15"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/index_submenu_qt.png" /></a></li>-->
					</ul>
				</div>
			</div>
		</div>
		<div class="index_nav_right">
			<ul>
				<li class="index_nav_bt"><a href="<?php echo WEB_PATH; ?>">首页</a></li>
				<?php echo Getheader('index'); ?>
			</ul>
		</div>
		<div class="index_nav_search">
			<input id="txtSearch" maxlength="50" class="w-input-input" data-pro="input" type="text" value="请输入要搜索的奖品" onfocus="javascript:if(this.value=='请输入要搜索的奖品')this.value='';">
			<a class="w-search-btn" href="javascript:void(0)" id="butSearch"></a>
		</div>
	</div>
</div>
<!--NAV END-->