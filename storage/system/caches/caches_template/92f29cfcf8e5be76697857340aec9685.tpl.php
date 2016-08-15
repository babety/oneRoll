<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<div class="main-content clearfix">
<?php include templates("member","left");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-topic.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-invitation.css"/>

 <div class="R-content">
	<div class="subMenu">
		<a id="linkApply" class="current">提现申请</a>
		<a id="linkRecharge">充值到账户余额</a>
	</div>
 
	<div class="total">
	<dt>
		</dt><dd>佣金总余额：<b class="orange"><?php echo $total; ?></b>元</dd>  <dd>活动佣金：<b class="orange"><?php echo $cashouthdtotal; ?></b>元</dd> <dd>冻结金额（提现审核中）：<b class="orange"><?php echo $cashoutdjtotal; ?></b>元</dd>
	
	<dd class=" "id="divTip">为确保您申请的金额能够正确无误的转入您的账户，请填写真实有效的账户信息，以下信息均为必填项！</dd>
   </div>
	<div id="divSQTX" class="Apply-con">
	  <form name="form1" action="" method="post">
		<dl>
			<dt>佣金余额：</dt>
			<dd><span id="spanBrokerage" class="orange"><?php echo $cashouthdtotal; ?></span> 元&nbsp;<span class="gray02" style="color:#999999">余额满100元时才可以申请提现</span></dd>
		</dl>
		<dl>
			<dt>申请提现金额：</dt>
			<dd><input id="txtAppMoney" type="text" name="money" onkeyup="value=value.replace(/\D/g,'')" class="inp-money txtAri" value="" maxlength="10" tip="1" /><b>元</b>&nbsp;<span id="tip1"></span></dd>
		</dl>
		<dl>
			<dt>开&nbsp;&nbsp;户&nbsp;人：</dt>
			<dd><input name="txtUserName" type="text" id="txtUserName" class="input-txt" maxlength="10" tip="2" />&nbsp;<span id="tip2"></span></dd>
		</dl>
		<dl>
			<dt>银行名称：</dt>
			<dd><input name="txtBankName" type="text" id="txtBankName" class="input-txt" tip="3" />&nbsp;<span id="tip3"></span></dd>
		</dl>
		<dl>
			<dt>开户支行：</dt>
			<dd><input name="txtSubBank" type="text" id="txtSubBank" class="input-txt" tip="4" />&nbsp;<span id="tip4"></span></dd>
		</dl>
		<dl>
			<dt>银行帐号：</dt>
			<dd><input name="txtBankNo" type="text" id="txtBankNo" class="input-txt txtAri" maxlength="23" tip="5" />&nbsp;<span id="tip5"></span></dd>
		</dl>
		<dl>
			<dt>联系电话：</dt>
			<dd><input name="txtPhone" type="text" id="txtPhone" class="input-txt txtAri" maxlength="13" tip="6" />&nbsp;<span id="tip6">格式输入例如186****2310</span></dd>
		</dl>
		
		<div class="Apply-button">
			<input type="submit" name="submit1" id="btnSQTX" class="bluebut" title="提交申请" value="提交申请">
		</div>
	 </form>
	</div>
	<div id="divSQCZ" class="Apply-con recharge" style="display:none;">
	 <form name="form2" action="" method="post">
		<dl>
			<dt>当前可充值金额：</dt>
			<dd><span id="spanBrokerage2" class="orange"><?php echo $cashouthdtotal; ?></span> 元 <span class="gray02">当佣金余额满1元即可充值</span></dd>
		</dl>
		<dl>
			<dt>申请充值金额：</dt>
			<dd><input id="txtCZMoney" name="txtCZMoney" type="text" onkeyup="value=value.replace(/\D/g,'')" class="inp-money txtAri" value="" tip="请输入充值金额"/><b>元</b>&nbsp;<span class="gray02" id="tip7">以整数为单位提取</span></dd>
		</dl>	
	
		<div class="Apply-button">
			<input type="submit" name="submit2" id="btnSQCZ" class="bluebut" title="充值" value="充值">
		</div>					
		
	</form>
	</div>
 </div>
  
     
<style>
   #divSQTX span{color:#FF6600};
