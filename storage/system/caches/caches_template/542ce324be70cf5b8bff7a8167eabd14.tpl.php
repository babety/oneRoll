<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/page.js"></script>
<!--放大镜-->
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/Magnifier.js"></script>
<!--放大镜 end-->
<div class="dir">
	<div class="dir_cont">
		<a href="<?php echo WEB_PATH; ?>">首页</a> &gt; 
		<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $item['cateid']; ?>"><?php echo $category['name']; ?></a>  &gt; 
		<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $item['cateid']; ?>e<?php echo $item['brandid']; ?>"><?php echo $brand['name']; ?></a> &gt; 
		<span class="txt-red">奖品详情</span>
	</div>
</div>
<div class="index_body">
	<!-- 显示揭晓动画 start  -->	

	<?php if($item[canyurenshu]==$item[zongrenshu]): ?>
		<?php include templates("index","item_animation");?>
	<?php  else: ?>
		<?php include templates("index","item_contents");?>
	<?php endif; ?>
	
	<!-- 显示揭晓动画 end   -->   
	<div class="detail_main_fx">
		<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	</div>
	<div class="detail_tab">
		<div class="detail_tab_nav">
			<ul>
				<li id="introTab" class="detail_tab_navli detail_tab_navs">奖品详情</li>
				<li id="recordTab" class="detail_tab_navli">所有参与记录</li>
				<li id="pastTab" class="detail_tab_navli">往期云购</li>
				<li id="shareTab" class="detail_tab_navli">晒单</li>
			</ul>
		</div>
		<div class="detail_tab_cont">
			<!--奖品详情-->
			<div id="introPanel" class="detail_tab_cont_panel detail_tab_cont_intro"> 
				<?php echo $item['content']; ?>
		    </div>
		   <!--奖品详情 end-->
		   <!--所有参与记录-->
		    <div id="recordPanel" class="detail_tab_cont_panel detail_tab_cont_record" style="display:none">
				
				
			   	
			</div>
			<!--所有参与记录 end-->
			<!--往期云够-->
			<div id="pastPanel" class="detail_tab_cont_panel detail_tab_cont_past" style="display:none"></div>
			<!--往期云够 end-->
			<!--晒单-->
			<div id="sharePanel" class="detail_tab_cont_panel detail_tab_cont_share" style="display:none"> 
				<div class="detail_tab_cont_share_empty"> 
					<iframe id="ifmdt" src="<?php echo WEB_PATH; ?>/go/shaidan/itmeifram/<?php echo $itemid; ?>" frameborder="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="100%" name="ifmdt"></iframe>
					<!--<p class="status-empty"><i class="littleU littleU-cry"></i>&nbsp;&nbsp;暂时还没有任何晒单</p>  -->
				</div> 
		   </div>
			<!--晒单 end-->
		</div>
		
	</div>
	
</div>


<script type="text/javascript">
$(function(){
	$.post("<?php echo WEB_PATH; ?>/go/index/jxfy/<?php echo $item['id']; ?>/",{"times":Math.random()},function(sdata){
		if(sdata){$("#recordPanel").html(sdata);}
	});
	
	$.post("<?php echo WEB_PATH; ?>/go/index/wqfy/<?php echo $item['id']; ?>/",{"times":Math.random()},function(sdata){
		if(sdata){$("#pastPanel").html(sdata);}
	});

})	

</script>
<script type="text/javascript">
$(function(){		
	$(".detail_main_l_imgul li").mouseover(function(){		
		var imgid=$(this).attr("imgid");
		var imgsrc=$(this).children("img").attr("src");
		$("#zoom1 img").attr("src",imgsrc);
		$(".detail_main_l_imgul li").removeClass("selected");
		$(this).addClass("selected");
	})
})
</script>

<script type="text/javascript">

