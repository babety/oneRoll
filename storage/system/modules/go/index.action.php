<?php 
defined('G_IN_SYSTEM')or exit('No permission resources.');
System::load_app_class('base','member','no');
System::load_app_fun('my');
System::load_app_fun('user');
System::load_sys_fun('user');

class index extends base {
	
	public function __construct() {	
		// parent::__construct();
		// $this->db=System::load_sys_class('model');		
	}		
	
	
	
	public function init(){		
		// //最新商品
		// $new_shop=$this->db->GetList("select * from `@#_shoplist` where `pos` = '1' and `q_uid` is null ORDER BY `id` DESC LIMIT 8");
		// //顶部推荐2个
		// $tj_shop=$this->db->GetList("select * from `@#_shoplist` where `cateid` = '147' and `q_uid` is null LIMIT 2");
		// //即将揭晓
		// $shoplist=$this->db->GetList("select * from `@#_shoplist` where `q_uid` is null ORDER BY `shenyurenshu` ASC LIMIT 24");
		// //热门推荐
		// $shoplistrenqi=$this->db->GetList("select * from `@#_shoplist` where `renqi`='1' and `q_uid` is null ORDER BY id DESC LIMIT 8");
		// //首页开奖数量
		// $total=$this->db->GetCount("select id from `@#_shoplist` where `q_uid` is not null and `q_showtime` = 'N'");

		// //新品汽车
		// $new_qiche=$this->db->GetList("select * from `@#_shoplist` where `cateid` = '36' and `q_uid` is null ORDER BY `id` DESC LIMIT 2");
		// //新品珠宝
		// $new_zhubao=$this->db->GetList("select * from `@#_shoplist` where `cateid` = '35' and `q_uid` is null ORDER BY `id` DESC LIMIT 2");
		// //新品家居
		// $new_jiaju=$this->db->GetList("select * from `@#_shoplist` where `cateid` = '15' and `q_uid` is null ORDER BY `id` DESC LIMIT 2");
		// //新品数码
		// $new_shuma=$this->db->GetList("select * from `@#_shoplist` where `cateid` = '12' and `q_uid` is null ORDER BY `id` DESC LIMIT 2");

		// //即将揭晓
		// $shoplist=$this->db->GetList("select * from `@#_shoplist` where `q_uid` is null ORDER BY `shenyurenshu` ASC LIMIT 8");
		// //人气商品1
		// $shoplistrenqi1=$this->db->GetList("select * from `@#_shoplist` where `renqi`='1' and `q_uid` is null ORDER BY id DESC LIMIT 0,2");
		// //人气商品2
		// $shoplistrenqi2=$this->db->GetList("select * from `@#_shoplist` where `renqi`='1' and `q_uid` is null ORDER BY id DESC LIMIT 2,8");
  //       //手机商品
		// $shoplistshouji=$this->db->GetList("select * from `@#_shoplist` where `cateid`='15' and `q_uid` is null ORDER BY `id` ASC LIMIT 10");
		// //其他商品
		// $shoplistqita=$this->db->GetList("select * from `@#_shoplist` where `cateid`='153' and `q_uid` is null ORDER BY `id` ASC LIMIT 10");
		// //最新上架
		// $shoplistnew=$this->db->GetList("select * from `@#_shoplist` where `q_uid` is null ORDER BY `id` DESC LIMIT 10");

													
		// $max_renqi_qishu = 1;
		// $max_renqi_qishu_id = 1;
		
		// if(!empty($shoplistrenqi)){
		// 	foreach ($shoplistrenqi as $renqikey =>$renqiinfo){
		// 		if($renqiinfo['qishu'] >= $max_renqi_qishu){			
		// 			$max_renqi_qishu = $renqiinfo['qishu'];
		// 			$max_renqi_qishu_id = $renqikey;				
		// 		}
		// 	}
		// 	$shoplistrenqi[$max_renqi_qishu_id]['t_max_qishu'] = 1;	
		// }				
		// $this_time = time();
		// if(count($shoplistrenqi) > 1){
		// 			if($shoplistrenqi[0]['time'] > $this_time - 86400*3)
		// 			$shoplistrenqi[0]['t_new_goods'] = 1;
		// }
		
		// //圈子获取
  //       $quanzi=$this->db->GetList("select * from `@#_quanzi` where 1 ORDER BY time DESC LIMIT 4 "); 
		// //他们正在云购	
		// $go_record=$this->db->GetList("SELECT m.`uid`,m.`username`,m.`email`,m.`mobile`,m.`img`,mg.`shopid`,mg.`gonumber`, mg.`shopname`, mg.`time`,s.`zongrenshu`,s.`canyurenshu` FROM `@#_member_go_record` AS mg LEFT JOIN `@#_member` AS m ON m.`uid` = mg.`uid` LEFT JOIN `@#_shoplist` AS s  ON  s.`id` = mg.`shopid` WHERE mg.`status` LIKE '%已付款%'  ORDER BY mg.`time` DESC LIMIT 0,7");
		// //最新揭晓
		// $shopqishu = $this->db->GetList("select id,sid,thumb,title,zongrenshu,qishu,money,q_uid,q_user,q_user_code from `@#_shoplist` where `q_end_time` is not null and `q_showtime` = 'N' ORDER BY `q_end_time` DESC LIMIT 10");
		// foreach ($shopqishu as &$v) {
		// 	$v['q_user'] = unserialize($v['q_user']);
		// 	$v['tou'] = $this->_touzi($v['q_uid'],$v['id']);
		// 	$v['touzi'] = $v['tou'][0]['total'];
		// 	unset($v['tou']);
		// 	$v['rate'] = round($v['money']/$v['touzi'],3);
		// 	$v['jiazhi'] = $v['zongrenshu'];
		// 	$v['qishu1'] = $v['qishu'];
		// 	$v['q_user1'] = substr_replace($v['q_user']['mobile'],'****',3,4);
		// 	$v['q_user2'] = substr_replace($v['q_user']['email'],'****',3,4);

		// }
		// $time=time();
		// //揭晓倒计时
		// $shopdjs=$this->db->GetList("select * from `@#_shoplist` where `canyurenshu`=`zongrenshu` ORDER BY `q_end_time` DESC LIMIT 5");
		// $djs=$this->db->GetOne("select id from `@#_shoplist` where `canyurenshu`=`zongrenshu` order by id DESC");
		// $djs_id=$djs[id];
		// //云购动态
		// $tiezi = $this->db->GetList("select * from `@#_quanzi_tiezi` where `qzid` = '1' order by `time` DESC LIMIT 5");
		// //晒单分享
		// $shaidan=$this->db->GetList("select * from `@#_shaidan` order by `sd_id` DESC LIMIT 0,2");
		// $shaidan_two=$this->db->GetList("select * from `@#_shaidan` order by `sd_id` DESC LIMIT 2,6");
		// //晒单取6个循环
		// $shaidan_six = $this->db->GetList("select * from `@#_shaidan` order by `sd_id` DESC LIMIT 2,6");
		// //活跃用户
		// $hueifu = $this->db->GetList("select * from `@#_quanzi_hueifu` group by hueiyuan order by id DESC limit 16"); 
		// //推荐话题 置顶且且按照回复数排序
		// $tiezi_tuijian = $this->db->GetList("select * from `@#_quanzi_tiezi` where `zhiding` = 'Y' group by hueiyuan order by hueifu DESC limit 5");
		// //最新话题
		// $tiezi_new = $this->db->GetList("select * from `@#_quanzi_tiezi` group by hueiyuan order by time DESC limit 5"); 
		// //最新中奖记录
		
		// $zhongjiang=$this->db->GetList("select * from `@#_shoplist` where `q_end_time` is not null and `q_end_time`<=$time ORDER BY `q_end_time` DESC LIMIT 20");
		// //首页对联广告设置
		// $couplet = $this->db->GetOne("select content,aid from `@#_ad_data` where `type`='couplet' and `checked` = '1' and `addtime`<= unix_timestamp(now()) and `endtime` >= unix_timestamp(now()) order by `id` ASC limit 1");
		// $ad_area = $this->db->GetOne("select width,height,checked from `@#_ad_area` where `id`='$couplet[aid]' and `checked` = 1");
		// $couplet_img = explode(',',$couplet['content']);
		include templates("index","index");
	}	
	