</style>
<script>
$(function(){
	$(".subMenu a").click(function(){
		var id=$(".subMenu a").index(this);
		$(".subMenu a").removeClass().eq(id).addClass("current");
		$(".R-content .topic").hide().eq(id).show();
	});
	
	$("#linkApply").click(function(){
	    $("#divSQTX").show();
	    $("#divTip").show();
		 $("#divSQCZ").hide();	
	});	
  $("#linkRecharge").click(function(){
		  $("#divSQTX").hide();
		  $("#divTip").hide();
		  $("#divSQCZ").show();
	
	});
	
	function trim(s){
		if(s.length>0){
		if(s.charAt(0)==" ")
		s=s.substring(1,s.length);
		if(s.charAt(s.length-1)==" ")
		s=s.substring(0,s.length-1);
		 
		if(s.charAt(0)==" "||s.charAt(s.length-1)==" ")
		return trim(s);
	}
	  return s;
	}
	//  提交申请 判断
	$("#btnSQTX").click(function(){
	    var Money=trim($("#txtAppMoney").val());
	    var UserName=trim($("#txtUserName").val());
	    var BankName=trim($("#txtBankName").val());
	    var Bank=trim($("#txtSubBank").val());
	    var BankNo=trim($("#txtBankNo").val());
	    var Phone=trim($("#txtPhone").val());
		
		 
		if(Money==''){
		   
		   $("#tip1").html("*&nbsp;&nbsp;请输入提现金额");
		   
		   return false;
		
		}else if(UserName==''){
		    $("#tip2").html("*&nbsp;&nbsp;请输入开户人");
			return false;
		
		}else if(BankName==''){
		    $("#tip3").html("*&nbsp;&nbsp;请输入银行名称");
			return false;
		
		}else if(Bank==''){
		    $("#tip4").html("*&nbsp;&nbsp;请输入开户支行");
			return false;
		
		}else if(BankNo==''){
		    $("#tip5").html("*&nbsp;&nbsp;请输入银行帐号");
			return false;
		  
		}else if(Phone==''){
		    $("#tip6").html("*&nbsp;&nbsp;请输入联系电话");
			return false;
		}else{
		  return true;
		}
	});
	
  $("#txtAppMoney").blur(function(){
     var Money=trim($("#txtAppMoney").val());
	   if(Money==''){
	      $("#tip1").html("*&nbsp;&nbsp;请输入提现金额");
	   }else if(Money><?php echo $cashouthdtotal; ?>){
	      $("#tip1").html("*&nbsp;&nbsp;输入额超出可提现金额");
		  $(this).val("");
	   }else if(Money<100){
	      $("#tip1").html("*&nbsp;&nbsp;佣金余额未满100元,不能提现!");	
  		  $(this).val("");
	   }else{
	       $("#tip1").html("");
	   }     
	   
	});
	
	
   $("#txtUserName").blur(function(){
        var UserName=trim($("#txtUserName").val());
	    
	   if(UserName==''){
	       $("#tip2").html("*&nbsp;&nbsp;请输入开户人");
	   }else if(!isCardName(UserName)){
		    $("#tip2").html("*&nbsp;&nbsp;开户人输入有误");
			 $(this).val("");
	   }else{
	        $("#tip2").html("");
	   }
	   
	});
	
  $("#txtBankName").blur(function(){
  var BankName=trim($("#txtBankName").val());
	    
	   if(BankName==''){
	       $("#tip3").html("*&nbsp;&nbsp;请输入银行名称");
	   }else if(!isCardName(BankName)){
	       $("#tip3").html("*&nbsp;&nbsp;银行名称输入有误");
		    $(this).val("");
	   }else{
	       $("#tip3").html("");
	   }
	   
	});
	
		$("#txtSubBank").blur(function(){
		var Bank=trim($("#txtSubBank").val());
	    
	   if(Bank==''){
	       $("#tip4").html("*&nbsp;&nbsp;请输入开户支行");
	   }else if(!isCardName(Bank)){
	     $("#tip4").html("*&nbsp;&nbsp;开户支行输入有误");
		  $(this).val("");
	   }else{
	     $("#tip4").html("");
	   }
	   
	});
	
		$("#txtBankNo").blur(function(){
		var BankNo=trim($("#txtBankNo").val());
	  
	   if(BankNo==''){
	      $("#tip5").html("*&nbsp;&nbsp;请输入银行帐号");
	   }else if(!isNumber(BankNo)){
	     $("#tip5").html("*&nbsp;&nbsp;银行帐号输入有误");
		  $(this).val("");
	   }else if(BankNo.length<16){
	     $("#tip5").html("*&nbsp;&nbsp;银行账号为16-19位数字");
		  $(this).val("");
	   }else{
	     $("#tip5").html("");
	   }
	   
	});
	
	 $("#txtPhone").blur(function(){
	   var Phone=trim($("#txtPhone").val());
	   if(Phone==''){
	      $("#tip6").html("*&nbsp;&nbsp;请输入联系电话");
	   }else if(!isMobile(Phone)){
	      $("#tip6").html("*&nbsp;&nbsp;联系电话输入有误");
		   $(this).val("");
	   }else{
	     
	      $("#tip6").html("");
	   }
	   
	});
	
  $("#txtCZMoney").blur(function(){
       var CZMoney=trim($("#txtCZMoney").val());
	   if(CZMoney==''){
	      $("#tip7").html("<font color='#FF6600'>*&nbsp;&nbsp;请输入提现金额</font>");
	   }else if(CZMoney><?php echo $cashouthdtotal; ?>){
	      $("#tip7").html("<font color='#FF6600'>*&nbsp;&nbsp;输入额超出可提现金额</font>");
		  $(this).val("");
	   }else{
	       $("#tip1").html("");
	   }    
	   
	}); 
	
	
	
	$("#btnSQCZ").click(function(){
	    var CZMoney=trim($("#txtCZMoney").val());
	
	   if(CZMoney==''){
		    $("#tip7").html("<font color='#FF6600'>*&nbsp;&nbsp;请输入充值金额</font>");
			return false;
		}else{
		    return true;
		}
	});
	

	
	
	//检验汉字
	function isChinese(s)
	{
		var patrn = /^\s*[\u4e00-\u9fa5]{1,15}\s*$/;
		if(!patrn.exec(s))
		{
			return false;
		}
		return true;
	}

	//数字
	function isNumber(s)
	{
		var patrn = /^\s*\d+\s*$/;
		//var patrn1=/^\s*\d{16}[\dxX]{2}\s*$/;
		if(!patrn.exec(s))
		{
			return false;
		}
		return true;
	}
	//校验手机号码：必须以数字开头
	function isMobile(s)
	{
		var patrn=/^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$/;
		if(!patrn.exec(s))
		{
			return false;
		}
		return true;
	}



	//检验姓名：姓名是2-15字的汉字
	function isCardName(s)
	{  
	    
		var patrn = /^\s*[\u4e00-\u9fa5]{1,}[\u4e00-\u9fa5.·]{0,15}[\u4e00-\u9fa5]{1,}\s*$/;
		if(!patrn.exec(s))
		{
			return false;
		} 
		return true;
	} 
	
}) 
 
</script> 
</div>
<?php include templates("index","footer");?>