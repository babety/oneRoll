<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/newbie.css"/>
<div class="GuideContent clearfix">
	<div class="GuideW">

		<div class="Guidebor clearfix">

			<div class="Guide-Separate">
				
			</div> 
			<div class="Rule clearfix">
				<h2><img src="<?php echo G_UPLOAD_PATH; ?>/newbie/Guide_10.jpg" border="0" alt=""></h2>
				<ul class="Rule-Exp">
					<li>购了么指用户花费1元兑换一个购了么币，用户可凭购了么币使用购了么云购的服务。</li>
					<li>每件商品参考市场价平分成相应“等份”，每份1云小米币，1份对应1个云购码。</li>
					<li>同一件商品可以购买多次或一次购买多份。</li>
					<li>当一件商品所有“等份”全部售出后计算出“幸运云购码”，拥有“幸运云购码”者即可获得此商品。</li>
				</ul>
			</div>
			<div class="Rule clearfix Rulemat">
				<h2><img src="<?php echo G_UPLOAD_PATH; ?>/newbie/Guide_11.jpg" border="0" alt=""></h2>
				<ul class="Rule-Exp">
					<li>1.	取该商品最后购买时间前，网站所有商品100条购买时间记录.</li>
					<li>2.	时间按时、分、秒、毫秒依次排列组成一组数值。</li>
					<li>3.	将这100组数值之和除以商品总需参与人次后取余数，余数加上10,000,001即为“幸运夺宝码”。</li>
					
				</ul>
			</div>
			<div class="Rule-line"></div>
			<div class="Rule-button">
			</div>
		</div>

		<div class="clear"></div>
	</div>
</div>
<!--新手指南结束-->
<?php include templates("index","footer");?>