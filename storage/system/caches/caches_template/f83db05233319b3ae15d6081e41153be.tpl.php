<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册-<?php echo _cfg("web_name"); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/login_new.css"/>
<link href="<?php echo G_TEMPLATES_STYLE; ?>/js/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/JQuery.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/jquery.Validform.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/passwordStrength-min.js"></script>
<script type="text/javascript">
$(function(){		
	var demo=$(".reg_body_cont_box").Validform({
		tiptype:2,
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:20,
				trigger:function(obj,error){
					if(error){
						obj.parent().next().find(".Validform_checktip").show();
						obj.parent().next().find(".passwordStrength").hide();
					}else{
						obj.parent().next().find(".Validform_checktip").hide();
						obj.parent().next().find(".passwordStrength").show();	
					}
				}
			}
		}

	});	
})
</script>
</head>

<body>
<div class="reg_top">
	<div class="reg_logo"><a href="<?php echo G_WEB_PATH; ?>"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/logo_login.png" /></a></div>
	<div class="reg_help"><p style="width:120px; margin-right:8px;">已经是会员？<a href="<?php echo WEB_PATH; ?>/member/user/login">[请登录]</a></p><p><a href="<?php echo G_WEB_PATH; ?>">返回首页</a>&nbsp;&nbsp;&nbsp;&nbsp;|</p><p><a href="<?php echo WEB_PATH; ?>/help/1">帮助中心</a></p></div>
	<div class="reg_safe">
		<p class="reg_safe1">正品保障</p><p class="reg_safe2">全国包邮</p><p class="reg_safe3">安全支付</p><p class="reg_safe4">全国联保</p>
	</div>
</div>
<div class="reg_body">
	<div class="reg_body_cont">
		<div class="reg_body_cont_box">
			<div class="reg_body_cont_title"><b>/注册/</b><span>USER REGISTRATION</span></div>
			<form method="post" action="" enctype="application/x-www-form-urlencoded">
				<dl>
					<dt>帐号：</dt>
					<dd><input id="ipyanz" datatype="m | e" sucmsg="帐号验证通过！" nullmsg="请输入您的手机号！" errormsg="请填写手机号或邮箱！" type="text" name="name" class="inputxt" /></dd>
					<dd class="login_dd"><div style="margin:7px 0 0 10px;" class="Validform_checktip">请输入您的手机号</div></dd>
				</dl>
				<dl>
					<dt>密码：</dt>
					<dd><input datatype="*6-20" plugin="passwordStrength" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！" type="password" name="userpassword" class="inputxt" maxlength="20"/></dd>
					<dd class="login_dd">
						<div style="margin:7px 0 0 10px;" class="Validform_checktip">请填写长度为6到20的长度密码</div>
						<div class="passwordStrength" style="display:none;"><b style="margin:0 0 0 8px;">密码强度：</b> <span>弱</span><span>中</span><span class="last">强</span></div>
					</dd>
				</dl>
				<dl>
					<dt>确认密码：</dt>
					<dd><input tip="test"  datatype="*" recheck="userpassword" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" type="password" name="userpassword2" class="inputxt" maxlength="20"/></dd>
					<dd class="login_dd"><div style="margin:7px 0 0 10px;" class="Validform_checktip">请再次填写密码确认</div></dd>
				</dl>
				<dl>
					<dt>验证码：</dt>
					<dd><input type="text" style="text-transform:uppercase;" name="checkcode" id='checkcode' class="inputxt2" maxlength="6"/></dd>
                    <img id="checkcode" src="/index.php/api/checkcode/image/80_27/" onclick="this.src='/index.php/api/checkcode/image/80_27/&'+Math.random()"/>
				</dl>
				<div class="login_Agreements"><input type="checkbox" class="login_Agreements_checkbox" /> 我同意<a class="login_Agreements_btn" href="javascript:void(0)">购了么服务协议</a></div>
				<div class="login_Membut">			
					<input name="submit" type="submit" class="Mem_orangebut" value="下一步">
				</div>
		  </form>

		</div>
	</div>
</div>
<div class="reg_foot">
	<div class="reg_foot_nav">
		<ul>
			<?php echo Getheader('foot'); ?>
		</ul>
	</div>
	<p>购了么 版权所有 @ 2015-2016  鲁ICP备16023090号-1 </p>
</div>