$(function(){
	$("#ulRecordTab li").click(function(){
		var add=$("#ulRecordTab li").index(this);
		$("#ulRecordTab li").removeClass("Record_titCur").eq(add).addClass("Record_titCur");
		$(".Pro_Record .hide").hide().eq(add).show();
	});
var fouli=$(".DetailsT_TitP ul li");
	fouli.click(function(){
		var add=fouli.index(this);	
		if(add ==2){
			$("#divPost").show();
		}
		if(add ==0 || add==1){
			$("#divPost").hide();
		}
		
		fouli.removeClass("DetailsTCur").eq(add).addClass("DetailsTCur");
		$("#divContent .hide").hide().eq(add).show();
	});
	$("#btnUserBuyMore").click(function(){
		fouli.removeClass("DetailsTCur").eq(1).addClass("DetailsTCur");
		$("#divContent .hide").hide().eq(1).show();
		$("html,body").animate({scrollTop:941},1500);
		$("#divProductNav").addClass("nav-fixed");
	});
	$(window).scroll(function(){
		if($(window).scrollTop()>=941){
			$("#divProductNav").addClass("nav-fixed");
		}else if($(window).scrollTop()<941){
			$("#divProductNav").removeClass("nav-fixed");
		}
	});
})
var shopinfo={'shopid':<?php echo $item['id']; ?>,'money':<?php echo $item['yunjiage']; ?>,'shenyu':<?php echo $syrs; ?>};

	
$(function(){
	function baifenshua(aa,n){
	n = n || 2;
	return ( Math.round( aa * Math.pow( 10, n + 2 ) ) / Math.pow( 10, n ) ).toFixed( n ) + '%';
}
	var shopnum = $("#num_dig");
	shopnum.keyup(function(){
		if(shopnum.val()><?php echo $syrs; ?>){
			shopnum.val(<?php echo $syrs; ?>);
		}
		var numshop=shopnum.val();
		if(numshop==<?php echo $item['zongrenshu']; ?>){
			var baifenbi='100%';
		}else{
			var showbaifen=numshop/<?php echo $item['zongrenshu']; ?>;
			var baifenbi=baifenshua(showbaifen,2);
		}
		$("#chance").html("<span style='color:red'>获得机率"+baifenbi+"</span>");
	});	
	
	$("#shopadd").click(function(){
		var shopnum = $("#num_dig");
			var resshopnump='';
			var num = parseInt(shopnum.val());				
			if(num+1 > 450){				
				shopnum.val(<?php echo $syrs; ?>);
				resshopnump = <?php echo $syrs; ?>;
			}else{
				resshopnump=parseInt(shopnum.val())+1;
				shopnum.val(resshopnump);	
				if(shopnum.val()>=<?php echo $syrs; ?>){
					resshopnump=shopinfo['shenyu'];
					shopnum.val(resshopnump);
				}
			}
			if(resshopnump==<?php echo $item['zongrenshu']; ?>){
				var baifenbi='100%';
			}else{
				var showbaifen=resshopnump/<?php echo $item['zongrenshu']; ?>;
				var baifenbi=baifenshua(showbaifen,2);
			}
			$("#chance").html("<span style='color:red'>获得机率"+baifenbi+"</span>");
	});
	
	
	$("#shopsub").click(function(){
		var shopnum = $("#num_dig");
		var num = parseInt(shopnum.val());
		if(num<2){
			shopnum.val(1);			
		}else{
			shopnum.val(parseInt(shopnum.val())-1);
		}
		var shopnums=parseInt(shopnum.val());
		if(shopnums==<?php echo $item['zongrenshu']; ?>){
				var baifenbi='100%';
			}else{
				var showbaifen=shopnums/<?php echo $item['zongrenshu']; ?>;
				var baifenbi=baifenshua(showbaifen,2);
			}
			$("#chance").html("<span style='color:red'>获得机率"+baifenbi+"</span>");
	});
});

