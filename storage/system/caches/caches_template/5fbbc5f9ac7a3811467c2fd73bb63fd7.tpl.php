<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/Comm.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/MyCart.css"/>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/JQuery.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/jquery.cookie.js"></script>

<div class="shop_payment">
        <ul class="payment">
           <li class="first_step">第一步：提交订单</li>
            <li class="arrow_2"></li>
            <li class="secend_step">第二步：网银支付</li>
            <li class="arrow_1"></li>
            <li class="third_step orange_Tech">第三步：支付成功 等待揭晓</li>
            <li class="arrow_3"></li>
            <li class="fourth_step">第四步：揭晓获得者</li>
            <!-- <li class="arrow_2"></li>
            <li class="fifth_step">第五步：晒单奖励</li> -->
        </ul>
		<div id="divResult" class="wait_list hidden" style="display: block;">
			<div class="wait_list_tips ">
			<dl>
				<dt><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/login_exp04.png" border="0" alt=""></dt>
				<dd><h2 class="orange Fb">恭喜您，支付成功！请等待系统为您揭晓！</h2>
					<p>您现在可以<a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" class="blue">查看云购记录</a>或<a href="<?php echo WEB_PATH; ?>" class="blue">继续购物</a></p>
					<!-- <p>总共成功云购1件商品，信息如下：</p> -->
				</dd>
			</dl>
			</div>
			<!--
			<div class="wait_listCon">
			<ul>
				<li class="wait_Ltit">
					<span class="wait_Cw01">购买时间</span>
					<span class="wait_Cw02">商品名称</span>
					<span class="wait_Cw03">云购人次</span>
					<span class="wait_Cw04">云购编码</span>
				</li>
              
				<li class="wait_Lodity">
					<span class="wait_Cw01"></span>
					<span class="wait_Cw02"><a href="<?php echo WEB_PATH; ?>home/index/item" class="blue">(第6期)苹果（Apple）iPhone 5 32G智能手机</a></span>
					<span class="wait_Cw03">1</span>
					<span class="wait_Cw04"><b>10002561</b></span>
				</li>
                
			</ul>
			</div>
			-->
		</div>
</div>
<!--footer 开始-->
<?php include templates("index","footer");?>