<div id="pro-view-85" class="w-mask" style="display:none">
   <iframe style="position:absolute;top:0;left:0;z-index:-1;filter:Alpha(Opacity=0);width:100%;height:100%" scrolling="no" frameborder="0"></iframe>
  </div>
  <div id="pro-view-84" class="w-msgbox m-detail-codesDetail" style="display:none"> 
   <a data-pro="close" href="javascript:void(0);" class="w-msgbox-close">&times;</a> 
   <div class="w-msgbox-hd" data-pro="header"></div> 
   <div class="w-msgbox-bd" data-pro="entry">
    <div class="m-detail-codesDetail-bd">
     <h3>服务协议</h3>
     <div class="m-detail-codesDetail-wrap">
    
		    <p class="Service_em">   欢迎您访问并使用充满互动乐趣的购物网站-购了么(http://www.goleme.cc)，作为为用户提供全新、有趣购物模式的互联网公司，购了么通过在线网站为您提供各项相关服务。当使用购了么的各项具体服务时，您和购了么都将受到本服务协议所产生的制约，购了么会不断推出新的服务，因此所有服务都将受此服务条款的制约。请您在注册前务必认真阅读此服务协议的内容并确认，如有任何疑问，应向购了么咨询。一旦您确认本服务协议后，本服务协议即在用户和购了么之间产生法律效力。您在注册过程中点击“同意以下条款提交注册信息”按钮即表示您完全接受本协议中的全部条款。随后按照页面给予的提示完成全部的注册步骤。
购了么将可能不定期的修改本服务协议的有关条款，并保留在必要时对此协议中的所有条款进行随时修改的权利。一旦协议内容有所修改，购了么将会在网站重要页面或社区的醒目位置第一时间给予通知。如果您继续使用购了么的服务，则视为您受协议的改动内容。如果不同意本站对协议内容所做的修改，购了么会及时取消您的服务使用权限。本站保留随时修改或中断服务而不需告知用户的权利。本站行使修改或中断服务的权利，不需对用户或第三方负责。
一、用户注册
1、用户注册是指用户登录购了么，按要求填写相关信息并确认同意本服务协议的过程。
2、购了么用户必须是具有完全民事行为能力的自然人，或者是具有合法经营资格的实体组织。无民事行为能力人、限制民事行为能力人以及无经营或特定经营资格的组织不得注册为购了么用户或超过其民事权利或行为能力范围与购了么进行交易，如与购了么进行交易的，则服务协议自始无效，购了么有权立即停止与该用户的交易、注销该用户账户，并有权要求其承担相应法律责任。
二、用户的帐号，密码和安全性
用户一旦注册成功，成为本站的合法用户。用户将对用户名和密码安全负全部责任。此外，每个用户都要对以其用户名进行的所有活动和事件负全责。用户若发现任何非法使用用户帐号或存在安全漏洞的情况，请立即通告本站。
三、购了么原则
平等原则：用户和购了么在交易过程中具有同等的法律地位。
自由原则：用户享有自愿向购了么参与购买商品的权利，任何人不得非法干预。
公平原则：用户和购了么行使权利、履行义务应当遵循公平原则。
诚实信用原则：用户和购了么行使权利、履行义务应当遵循诚实信用原则。
履行义务原则：用户向购了么参与商品分享购买时，用户和购了么皆有有义务根据本服务协议的约定完成该等交易（法律或本协议禁止的交易除外）
四、用户的权利和义务
1、用户有权拥有其在购了么的用户名及密码，并用该用户名和密码登录购了么参与商品购买。用户不得以任何形式转让或授权他人使用自己的购了么用户名。
2、用户有权根据本协议的规定以及购了么网站上发布的相关规则在购了么上查询商品信息、发表使用体验、参与商品讨论、邀请关注好友、上传商品图片、参加购了么的有关活动，以及享受购了么提供的其它信息服务
3、用户有义务在注册时提供自己的真实资料，并保证诸如电子邮件地址、联系电话、联系地址、邮政编码等内容的有效性及真实性，保证购了么可以通过上述联系方式与用户本人进行联系。同时，用户也有义务在相关资料发生变更时及时更新有关注册资料。用户保证不以他人资料在购了么进行注册和参与商品分享购买。
4、用户应当保证在购了么参与商品分享购买时遵守诚实信用原则，不扰乱网上交易的正常秩序。
5、用户在成为购了么的会员后，可按购了么的福分规则享受福分获得。累积福分可用于福分商城中的相应福分商品兑换。福分规则连同与该规则相关的条款和条件，构成用户与购了么之间的完整协议。接受本协议，即表明接受福分规则中的条款和条件。
6、用户享有言论自由权利；并拥有适度修改、删除自己发表的文章的权利用户不得在购了么发表包含以下内容的言论：
1) 反对宪法所确定的基本原则，煽动、抗拒、破坏宪法和法律、行政法规实施的；
2) 煽动颠覆国家政权，推翻社会主义制度，煽动、分裂国家，破坏国家统一的；
3) 损害国家荣誉和利益的；
4) 煽动民族仇恨、民族歧视，破坏民族团结的；
5) 任何包含对种族、性别、宗教、地域内容等歧视的；
6) 捏造或者歪曲事实，散布谣言，扰乱社会秩序的；
7) 宣扬封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；
8) 公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；
9) 损害国家机关信誉的；
10) 其他违反宪法和法律行政法规的。
7、用户在发表使用体验、讨论图片等，除遵守本条款外，还应遵守该讨论区的相关规定。
8、未经购了么同意，禁止用户在网站发布任何形式的广告。
五、购了么的权利和义务
1、购了么有义务在现有技术上维护整个网上交易平台的正常运行，并努力提升和改进技术，使用户网上交易活动得以顺利进行；
2、对用户在注册和使用购了么网上交易平台中所遇到的与交易或注册有关的问题及反映的情况，购了么应及时作出回复；
3、对于用户在购了么网站上作出下列行为的，购了么有权作出删除相关信息、终止提供服务等处理，而无须征得用户的同意：
1) 购了么有权对用户的注册信息及购买行为进行查阅，发现注册信息或购买行为中存在任何问题的，有权向用户发出询问及要求改正的通知或者作出删除等处理；
2) 用户违反本协议规定或有违反法律法规和地方规章的行为的，购了么有权停止传输并删除其信息，禁止用户发言，注销用户账户并按照相关法律规定向相关主管部门进行披露。
3) 对于用户在购了么进行的下列行为，购了么有权对用户采取删除其信息、禁止用户发言、注销用户账户等限制性措施：包括发布或以电子邮件或以其他方式传送存在恶意、虚假和侵犯他人人身财产权利内容的信息，进行与分享购物无关或不是以分享购物为目的的活动，恶意注册、签到、评论等方式试图扰乱正常购物秩序，将有关干扰、破坏或限制任何计算机软件、硬件或通讯设备功能的软件病毒或其他计算机代码、档案和程序之资料，加以上载、发布、发送电子邮件或以其他方式传送，干扰或破坏购了么网站和服务或与购了么网站和服务相连的服务器和网络，或发布其他违反公共利益或可能严重损害购了么和其它用户合法利益的信息。
4、用户在此免费授予购了么永久性的独家使用权(并有权对该权利进行再授权)，使购了么有权在全球范围内(全部或部分地)使用、复制、修订、改写、发布、翻译和展示用户公示于购了么网站的各类信息，或制作其派生作品，和或以现在已知或日后开发的任何形式、媒体或技术，将上述信息纳入其它作品内。
5、对于购了么网络平台已上架商品，购了么有权根据市场变动修改商品价格，而无需提前通知客户。
6、购了么分享购物模式，秉着双方自愿原则，分享购物存在风险，购了么不对抽取的“幸运云购码”结果承担责任，望所有用户谨慎参与。
7、90天未达到“总需参与人次”的商品，用户可通过客服申请退款，所退款项将在3个工作日内，退还至云购账户中。
六、配送及费用
购了么将会把产品送到您所指定的送货地址。全国免费配送（港澳台地区或特殊产品说明除外）。
请清楚准确地填写您的真实姓名、送货地址及联系方式。因如下情况造成配送延迟或无法配送等，本站将不承担责任：
1、客户提供错误信息和不详细的地址；
2、货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果。
3、不可抗力，例如：自然灾害、交通戒严、突发战争等。
七、商品缺货规则
用户通过参与购了么所获得的商品如果发生缺货，用户和购了么皆有权取消该交易，所花费的款购了么将全部返还。或购了么对缺货商品进行预售登记，购了么会尽最大努力在最快时间内满足用户的购买需求，当缺货商品到货，购了么将第一时间通过邮件、短信或电话通知用户，方便用户进行购买。预售登记并不做交易处理，不构成要约。
八、责任限制
在法律法规所允许的限度内，因使用购了么服务而引起的任何损害或经济损失，购了么承担的全部责任均不超过用户所购买的与该索赔有关的商品价格。这些责任限制条款将在法律所允许的最大限度内适用，并在用户资格被撤销或终止后仍继续有效。
九、网络服务内容的所有权
本站定义的网络服务内容包括：文字、软件、声音、图片、录象、图表、广告中的全部内容；电子邮件的全部内容；本站为用户提供的其他信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在本站和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品。本站所有的文章版权归原文作者和本站共同所有，任何人需要转载本站的文章，必须征得原文作者或本站授权。
十、用户隐私制度
我们不会向任何第三方提供，出售，出租，分享和交易用户的个人信息。当在以下情况下，用户的个人信息将部分或全部被善意披露：
1、经用户同意，向第三方披露；
2、如用户是合资格的知识产权投诉人并已提起投诉，应被投诉人要求，向被投诉人披露，以便双方处理可能的权利纠纷；
3、根据法律的有关规定，或者行政或司法机构的要求，向第三方或者行政、司法机构披露；
4、如果用户出现违反中国有关法律或者网站政策的情况，需要向第三方披露；
5、为提供你所要求的产品和服务，而必须和第三方分享用户的个人信息；
6、其它本站根据法律或者网站政策认为合适的披露。
十一、法律管辖和适用
1、本协议的订立、执行和解释及争议的解决均应适用中国法律。
2、如发生本站服务条款与中国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它合法条款则依旧保持对用户产生法律效力和影响。
3、本协议的规定是可分割的，如本协议任何规定被裁定为无效或不可执行，该规定可被删除而其余条款应予以执行。
4、如双方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向本站所在地的人民法院提起诉讼。           

     </div>
    </div>
   </div> 
  </div> 
  
</body>
</html>
<script>
$(function(){
	$(".login_Agreements_btn").click(function(){
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

</script>