$(function(){
$(".detail_main_c_button_Cart").click(function(){ 
	//添加到购物车动画
	var src=$("#zoom1 img").attr('src');  
	var $shadow = $('<img id="cart_dh" style="display: none; border:1px solid #aaa; z-index: 99999;" width="400" height="400" src="'+src+'" />').prependTo("body"); 
	var $img = $(".mousetrap").first("img");
	$shadow.css({ 
	   'width' : $img.css('width'), 
	   'height': $img.css('height'),
	   'position' : 'absolute',      
	   'top' : $img.offset().top,
	   'left' : $img.offset().left, 
	   'opacity' :1    
	}).show();
	var $cart =$("#btnMyCart");
	var numdig=$(".num_dig").val();
	$shadow.animate({   
		width: 1, 
		height: 1, 
		top: $cart.offset().top, 
		left: $cart.offset().left,
		opacity: 0
	},500,function(){
		Cartcookie(false);
	});		
});
	$(".detail_main_c_button_Shopbut").click(function(){	
		Cartcookie(true);
	});	
});



function Cartcookie(cook){
	var shopid=shopinfo['shopid'];
	var number=parseInt($("#num_dig").val());

	if(number<=1){number=1;}
	
	var Cartlist = $.cookie('Cartlist');

	if(!Cartlist){
		var info = {};
	}else{
		var info = $.evalJSON(Cartlist);
		if((typeof info) !== 'object'){
			var info = {};
		}
	}		
	if(!info[shopid]){
		var CartTotal=$("#sCartTotal").text();
			$("#sCartTotal").text(parseInt(CartTotal)+1);
			$("#btnMyCart em").text(parseInt(CartTotal)+1);
	}
	
	info[shopid]={};
	info[shopid]['num']=number;
	info[shopid]['shenyu']=shopinfo['shenyu'];
	info[shopid]['money']=shopinfo['money'];
	info['MoenyCount']='0.00';	
	
	$.cookie('Cartlist',$.toJSON(info),{expires:7,path:'/'});
	if(cook){
		window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist/"+new Date().getTime();//+new Date().getTime()
	}
}  

$(function(){
	var fouli=$(".detail_tab_navli");
	fouli.click(function(){
		var add=fouli.index(this);
		fouli.removeClass("detail_tab_navs").eq(add).addClass("detail_tab_navs");
		var tname=$(this).attr('id').replace('Tab','Panel');
		$(".detail_tab_cont_panel").hide();
		$("#"+tname).show();
	});
	
	$(".m-detail-main-codes-viewWinnerCodesBtn").click(function(){
		var pro_width=($(window).width()-500)/2;
		var pro_height=($(window).height()-620)/2;
		if(pro_width<0) pro_width=0;
		if(pro_height<0) pro_height=0;
		$("#pro-view-84").css({"left":pro_width+"px","top":pro_height+"px"});
	  	$("#pro-view-85").show();
		$("#pro-view-84").show();  
	});
	$(".w-msgbox-close").click(function(){
		$("#pro-view-85").hide();
		$("#pro-view-84").hide();
	});
});
jQuery(".detail_main_r").slide({mainCell:".detail_main_r_zxcy ul",autoPlay:true,effect:"topMarquee",vis:15,interTime:50,trigger:"click"});
</script> 
<?php include templates("index","footer");?>
<div id="pro-view-85" class="w-mask" style="display:none">
   <iframe style="position:absolute;top:0;left:0;z-index:-1;filter:Alpha(Opacity=0);width:100%;height:100%" scrolling="no" frameborder="0"></iframe>
  </div>
  <div style="display:none;" id="pro-view-84" class="w-msgbox m-detail-codesDetail"> 
   <a data-pro="close" href="javascript:void(0);" class="w-msgbox-close">&times;</a> 
   <div class="w-msgbox-hd" data-pro="header"></div> 
   <div class="w-msgbox-bd" data-pro="entry">
    <div class="m-detail-codesDetail-bd">
     <h3>奖品获得者本期总共参与了<span class="txt-red"><?php echo $user_shop_number; ?></span>人次</h3>
     <div class="m-detail-codesDetail-wrap">
      <dl class="m-detail-codesDetail-list f-clear">
		<dt><?php echo microt($user_shop_time); ?></dt>
        <?php echo yunma($user_shop_codes,"dd"); ?>
                       

     </div>
    </div>
   </div> 
  </div> 
  
