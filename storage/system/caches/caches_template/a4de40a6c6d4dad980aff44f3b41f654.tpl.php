<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/css.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/pageDialog.css"/>
<div class="layout980 clearfix"> 
<?php include templates("us","left");?>
<div class="content clearfix">
	<div class="per-info">
		<ul>
			<li class="info-mane gray02">
				<b class="gray01">
				<?php echo get_user_name($member,'username'); ?>
				</b>			
			</li>
			<li class="info-address"><span><a href="" class="blue"><s></s><?php echo WEB_PATH; ?>/uname/<?php echo idjia($member['uid']); ?></a></span></li>
			<li class="info-intro gray02">
			<?php if($member['qianming']!=null): ?>
			<?php echo $member['qianming']; ?>
			<?php  else: ?>
			这家伙很懒，什么都没留下。
			<?php endif; ?>
			</li>
		</ul>
	</div>
	<?php include templates("us","tab");?>
	<?php if($memberhuode): ?>
	<div id="divInfo0" class="New-content">
		<?php $ln=1;if(is_array($memberhuode)) foreach($memberhuode AS $go): ?>
        <?php 
        	$jiexiao = get_shop_if_jiexiao($go['shopid']);
    	 ?>
        <?php if($jiexiao): ?>
		<div class="scroll-list">
			<div class="R-tit">
				<span class="tit-name gray01">
					<?php echo get_user_name($member,'username'); ?>
				</span>
				<i>在<?php echo microt($go['time'],"r"); ?>云购了</i>                
			<span class="tit blue"><a target="_blank" href="<?php echo WEB_PATH; ?>/go/index/dataserver/<?php echo $go['shopid']; ?>" class="blue"><?php echo $go['shopname']; ?></a></span>
			</div>       
			<div class="buy-com">
            	
				<p class="buy-pic"><a target="_blank" href="<?php echo WEB_PATH; ?>/go/index/dataserver/<?php echo $go['shopid']; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo yunjl($go['shopid']); ?>"></a></p>
				<div class="buy-rcon">
					<p class="buy-name"><a target="_blank" rel="nofollow" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $go['shopid']; ?>" class="blue">(第<?php echo $go['shopqishu']; ?>期)<?php echo $go['shopname']; ?></a></p>	
                    
					<p class="buy-money gray02">价值：<span class="money"><i class="rmb"><?php echo $jiexiao['money']; ?></i></span></p>
					<p class="buy-code gray02">幸运中奖号码：<span class="orange"><?php echo $go['huode']; ?></span></p>
					<p class="buy-time gray02">揭晓时间：<?php echo date("Y-m-d H:i:s",$jiexiao['q_end_time']); ?></p>
					<p><a target="_blank" href="<?php echo WEB_PATH; ?>/go/index/dataserver/<?php echo $go['shopid']; ?>_<?php echo $go['shopqishu']; ?>" class="button03">去看看</a></p>
				</div>               
			</div>               
		</div>
           <?php endif; ?>
		<?php  endforeach; $ln++; unset($ln); ?>		
	</div>
	<?php  else: ?>
	<div class="New-content"><div class="tips-con"><i></i>TA还没有获得商品哦</div></div> 
	<?php endif; ?>
</div>


</div>
<?php include templates("index","footer");?>