	//商品列表
	public function glist(){
	
		$title="商品列表_"._cfg("web_name");
		$cate_band =htmlspecialchars($this->segment(4));
		$select =htmlspecialchars($this->segment(5));		
		if(!$select){
			$select = '10';
		}		
		if(!strpos($cate_band,"e")){
			$fen1 = intval($cate_band);
			$fen2 ='';
			if(!$cate_band)
				$cate_band = 'list';		
		}else{
			$fen=explode("e",$cate_band);
			$fen1=$fen[0];$fen2=$fen[1];
		}		
		

		if($fen1){
			$categ_br =$this->db->GetOne("select * from `@#_category` where `parentid` = '$fen1'"); 
		}
		 
		if(empty($fen1)){ 
			$brand=$this->db->GetList("select * from `@#_brand` where 1 order by `order` DESC");	 
			$daohang_title = '所有分类';	
		}else{
			$brand=$this->db->GetList("select * from `@#_brand` where `cateid`='$fen1' || cateid='".$categ_br['cateid']."' order by `order` DESC");   
			$daohang=$this->db->GetOne("select * from `@#_category` where `cateid` = '$fen1' || `cateid` = '".$categ_br['cateid']."' LIMIT 1");  
			$daohang_title = $daohang['name'];
		} 
		
		
		
		//分页
		$num=20;
		if($fen1 and $fen2){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `brandid`='$fen2'");
		}else if($fen1){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `cateid`='$fen1'");
		}else{
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null");
		}
		
		$page=System::load_sys_class('page');
		
		if(isset($_GET['p'])){
			$pagenum=$_GET['p'];
		}else{
			$pagenum=1;
		}			
		$page->config($total,$num,$pagenum,"0");
		
		if($pagenum>$page->page){
			$pagenum=$page->page;
		}	
		
	
		$select_w = '';
		if($select == 10){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 20){
			$select_w = "and `renqi` = '1'";
		}
		if($select == 30){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 40){
			$select_w = 'order by `time` DESC';
		}
		if($select == 50){
			$select_w = 'order by `money` DESC';
		}
		if($select == 60){
			$select_w = 'order by `money` ASC';
		}
		
		if($fen1 and $fen2){			
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `q_uid` is null and `brandid`='$fen2' $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else if($fen1){		
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `q_uid` is null and (`cateid`='$fen1' || `cateid` ='".$categ_br['cateid']."')$select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else{			
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `q_uid` is null $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}
		
		$max_renqi_qishu = 1;
		$max_renqi_qishu_id = 1;

		if(!empty($shoplistrenqi)){
			foreach ($shoplistrenqi as $renqikey =>$renqiinfo){
				if($renqiinfo['qishu'] >= $max_renqi_qishu){			
					$max_renqi_qishu = $renqiinfo['qishu'];
					$max_renqi_qishu_id = $renqikey;				
				}		
			}	
			$shoplistrenqi[$max_renqi_qishu_id]['t_max_qishu'] = 1;	
		}	
		
		
		$this_time = time();
		if(count($shoplist) > 1){
					if($shoplist[0]['time'] > $this_time - 86400*3)
					$shoplist[0]['t_new_goods'] = 1;
		}
		
		
		include templates("index","glist");
	}
	//十元专区
	public function syglist(){
		$title="十元专区";
		$cate_band =htmlspecialchars($this->segment(4));
		$select =htmlspecialchars($this->segment(5));
		if(!$select){
			$select = '10';
		}
		if(!strpos($cate_band,"e")){
			$fen1 = intval($cate_band);
			$fen2 ='';
			if(!$cate_band)
				$cate_band = 'list';
		}else{
			$fen=explode("e",$cate_band);
			$fen1=$fen[0];$fen2=$fen[1];
		}
	
	
		if($fen1){
			$categ_br =$this->db->GetOne("select * from `@#_category` where `parentid` = '$fen1'");
		}
			
		if(empty($fen1)){
			$brand=$this->db->GetList("select * from `@#_brand` where 1 order by `order` DESC");
			$daohang_title = '全部奖品';
		}else{
			$brand=$this->db->GetList("select * from `@#_brand` where `cateid`='$fen1' || cateid='".$categ_br['cateid']."' order by `order` DESC");
			$daohang=$this->db->GetOne("select * from `@#_category` where `cateid` = '$fen1' || `cateid` = '".$categ_br['cateid']."' LIMIT 1");
			$daohang_title = $daohang['name'];
		}
	
	
	
		//分页
		$num=20;
		if($fen1 and $fen2){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `brandid`='$fen2'");
		}else if($fen1){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `cateid`='$fen1'");
		}else{
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null");
		}
	
		$page=System::load_sys_class('page');
	
		if(isset($_GET['p'])){
			$pagenum=$_GET['p'];
		}else{
			$pagenum=1;
		}
		$page->config($total,$num,$pagenum,"0");
	
		if($pagenum>$page->page){
			$pagenum=$page->page;
		}
	
	
		$select_w = '';
		if($select == 10){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 20){
			$select_w = "and `renqi` = '1'";
		}
		if($select == 30){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 40){
			$select_w = 'order by `time` DESC';
		}
		if($select == 50){
			$select_w = 'order by `money` DESC';
		}
		if($select == 60){
			$select_w = 'order by `money` ASC';
		}
	
		if($fen1 and $fen2){
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='10.00' and `q_uid` is null and `brandid`='$fen2' $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else if($fen1){
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='10.00' and `q_uid` is null and `cateid`='$fen1' || `cateid` ='".$categ_br['cateid']."'$select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else{
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='10.00' and `q_uid` is null $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}
	
		$max_renqi_qishu = 1;
		$max_renqi_qishu_id = 1;
	
		if(!empty($shoplistrenqi)){
			foreach ($shoplistrenqi as $renqikey =>$renqiinfo){
				if($renqiinfo['qishu'] >= $max_renqi_qishu){
					$max_renqi_qishu = $renqiinfo['qishu'];
					$max_renqi_qishu_id = $renqikey;
				}
			}
			$shoplistrenqi[$max_renqi_qishu_id]['t_max_qishu'] = 1;
		}
	
	
		$this_time = time();
		if(count($shoplist) > 1){
			if($shoplist[0]['time'] > $this_time - 86400*3)
				$shoplist[0]['t_new_goods'] = 1;
		}
	
	
		include templates("index","syglist");
	}
		//百元专区
	public function byglist(){
		$title="百元专区";
		$cate_band =htmlspecialchars($this->segment(4));
		$select =htmlspecialchars($this->segment(5));
		if(!$select){
			$select = '10';
		}
		if(!strpos($cate_band,"e")){
			$fen1 = intval($cate_band);
			$fen2 ='';
			if(!$cate_band)
				$cate_band = 'list';
		}else{
			$fen=explode("e",$cate_band);
			$fen1=$fen[0];$fen2=$fen[1];
		}
	
	
		if($fen1){
			$categ_br =$this->db->GetOne("select * from `@#_category` where `parentid` = '$fen1'");
		}
			
		if(empty($fen1)){
			$brand=$this->db->GetList("select * from `@#_brand` where 1 order by `order` DESC");
			$daohang_title = '全部奖品';
		}else{
			$brand=$this->db->GetList("select * from `@#_brand` where `cateid`='$fen1' || cateid='".$categ_br['cateid']."' order by `order` DESC");
			$daohang=$this->db->GetOne("select * from `@#_category` where `cateid` = '$fen1' || `cateid` = '".$categ_br['cateid']."' LIMIT 1");
			$daohang_title = $daohang['name'];
		}
	
	
	
		//分页
		$num=20;
		if($fen1 and $fen2){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `brandid`='$fen2'");
		}else if($fen1){
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null and `cateid`='$fen1'");
		}else{
			$total=$this->db->GetCount("select * from `@#_shoplist` WHERE `q_uid` is null");
		}
	
		$page=System::load_sys_class('page');
	
		if(isset($_GET['p'])){
			$pagenum=$_GET['p'];
		}else{
			$pagenum=1;
		}
		$page->config($total,$num,$pagenum,"0");
	
		if($pagenum>$page->page){
			$pagenum=$page->page;
		}
	
	
		$select_w = '';
		if($select == 10){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 20){
			$select_w = "and `renqi` = '1'";
		}
		if($select == 30){
			$select_w = 'order by `shenyurenshu` ASC';
		}
		if($select == 40){
			$select_w = 'order by `time` DESC';
		}
		if($select == 50){
			$select_w = 'order by `money` DESC';
		}
		if($select == 60){
			$select_w = 'order by `money` ASC';
		}
	
		if($fen1 and $fen2){
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='100.00' and `q_uid` is null and `brandid`='$fen2' $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else if($fen1){
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='100.00' and `q_uid` is null and `cateid`='$fen1' || `cateid` ='".$categ_br['cateid']."'$select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}else{
			$shoplist=$this->db->GetPage("select * from `@#_shoplist` where `yunjiage`='100.00' and `q_uid` is null $select_w",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		}
	
		$max_renqi_qishu = 1;
		$max_renqi_qishu_id = 1;
	
		if(!empty($shoplistrenqi)){
			foreach ($shoplistrenqi as $renqikey =>$renqiinfo){
				if($renqiinfo['qishu'] >= $max_renqi_qishu){
					$max_renqi_qishu = $renqiinfo['qishu'];
					$max_renqi_qishu_id = $renqikey;
				}
			}
			$shoplistrenqi[$max_renqi_qishu_id]['t_max_qishu'] = 1;
		}
	
	
		$this_time = time();
		if(count($shoplist) > 1){
			if($shoplist[0]['time'] > $this_time - 86400*3)
				$shoplist[0]['t_new_goods'] = 1;
		}
	
	
		include templates("index","byglist");
	}
	//商品详细
	public function item(){
		$mysql_model=System::load_sys_class('model');
		$itemid=abs(intval(safe_replace($this->segment(4))));	
		$item=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$itemid."' LIMIT 1");
		if(!$item)_message("没有这个商品！",WEB_PATH,3);
		$q_showtime = (isset($item['q_showtime']) && $item['q_showtime'] == 'N') ? 'N' : 'Y';
		
		if($item['q_end_time'] && $q_showtime == 'N'){
			header("location: ".WEB_PATH."/dataserver/".$item['id']);
			exit;			
		}
			
	
		
		$sid=$item['sid'];
		$sid_code=$mysql_model->GetOne("select * from `@#_shoplist` where `sid`='$sid' order by `id` DESC LIMIT 1,1");
		if($item['id'] == $sid_code['id']){
			$sid_code = null;
		}
		
		$sid_go_record=$mysql_model->GetOne("select * from `@#_member_go_record` where `shopid`='$sid_code[id]' and `uid`='$sid_code[q_uid]' order by `id` DESC LIMIT 1");
		
		
		$category=$mysql_model->GetOne("select * from `@#_category` where `cateid` = '$item[cateid]' LIMIT 1");
		$brand=$mysql_model->GetOne("select * from `@#_brand` where `id`='$item[brandid]' LIMIT 1");
		
		$title=$item['title'].' ('.$item['title2'].')';
		
		$keywords = $item['keywords'];
		$description = $item['description'];
		
		$syrs=$item['zongrenshu']-$item['canyurenshu'];
		$item['picarr'] = unserialize($item['picarr']);
		$item_img=$item['picarr'][0];
		
		
		$us=$mysql_model->GetList("select * from `@#_member_go_record` where `shopid`='".$itemid."' AND `shopqishu`='".$item['qishu']."'ORDER BY id DESC LIMIT 11");
		$us2=$mysql_model->GetList("select * from `@#_member_go_record` where `shopid`='".$itemid."' AND `shopqishu`='".$item['qishu']."'ORDER BY id DESC limit 50");
		
		
		//期数显示
		$itemlist = $this->db->GetList("select id,qishu,q_uid from `@#_shoplist` where `sid`='$item[sid]' order by `qishu` DESC");		

		$loopqishu='
<ul class="Period_list bb_gray">
	';
		if(!$itemlist[0]['q_uid']){
			if($itemlist[0]['id'] == $item['id'])
				$loopqishu.='
	<li>
		<a href="'.WEB_PATH.'/goods/'.$itemlist[0]['id'].'"> <b class="period_Ongoing period_ArrowCur bg_red" style="padding-left:0px;">'."第".$itemlist[0]['qishu']."期 <i></i></b> 
		</a>
	</li>
	";
			else
				$loopqishu.='
	<li>
		<a class="gray02" href="'.WEB_PATH.'/goods/'.$itemlist[0]['id'].'"> <b class="">'."第".$itemlist[0]['qishu']."期 <i></i></b> 
		</a>
	</li>
	";
		}else{		
			if($itemlist[0]['id'] == $item['id'])
				$loopqishu.='
	<li>
		<a class="gray02" href="'.WEB_PATH.'/goods/'.$itemlist[0]['id'].'">
			<b class="">
				'."第".$itemlist[0]['qishu']."期
				<i></i>
			</b>
		</a>
	</li>
	";
			else
				$loopqishu.='
	<li>
		<a class="gray02" href="'.WEB_PATH.'/dataserver/'.$itemlist[0]['id'].'">第'.$itemlist[0]['qishu'].'期</a>
	</li>
	';
		}
		unset($itemlist[0]);			
		foreach($itemlist as $key=>$qitem){
			if($key%9==0){
				$loopqishu.='
</ul>
<ul class="Period_list bb_gray">
	';
			}
			if($qitem['id'] == $item['id'])
				$loopqishu.='
	<li>
		<b class="period_Ongoing period_ArrowCur bg_red" style="padding-left:0px;">第'.$qitem['qishu'].'期</b>
	</li>
	';
			else
				$loopqishu.='
	<li>
		<a href="'.WEB_PATH.'/dataserver/'.$qitem['id'].'" class="gray02">
			<b class="">
				第'.$qitem['qishu'].'期
				<i></i>
			</b>
		</a>
	</li>
	';	
		}
		$loopqishu.='
</ul>
';
$zx_shop = $this->db->GetOne("select * from `@#_shoplist` where `sid`='$item[sid]' and `q_uid` is null order by `qishu` DESC");
		$go_record_list = $this->db->GetList("select * from `@#_member_go_record` where `shopid` = '$item[id]' and `shopqishu` = '$item[qishu]' order by `id` DESC limit 500");	

        $item_shop = $this->db->GetOne("select * from `@#_shoplist` where `id`='$item[sid]' and shenyurenshu>=1 order by `qishu` DESC LIMIT 1");   		
		
		include templates("index","item");
	}
	
	//往期商品查看
	public function dataserver(){	
	
		$itemid=abs(intval(safe_replace($this->segment(4))));	
		$item=$this->db->GetOne("select * from `@#_shoplist` where `id`='$itemid' LIMIT 1");
		//$item=$this->db->GetOne("select * from `@#_shoplist` where `id`='$itemid' and `q_uid` is not null LIMIT 1");
		if(!$item){
			_message("没有这个商品!");
		}
		if(empty($item['q_user_code'])){
			_message("该商品正在进行中...",WEB_PATH.'/goods/'.$itemid);
		}
		if(isset($item['q_showtime']) && $item['q_showtime'] == 'Y'){	
			header("location: ".WEB_PATH."/goods/".$item['id']);
			exit;
		}	
		$category=$this->db->GetOne("select * from `@#_category` where `cateid` = '$item[cateid]' LIMIT 1");
		$brand=$this->db->GetOne("select * from `@#_brand` where `id` = '$item[brandid]' LIMIT 1");
		
		//云购中奖码
		$q_user = unserialize($item['q_user']);		
		$q_user_code_len = strlen($item['q_user_code']);
		$q_user_code_arr = array();$yu=$item['q_user_code']-10000001;
		for($q_i=0;$q_i< $q_user_code_len;$q_i++){	
			$q_user_code_arr[$q_i] = substr($item['q_user_code'],$q_i,1);
		}
		//总云购次数
		$user_shop_number = $this->db->GetOne("select sum(gonumber) as gonumber from `@#_member_go_record` where `uid`= '$item[q_uid]' and `shopid` = '$itemid' and `shopqishu` = '$item[qishu]'");
		$user_shop_number = $user_shop_number['gonumber'];

		//用户云购时间
		$user_shop_time = $this->db->GetOne("select time from `@#_member_go_record` where `uid`= '$item[q_uid]' and `shopid` = '$itemid' and `shopqishu` = '$item[qishu]' and `huode` = '$item[q_user_code]'");
		$user_shop_time = $user_shop_time['time'];
		
		$touxiangs = $this->db->GetOne("select img,headimg from `@#_member` where `uid`= '$item[q_uid]'");
		//得到云购码
		$user_shop_codes = $this->db->GetOne("select * from `@#_member_go_record` where `uid`= '$item[q_uid]' and `shopid` = '$itemid' and `shopqishu` = '$item[qishu]'");
		//$user_shop_codes = $this->db->GetOne("select GROUP_CONCAT(goucode) as goucode from `@#_member_go_record` where `uid`= '$item[q_uid]' and `shopid` = '$itemid' and `shopqishu` = '$item[qishu]'");
		$user_shop_codes = $user_shop_codes['goucode'];
		$h=abs(date("H",$item['q_end_time']));
		$i=date("i",$item['q_end_time']);
		$s=date("s",$item['q_end_time']);
		$w=substr($item['q_end_time'],11,3);	
		$user_shop_time_add = $h.$i.$s.$w;
		$user_shop_fmod = fmod($user_shop_time_add*100,$item['canyurenshu']);
		if($item['q_content']){
			$item_q_content = unserialize($item['q_content']);
			$keysvalue = $new_array = array();
			foreach($item_q_content as $k=>$v){
				$keysvalue[$k] = $v['time'];				
				$h=date("H",$v['time']);
			    $i=date("i",$v['time']);
			    $s=date("s",$v['time']);	
			    list($timesss,$msss) = explode(".",$v['time']);
				$item_q_content[$k]['timeadd'] = $h.$i.$s.$msss;			
			
			}
			arsort($keysvalue);	//asort($keysvalue);正序
			reset($keysvalue);
			foreach ($keysvalue as $k=>$v){
				$new_array[$k] = $item_q_content[$k];
			}			
			$item['q_content'] = $new_array;
		}
		$title=$item['title'].' ('.$item['title2'].')';
		$keywords = $item['keywords'];
		$description = $item['description'];
		
		$go_record_list = $this->db->GetList("select * from `@#_member_go_record` where `shopid` = '$item[id]' and `shopqishu` = '$item[qishu]' order by `id` DESC limit 50");
		$itemzx=$this->db->GetOne("select * from `@#_shoplist` where `sid`='$item[sid]' and `qishu`>'$item[qishu]' order by `qishu` DESC LIMIT 1");
		
		//期数显示
		$itemlist = $this->db->GetList("select id,sid,q_uid,qishu from `@#_shoplist` where `sid`='$item[sid]' order by `qishu` DESC");
		$loopqishu='<ul class="Period_list bb_gray">';
		if(empty($itemlist[0]['q_uid'])){			
			$loopqishu.='
		<li>
			<a href="'.WEB_PATH.'/goods/'.$itemlist[0]['id'].'">
				<b class="period_Ongoing">
					'."第".$itemlist[0]['qishu']."期
					<i></i>
				</b>
			</a>
		</li>
		";
			unset($itemlist[0]);
		}else{		
			$loopqishu.='
		<li>
			<a href="'.WEB_PATH.'/goods/'.$itemlist[0]['id'].'">
				<b class="period_ArrowCur">
					'."第".$itemlist[0]['qishu']."期
					<i></i>
				</b>
			</a>
		</li>
		";
			unset($itemlist[0]);
		}
		if(empty($itemlist)){
			$loopqishu.='
	</ul>
	';
		}	
	
		foreach($itemlist as $key=>$qitem){			
			if($key%9==0){		
				$loopqishu.='
</ul>
<ul class="Period_list bb_gray">
	';
			}				
			if($qitem['id'] == $itemid){
				$loopqishu.='
	<li>
		<b class="period_ArrowCur bg_red">第'.$qitem['qishu'].'期</b>
	</li>
	';
			}else{
				$loopqishu.='
	<li>
		<a href="'.WEB_PATH.'/dataserver/'.$qitem['id'].'" class="gray02">第'.$qitem['qishu'].'期</a>
	</li>
	';		
			}			
		}
		 /*
		 * 
		 * 
		 * 
		 * 获取用户头像路径
		 * uid：用户id
		 */
		function get_img($uid=''){
			$db = System::load_sys_class("model");
			$uid = intval($uid);
			$info=$db->GetOne("select * from `@#_member` where `uid`='$uid'");
			if($info){
				return $info['img'];
			}else{
				return 'photo/member.jpg';
			}
		}
		$zx_shop = $this->db->GetOne("select * from `@#_shoplist` where `sid`='$item[sid]' order by `qishu` DESC");
	
		include templates("index","dataserver");
	}

	//最新揭晓
	public function lottery(){	
		//最新揭晓
		$page=System::load_sys_class('page');		
		$total=$this->db->GetCount("select id from `@#_shoplist` where `q_uid` is not null and `q_showtime` = 'N'");
		$djs=$this->db->GetOne("select id from `@#_shoplist` where `canyurenshu`=`zongrenshu` and `q_end_time`<=$time");
		$djs_id=$djs[id];
		if(isset($_GET['p'])){
			$pagenum=$_GET['p'];
		}else{
			$pagenum=1;
		}
		$num=200;
		$page->config($total,$num,$pagenum,"0");
		$shopqishu=$this->db->GetPage("select * from `@#_shoplist` where `q_uid` is not null and `q_showtime` = 'N' ORDER BY `q_end_time` DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		$shoplist=$this->db->GetList("select * from `@#_shoplist` where `q_uid` is null  ORDER BY `canyurenshu` DESC LIMIT 4");
		$member_record=$this->db->GetList("select * from `@#_member_go_record` order by id DESC limit 6");		
		include templates("index","lottery");
	}


	private function _touzi($q_uid, $id){
		//取得投标记录
		$lastresult=$this->db->GetList("select sum(gonumber) as total from `@#_member_go_record` where `uid`= $q_uid and `shopid` = $id");
		//统计投标记录
		return $lastresult;
	}
	//首页揭晓倒计时
	public function jxdjs(){
		$shopdjs=$this->db->GetList("select * from `@#_shoplist` where `canyurenshu`=`zongrenshu` ORDER BY `q_end_time` DESC LIMIT 5");
		$jxdjs=$this->db->GetOne("select id from `@#_shoplist` where `canyurenshu`=`zongrenshu` and `q_end_time`<=$time");
		$djs_id=$jxdjs[id];
		$html='';	
		foreach($shopdjs as $key=>$djs){
			$djs['q_user'] = unserialize($djs['q_user']);
			$html.='<li class="w-goodsList-item">';
			//if($djs['q_uid']){
			//	$html.='<i class="ico ico-label ico-label-yjx"></i>';
			//}else{
			//	$html.='<i class="ico ico-label ico-label-zzjx"></i>';
			//}
			
			$html.='<div class="index_body_tjsp_img"><a href="'.WEB_PATH.'/dataserver/'.$djs[id].'" title="'.$djs[title].'" target="_blank"><img alt="'.$djs[title].'" src="'.G_UPLOAD_PATH.'/'.$djs[thumb].'" /></a></div>';
			$html.='<p><a title="'.$djs['title'].'" href="'.WEB_PATH.'/dataserver/'.$djs['id'].'" target="_blank">(第'.$djs['qishu'].'期) '.$djs['title'].'</a></p>';
			if($djs['q_uid']){
				$html.='<div class="countdown_end"><p class="countdown_end_p">恭喜<a href="'.WEB_PATH.'/uname/'.idjia($djs[q_uid]).'" title="'.get_user_name($djs[q_user]).'(ID:'.$djs['q_uid'].')">'.get_user_name($djs['q_user']).'</a>获得</p></div>';
			}else{
				$html.='<div class="countdown_nums"><p class="countdown_nums_p"><b class="count-m0">0</b><b class="count-m1">0</b>:<b class="count-s0">0</b><b class="count-s1">0</b>:<b class="count-ms0">0</b><b class="count-ms1">0</b></p></div>';
			}
			$html.='</li>';
		}
		echo $html;
	}	
	public function jxfy(){
		$mysql_model=System::load_sys_class('model');
		$timezone = System::load_sys_config("system","timezone");
		date_default_timezone_set($timezone);
		$itemid=abs(intval(safe_replace($this->segment(4))));	
		$item=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$itemid."' LIMIT 1");
		if(!$item)_message("没有这个商品！",WEB_PATH,3);
			$num=50;
			$total=$this->db->GetCount("select * from `@#_member_go_record` where `shopid` = '$item[id]' and `shopqishu` = '$item[qishu]' order by `id` DESC");

			$page=System::load_sys_class('page');
			if(isset($_GET['p'])){
				$pagenum=$_GET['p'];
			}else{
				$pagenum=1;
			}
			$page->config($total,$num,$pagenum,"0");
			
			if($pagenum>$page->page){
				$pagenum=$page->page;
			}
			
			$go_record_list = $this->db->GetPage("select * from `@#_member_go_record` where `shopid` = '$item[id]' and `shopqishu` = '$item[qishu]' order by `id` DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));	
			
			if($go_record_list){
				$html='<div name="bitem" class="detail_record">';
				foreach($go_record_list as $user){
					$html.='<div class="detail_recordli">';
					$html.='<div class="detail_recordli_l">'.date("Y-m-d H:i:s",$user['time']).'</div>';
					$html.='<div class="detail_recordli_r">';	
					$html.='<p ><span><a href="'.WEB_PATH.'/uname/'.idjia($user['uid']).'" target="_blank" class="blue">'._strcut($user['username'],26).'</a>('.$this->getIP($user['ip']).')云购了<em>'.$user['gonumber'].'</em>人次</span></p></div></div>';
				}
				
				if($total>$num){
					$html.='<div class="pagesx1">'.$page->show('two').'</div>';
				}
				$html.='</div>';
			    $html.='<script type="text/javascript" src="'.G_TEMPLATES_PATH.'/'.G_STYLE.'/js/page1.js"></script>';
				$html.='<div class="clear"></div>';
				
			}else{
				$html='<div class="detail_records"><p class="status-empty">&nbsp;&nbsp;暂时还没有参与记录</p></div>';
			}
			
			echo $html;
	}
	
	private function getIP($str){
                        if(empty(str)){
                            return "IP:";
                        }
                        $s = explode(',', $str);
                        if(count($s) < 2){
                            $s[1]="";
                        }
                        return $s[0]."IP:".$s[1];
                    }
	
	public function wqfy(){
		$mysql_model=System::load_sys_class('model');
		$timezone = System::load_sys_config("system","timezone");
		date_default_timezone_set($timezone);
		$itemid=abs(intval(safe_replace($this->segment(4))));	
		$item=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$itemid."' LIMIT 1");
		if(!$item)_message("没有这个商品！",WEB_PATH,3);
			$num=20;
			$total=$this->db->GetCount("select * from `@#_shoplist` where `sid`='$item[sid]' and shenyurenshu=0 order by `qishu` DESC");
			
			$page=System::load_sys_class('page');
			if(isset($_GET['p'])){
				$pagenum=$_GET['p'];
			}else{
				$pagenum=1;
			}
			$page->config($total,$num,$pagenum,"0");
			
			if($pagenum>$page->page){
				$pagenum=$page->page;
			}
		$time=time();
		$itemlist = $this->db->GetPage("select * from `@#_shoplist` where `sid`='$item[sid]' and shenyurenshu=0 and q_end_time<=$time order by `qishu` DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		$shop=$this->DB()->GetOne("select time from `@#_member_go_record` where `uid`= '$wq[q_uid]' and `shopid` = '$wq[id]' and `shopqishu` = '$wq[qishu]' and `huode` = '$wq[q_user_code]'",array("cache"=>0)); 
		$wqyh = unserialize($wq['q_user']);
		$ip_arr = explode(",",$wqyh['user_ip']);
				if($ip_arr[0]){
					$address="(".$ip_arr[0].")";
				}elseif($ip_arr[1]){
					$address="(IP:".$ip_arr[1].")";
				}else{
					$address="";
				}
		if($itemlist){
			$html='<div class="detail_past_cont">';
			foreach($itemlist as $wq){
				$shop=$this->DB()->GetOne("select time from `@#_member_go_record` where `uid`= '$wq[q_uid]' and `shopid` = '$wq[id]' and `shopqishu` = '$wq[qishu]' and `huode` = '$wq[q_user_code]'",array("cache"=>0)); 
		$wqyh = unserialize($wq['q_user']);
		$ip_arr = explode(",",$wqyh['user_ip']);
				if($ip_arr[0]){
					$address="(".$ip_arr[0].")";
				}elseif($ip_arr[1]){
					$address="(IP:".$ip_arr[1].")";
				}else{
					$address="";
				}
	            $html.='<div class="detail_past_cont_li">';
				$html.='		<div class="detail_past_cont_qishu"><a href="'.WEB_PATH.'/goods/'.$wq['id'].'">期号'.$wq['qishu'].'</a></div>';
				$html.='		<div class="detail_past_cont_member">';
				$html.='			<div class="detail_past_cont_pic"><img src="'.G_UPLOAD_PATH.'/'.$wqyh['img'].'" /></div>';
				$html.='			<div class="detail_past_cont_mian">
				<p>恭喜 <span><a href="'.WEB_PATH.'/uname/'.idjia($wq['q_uid']).'" target="_blank" title="'._strcut($wqyh['username'],26).'(ID:'.$wq['q_uid'].')">'._strcut($wqyh['username'],26).'</a></span> '.$address.' 获得了本期商品</p>
				<p>用户ID：<b> '.$wq['q_uid'].'</b>（ID为用户唯一不变标识）</p>
				<p>本期参与：<b>'.get_user_goods_num($wq['q_uid'],$wq['id']).'</b>人次</p></div></div>';
				$html.='		<div class="detail_past_cont_time"><p>幸运号码：'.$wq['q_user_code'].'</p><p>揭晓时间：'.date("Y-m-d H:i:s",$wq['q_end_time']).'</p><p>夺宝时间：'.date("Y-m-d H:i:s",$shop['time']).'</p></div></div>';
				
				
			
			}
			$html.='</div>';
				if($total>$num){
					$html.='<div class="pagesx">'.$page->show('two').'</div>';
				}
			    $html.='<script type="text/javascript" src="'.G_TEMPLATES_PATH.'/'.G_STYLE.'/js/page2.js"></script>';
				$html.='<div class="clear"></div>';
			
		}
		
		echo $html;
		
		
	}

}
?>