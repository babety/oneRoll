<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<!--晒单详情-->
<div class="dir">
	<div class="dir_cont">
		<a href="<?php echo WEB_PATH; ?>">首页</a> &gt; <a href="<?php echo WEB_PATH; ?>/go/shaidan/">晒单分享</a> &gt; 晒单详请
	</div>
</div>
<div class="index_body">
	<div class="share_box">
		<div class="share_box_user">
			<div class="share_box_l">
				<div class="share_box_l_pic"><a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($shaidan['sd_userid']); ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($shaidan['sd_userid'],'img','8080'); ?>" /></a></div>
				<p class="share_box_l_name">幸运获得者：<a class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($shaidan['sd_userid']); ?>" target="_blank"><?php echo userid($shaidan['sd_userid'],'username'); ?></a></p>
				<p>总共云购：<b class="blue"><?php echo get_user_goods_num($shaidan['sd_userid'],$shaidan['sd_shopid']); ?></b>人次</p>
				<?php 
				$jikxiao = get_shop_if_jiexiao($shaidan['sd_shopid']);	
				 ?>
				<?php if($jikxiao['q_uid']): ?>
				<p>幸运云购码：<?php echo $jikxiao['q_user_code']; ?>	</p>
				<p>揭晓时间：<?php echo date("Y-m-d H:i:s",$jikxiao['q_end_time']); ?></p>
				<?php endif; ?>
			</div>
			<div class="share_box_r">
				<a class="share_box_r_img" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $shaidan['sd_shopid']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $goods['thumb']; ?>" ></a>
				<div class="share_box_r_getinfo">
					<p class="share_box_r_title"><a class="gray01" href="<?php echo WEB_PATH; ?>/goods/<?php echo $goods['id']; ?>" target="_blank">(第<?php echo $goods['qishu']; ?>期)<?php echo $goods['title']; ?></a></p>
					<p>价值：￥<?php echo $goods['money']; ?></p>
					<p id="GoToBuy"><a class="share_box_r_a" href="<?php echo WEB_PATH; ?>/goods/<?php echo $goods['id']; ?>" target="_blank">
					<?php if(!empty($goods['q_uid'])): ?>
					已揭晓
					<?php  else: ?>
					第<?php echo $goods['qishu']; ?>期正在进行中...
					<?php endif; ?>
					</a></p>
				</div>
			</div>
		</div>
		<div class="share_box_title">
			<?php echo $shaidan['sd_title']; ?>
		</div>
		<div class="share_box_time">
			晒单时间：<span><?php echo date("Y-m-d H:i:s",$shaidan['sd_time']); ?></span>
		</div>
		<div class="share_box_cont">
		<i class="share_box_cont_l"></i>
			<?php echo $shaidan['sd_content']; ?>
		<i class="share_box_cont_r"></i>
		</div>
		<div class="share_box_img">
			<?php $ln=1;if(is_array($sd_photolist)) foreach($sd_photolist AS $sdimg): ?>
			<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sdimg; ?>" border="0" />
			<?php  endforeach; $ln++; unset($ln); ?>
		</div>
		<div class="clear"></div>
		<div class="mood">
			<div class="moodwm">
				<div class="moodm hidden" style="display: block;">
					 <span class="smile" id="emHits"><i></i><b>羡慕嫉妒恨(<em><?php echo $shaidan['sd_zhan']; ?></em>)</b></span>
					 <span class="much"> <i></i>评论(<em id="emReplyCount"><?php echo $shaidan['sd_ping']; ?></em>)</span>
				</div>
				<div class="share">
					<span class="fen">分享到：</span>
					<!-- Baidu Button BEGIN -->
					<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
					<a class="bds_qzone"></a>
					<a class="bds_tsina"></a>
					<a class="bds_tqq"></a>
					<a class="bds_renren"></a>
					<a class="bds_t163"></a>
					<span class="bds_more"></span>
					</div>
					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=671207" ></script>
					<script type="text/javascript" id="bdshell_js"></script>
					<script type="text/javascript">
					document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
					</script>
					<!-- Baidu Button END -->
				</div>
			</div>
		</div>
		<div class="share_box_bottom">
			<div id="bottomComment" class="qcomment_bottom_reply clearfix">
				<div class="Comment_Reply clearfix">
					<div class="Comment-pic">
					<?php if(!$member or $member['img']==null): ?>
					<img src="<?php echo G_WEB_PATH; ?>/statics/uploads/photo/member.jpg" width="50" height="50" />
					<?php  else: ?>
					<img id="imgUserPhoto" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo userid($member['uid'],'img'); ?>" width="50" height="50" border="0"/>
					<?php endif; ?>	
					</div>
					<div class="Comment_form">
						<div class="Comment_textbox">
						<?php if(!$member): ?>					
							<div id="notLogin" name="replyLogin" class="Comment_login">
								请您<a href="<?php echo WEB_PATH; ?>/login" class="blue" name="replyLoginBtn">登录</a>
								或<a href="<?php echo WEB_PATH; ?>/register" class="blue">注册</a>后再回复评论
							</div>
						<?php  else: ?>
							<form action="" method="post">
							<textarea name="sdhf_content" class="Comment-txt"></textarea>
							<input type="submit" name="submit" value="发表评论" class="reply_unbotton">
							</form>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div id="commentMain" class="qcomment_main">
			<ul>
				<?php $ln=1;if(is_array($shaidan_hueifu)) foreach($shaidan_hueifu AS $sdhf): ?>
				<li class="Comment_single">
					<div class="Comment_box_con clearfix">
						<div class="User_head">
						<a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sdhf['sdhf_userid']); ?>" target="_blank" >
							<?php if(userid($sdhf['sdhf_userid'],'img')==null): ?>
							<img src="<?php echo G_WEB_PATH; ?>/statics/uploads/photo/member.jpg" width="50" height="50" />
							<?php  else: ?>
							<img id="imgUserPhoto" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo userid($sdhf['sdhf_userid'],'img'); ?>" width="50" height="50" border="0"/>
							<?php endif; ?>		
						</a>
						</div>
						<div class="Comment_con">
							<div class="Comment_User">
								<span><a class="blue" href="#" target="_blank"><?php echo userid($sdhf['sdhf_userid'],'username'); ?></a></span>
							</div>
							<div class="C_summary"><?php echo $sdhf['sdhf_content']; ?>
								<span class="Summary-time"><?php echo date("Y-m-d H:i",$sdhf['sdhf_time']); ?></span>
							</div>
						</div>
					</div>
				</li>
				<?php  endforeach; $ln++; unset($ln); ?>
			</ul>
		</div>			
		<!--用户评论列表开始-->
		<div class="Comment_main clearfix" id="CommentMain"></div>
		<!--用户评论部分结束-->
		</div>
		
	</div>
	<div class="share_list">
		<div class="share_list_title"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/share_list_title.jpg" /></div>
		<div class="share_list_cont">
			<?php $ln=1;if(is_array($shaidannew)) foreach($shaidannew AS $sd): ?>
			<div class="sharr_list_box">
				<div class="share_list_box_img">
					<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank">
						<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>">
					</a>
				</div>
				<div class="share_list_box_name">
					<a class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sd['sd_userid']); ?>" target="_blank"><?php echo userid($sd['sd_userid'],'username'); ?></a><?php echo date("Y-m-d",$sd['sd_time']); ?>
				</div>
				<div class="share_list_box_cont">
					<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><?php echo _strcut($sd['sd_content'],100); ?></a>
				</div>
			</div>
			<?php  endforeach; $ln++; unset($ln); ?>
			<div class="share_list_button"><a href="<?php echo WEB_PATH; ?>/go/shaidan/" target="_blank">查看全部</a></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
	

<script>
$(function(){
	if($.cookie('xianmu')==<?php echo $shaidan['sd_id']; ?>){
		$("#emHits").addClass("smile-have");
		return false;
	}
	$("#emHits").click(function(){		
		$.post(
			"<?php echo WEB_PATH; ?>/go/shaidan/xianmu",
			{id:"<?php echo $shaidan['sd_id']; ?>"},
			function(data){
				$("#emHits em").text(data);
				$("#emHits").addClass("smile-have");
				$.cookie("xianmu","<?php echo $shaidan['sd_id']; ?>", { expires:7,path: '/'});
			}
		);
	})
})
</script>
<?php include templates("index","footer");?>