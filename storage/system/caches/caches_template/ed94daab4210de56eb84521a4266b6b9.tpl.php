<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<div class="main-content clearfix">
<?php include templates("member","left");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-setUp.css"/>
<link href="<?php echo G_TEMPLATES_STYLE; ?>/js/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_STYLE; ?>/js/demo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/jquery.Validform.min.js"></script>
<script type="text/javascript">
$(function(){		
	var demo=$(".registerform").Validform({
		tiptype:2,		
	});
})
</script>
<div class="R-content">
	<div class="member-t">
		<h2>邮箱验证</h2>
		<a href="javascript:history.go(-1);" class="blue">&lt;&lt; 返回</a>
	</div>
	<div class="email_verification">
		<div class="prompt orange">请完成邮箱验证，认证邮箱不仅能加强账户安全，快速找回密码，还会在您成功云购到商品后及时通知您！<em></em></div>
		<form class="registerform" method="post" action="<?php echo WEB_PATH; ?>/member/home/sendsuccess">
		<div class="text_email">
			<span>输入邮箱地址：</span>
			<input datatype="e"  nullmsg="不能为空" errormsg="邮箱格式错误" name="email" type="text" maxlength="100" class="email"/>
			<input name="submit" type="submit" class="orangebut" value="发送验证邮件"/>			
		</div>
		<div  class="text_email" style="padding-top:0px"><div class="Validform_checktip">点击“发送验证邮件”购了么系统将会给您发送一封验证邮件到您的邮箱！</div></div>
		</form>
	</div>
</div>
		
</div>
<?php include templates("index","footer");?>