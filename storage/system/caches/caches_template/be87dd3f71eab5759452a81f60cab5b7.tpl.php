<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo $webname; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/reset.css">
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/animate.css">
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/style.css">
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/zdy.css">
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/main.css" rel="stylesheet" type="text/css">
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/js.cookie.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/lodash.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/response.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/swiper.min.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/countdown.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/simpop.min.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery.lazyload.min.js"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/ajax.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
    var DuoBao = {};
    var __data__ = (function() {
        return JSON.parse('{}');
    })();
    var __user__ = (function() {
        return JSON.parse('{}');

    })();
    var __touchorclick__ = (function() {
        if ('ontouchend' in document)
            return 'touchend';
        else
            return 'click';
    })();
    </script>
</head>
<style>
.img-topright {
    padding-right: 0.8rem;
    padding-top: 1rem;
    height: 3.5rem;
    width: auto;
    float: right;
}
</style>

<body>
    <?php include templates("mobile/index","header");?>
    <div class="container" style="position: relative;top: 49px; clear: both;">
        <main class="db-main db-main-index">
            <!-- 焦点图 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $ln=1;if(is_array($shop_ad)) foreach($shop_ad AS $ad): ?>
                    <div class="swiper-slide swiper-slide-active">
                        <a href="<?php echo $ad['link']; ?>">
                            <img alt="<?php echo $ad['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $ad['img']; ?>"></a>
                    </div>
                    <?php  endforeach; $ln++; unset($ln); ?>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                    <span class="swiper-pagination-bullet"></span>
                </div>
            </div>
            <script>
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: 5000, //可选选项，自动滑动
                pagination: '.swiper-pagination',
                paginationClickable: true,
            })
            </script>
            <div class="banner_top" style="margin-top: 10px;">
                <ul>
                    <li class="qian">
                        <a href="<?php echo WEB_PATH; ?>/mobile/home/userqiandao"> <em>签到</em>
                        </a>
                    </li>
                    <li class="shai">
                        <a href="<?php echo WEB_PATH; ?>/mobile/shaidan/"> <em>晒单</em>
                        </a>
                    </li>
                    <li class="chong">
                        <a href="<?php echo WEB_PATH; ?>/mobile/home/userrecharge">
                            <em>充值</em>
                        </a>
                    </li>
                    <li class="new">
                        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/about">
                            <em>帮助</em>
                        </a>
                    </li>
                </ul>
            </div>
            <a id="gd" href=""></a>
            <div class="zxjx">
                <?php $tiezi=$this->DB()->GetList("select * from `@#_article` where cateid = 142 order by posttime DESC limit 4",array("type"=>1,"key"=>'',"cache"=>0)); ?>
                <div class="zxjx_1" style="position: relative;"> <i></i>
                    <div id="demo" style="overflow:hidden;height:30px;width:80%;line-height: 30px;">
                        <ul id="demo1">
                            <?php $ln=1;if(is_array($tiezi)) foreach($tiezi AS $tz): ?>
                            <li>
                                <a href="<?php echo WEB_PATH; ?>/mobile/mobile/gonggaoxq/<?php echo $tz['id']; ?>"><?php echo $tz['title']; ?></a>
                            </li>
                            <?php  endforeach; $ln++; unset($ln); ?>
                        </ul>
                        <div id="demo2"></div>
                    </div>
                    <div style="position: absolute;width: 40px;right: 3px;top: 9px;">
                        <a style="color: #666;" href="<?php echo WEB_PATH; ?>/mobile/mobile/gonggao/">更多>></a>
                    </div>
                </div>
                <script>
                var speed = 60
                var demo = document.getElementById("demo");
                var demo2 = document.getElementById("demo2");
                var demo1 = document.getElementById("demo1");
                demo2.innerHTML = demo1.innerHTML

                function Marquee() {
                    if (demo2.offsetTop - demo.scrollTop <= 0)
                        demo.scrollTop -= demo1.offsetHeight
                    else {
                        demo.scrollTop++
                    }
                }
                var MyMar = setInterval(Marquee, speed)
                demo.onmouseover = function() {
                    clearInterval(MyMar)
                }
                demo.onmouseout = function() {
                    MyMar = setInterval(Marquee, speed)
                }
                </script>
                <a style="border-bottom: 1px solid #dcdcdc;" href="<?php echo WEB_PATH; ?>/mobile/mobile/lottery">
                    最新揭晓
                    <label style="position:absolute; right:1rem; cursor:pointer;">显示全部&nbsp;></label>
                </a>
                <ul class="ul" style="border-right: 1px solid #dcdcdc;">
                    <script>
                    (function() {
                        DuoBao.refresh_prize = function refresh_prize() {
                            var $el = $($(this).data('dom_id'));
                            $.get($el.attr('title'), {
                                raw_only: 'true'
                            }, function(data) {
                                $el.html(data);
                            });
                        };

                    })();
                    </script>
                    <?php $ln=1; if(is_array($shopqishu)) foreach($shopqishu AS $k => $qishu): ?> <?php  $qishu['q_user'] = unserialize($qishu['q_user']);  ?> <?php if($qishu['q_showtime']=='N'): ?>
                    <li style="position: relative;">
                        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $qishu['id']; ?>" id="r<?php echo $qishu['id']; ?>" title="<?php echo WEB_PATH; ?>/mobile/mobile/itemajax/<?php echo $qishu['id']; ?>">
                            <div style="width:40%;float: left;">
                                <img style="width:100%;" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" class="lazy_loading_image"></div>
                            <div class="txt" style="float: left;">
                                <h6><?php echo _strcut($qishu['title'],30); ?></h6>
                                <div class="zj">
                                    <span style="color: #5bb6ea;"><?php echo get_user_name($qishu['q_uid'],'username'); ?></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php  else: ?>
                    <li style="position: relative;">
                        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $qishu['id']; ?>" id="r<?php echo $qishu['id']; ?>" title="<?php echo WEB_PATH; ?>/mobile/mobile/itemajax/<?php echo $qishu['id']; ?>">
                            <div style="width:40%;float: left;">
                                <img style="width:100%;" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" class="lazy_loading_image"></div>
                            <div class="txt" style="float: left;">
                                <h6><?php echo _strcut($qishu['title'],30); ?></h6>
                                <div class="zj">
                                    <div style="text-align:left;white-space: nowrap; text-overflow: ellipsis; overflow: hidden; color:#f04900;padding:0.4rem 0 0 0;">
                                        <time class="countdown" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;font-size: 1rem;line-height: 2rem;height: 2rem;" data-dom_id="#r<?php echo $qishu['id']; ?>" data-sec="<?php echo ceil($qishu['q_end_time']-time()); ?>" data-text="正在揭晓..." data-delay="1000" data-callback="DuoBao.refresh_prize">开始倒计时</time>
                                        <div id="daojishi">倒计时</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?> <?php  endforeach; $ln++; unset($ln); ?>
                </ul>
            </div>
            <style>
                #fldh{position: relative;z-index: 999;width: 100%;}

            </style>
            <div class="tabs-wrap" style="min-height:1000px;">
                <div id="fldh" class="zxjx" style="border-bottom: 1px solid #dcdcdc;">
                    <!--
                    <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist" class="tab_selected" data-order_by='level'>
                    人气推荐
                    <label style="position:absolute; right:1rem; cursor:pointer">显示全部&nbsp;></label>
                </a>
                -->
                    <ul class="lbul" id="divGoodsNav">
                        <li id="jiexiaos" class="current" order="10">
                            <a href="javascript:;">即将揭晓</a>
                        </li>
                        <li class="" order="20">
                            <a href="javascript:;">最快</a>
                        </li>
                        <li class="" order="30">
                            <a href="javascript:;">高价</a>
                        </li>
                        <li class="" order="40">
                            <a href="javascript:;">低价</a>
                        </li>
                        <li class="fenlel" style="border-left: 1px solid #dcdcdc;" order="">
                    <a style="color: #999;" href="javascript:;"><span class="sh"><i></i><i style="margin-top: 3px;"></i><i style="margin-top: 3px;"></i></span>分类</a>
                    <dl style="display:none;background: #fff;">
                        <div class="jiantou"></div>
                        <!--<dd type="0" class="sOrange"><a style="text-align: center;" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist">全部</a></dd>-->
                        <dd class="a1"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist"><img style="width: 30px;height: 30px;border-radius: 3px;float: left;margin:10px 5px 0 0;" src="/statics/templates/yungou/images/mobile/moren.png" alt="">全部分类</a></dd>
                    <?php $data=$this->DB()->GetList("select `cateid`,`name`,`pic_url` from `@#_category` where `model`='1' and `parentid` = '0' order by `order` desc",array("type"=>1,"key"=>'',"cache"=>0)); ?>
                            <?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
                            <dd class="a1"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/fen/<?php echo $categoryx['cateid']; ?>"><img style="width: 30px;height: 30px;border-radius: 3px;float: left;margin:10px 5px 0 0;" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $categoryx['pic_url']; ?>"><span><?php echo $categoryx['name']; ?></span></a></dd>
                    <?php  endforeach; $ln++; unset($ln); ?>
                    <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
                    </dl>
                </li>
                    </ul>
                </div>
                <div class="goodsList" style="clear: both;">
                    <div id="divGoodsLoading" class="loading" style="display:none;height: 80px;">
                    </div>
                    <a id="btnLoadMore" class="loading" href="javascript:;" style="display:none;border: none!important;"> <i class="jiazai"></i> 正在加载...
                    </a>
                    <a id="btnLoadMore2" class="loading" style="display:none; padding-top: 0px;">~~木有更多商品了~~</a>
                    <a id="btnLoadMore3" class="loading" style="display:none; padding-top: 0px;">~~木有更多商品了~~</a>
                </div>
            </div>
            <input id="urladdress" value="" type="hidden" />
            <input id="pagenum" value="" type="hidden" />
        </main>
        <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/main.js"></script>
    </div>
    <?php  $f_home = ''; $f_whole = ''; $f_jiexiao = ''; $f_car = ''; $f_personal = ''; if( ROUTE_C == 'home' || ROUTE_C == 'user' ){ $f_personal = 'cur'; }else if( ROUTE_C == 'mobile' && ROUTE_A == 'init'){ $f_home = 'cur'; }else if( ROUTE_C == 'mobile' && ROUTE_A == 'glist'){ $f_whole = 'cur'; }else if( ROUTE_C == 'mobile' && ROUTE_A == 'lottery'){ $f_jiexiao = 'cur'; }else if( ROUTE_C == 'shaidan'){ $f_car = 'cur'; } 
    
     ?> <?php include templates("mobile/index","footer");?>
    <script type="text/javascript">
   //打开页面加载数据
window.onload=function(){
    init_json("list/10");
    //购物车数量
    $.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
        if(data.num){
            $("#btnCart").append('<em>'+data.num+'</em>');
        }
    });
    
}

    //打开页面加载数据
    function init_json(parm) {
        $("#urladdress").val('');
        $("#pagenum").val('');
        $.getJSON('<?php echo WEB_PATH; ?>/mobile/mobile/initajax/' + parm, function(data) {
            $("#divGoodsLoading").css('display', 'none');
            if (data[0].sum) {
                var fg = parm.split("/");
                $("#urladdress").val(fg[0] + '/' + fg[1]);
                $("#pagenum").val(data[0].page);
                for (var i = 0; i < data.length; i++) {
                    var ul = '<ul><li>';
                    ul += '<span id="' + data[i].id + '" class="z-Limg" style="position:relative;display:block;"><img src="<?php echo G_UPLOAD_PATH; ?>/' + data[i].thumb + '"><div id="jiazhi1">价值：￥' + data[i].money + '</div></span>';
                    ul += '<div style="margin-top:15px;" class="goodsListR">';
                    ul += '<h2 id="' + data[i].id + '">(第' + data[i].qishu + '期)' + data[i].title + '</h2>';
                    ul += '</div>';
                    ul += '<div class="pRate item_bottom_container">';
                    ul += '<div class="Progress-bar jdt_container" id="' + data[i].id + '">';
                    ul += '<div style="color:#646464;margin-top:2px;">';
                    var num =(data[i].canyurenshu / data[i].zongrenshu) * 100;
                    num = num.toFixed(2);
                    ul += '进度&nbsp;<label class="color_blue" id="jd">'+num+'%</label>';
                    ul += '</div>';
                    ul += '<p class="u-progress jdt" style="margin-left:0;"><span class="pgbar" style="width:' +num+ '%;"><span class="pging"></span></span></p></div>';
                    ul += '<div class="buy_container"><div class="btn_buy">';
                    ul += '<a class="add " codeid="' + data[i].id + '" href="javascript:;"></a>';
                    ul += '</div></div></div></li></ul>';
                    $("#divGoodsLoading").before(ul);
                }
                if (data[0].page <= data[0].sum) {
                    $("#btnLoadMore").css('display', 'block');
                    $("#btnLoadMore2").css('display', 'none');
                    $("#btnLoadMore3").css('display', 'none');
                } else if (data[0].page > data[0].sum) {
                    $("#btnLoadMore").css('display', 'none');
                    $("#btnLoadMore2").css('display', 'none');
                    $("#btnLoadMore3").css('display', 'block');
                }
            } else {
                $("#btnLoadMore").css('display', 'none');
                $("#btnLoadMore2").css('display', 'block');
                $("#btnLoadMore3").css('display', 'none');
            }
        });
    }

    $(document).ready(function() {
                //即将揭晓,人气,最新,价格 
                $("#divGoodsNav li:not(:last)").click(function() {
                    var l = $(this).index();
                    $("#divGoodsNav li").removeClass().eq(l).addClass('current');
                    var parm = $("#divGoodsNav li").eq(l).attr('order');
                    $("#divGoodsLoading").css('display', 'block');
                    $(".goodsList ul").remove();
                    var init = init_json("list/" + parm);
                });
                //商品分类
    var dl=$("#divGoodsNav dl"),
        last=$("#divGoodsNav li:last"),
        first=$("#divGoodsNav dd:first");
    $("#divGoodsNav li:last a:first").click(function(){     
        if(dl.css("display")=='none'){
            dl.show();
            last.addClass("gSort");
            first.addClass("sOrange");          
        }else{
            dl.hide();
            last.removeClass("gSort");
            first.removeClass("sOrange");
        }
    });
    $("#divGoodsNav  dd").click(function(){
        var s=$(this).index();
        var t=$("#divGoodsNav .gSort dd a").eq(s).html();
        var id=$("#divGoodsNav .gSort dd a").eq(s).attr('id');
        $("#divGoodsNav .gSort a:first").html(t+'<s class="arrowUp"></s>');
        var l=$("#divGoodsNav .current").index(),
            parm=$("#divGoodsNav li").eq(l).attr('order');
        if(id){         
            $("#divGoodsLoading").css('display','block');
            $(".goodsList ul").remove();
            glist_json(id+'/'+parm);
        }else{
            glist_json("list/"+parm);
            $(".goodsList ul").remove();
        }   
        dl.hide();
        last.removeClass("gSort");
        first.removeClass("sOrange");
    });
                //加载更多
                //自动加载
                $(window).scroll(function() {
                    if ($(document).height() - $(this).scrollTop() - $(this).height() < 1 && $('#btnLoadMore').css('display') != 'none') {
                        var url = $("#urladdress").val(),
                            page = $("#pagenum").val();
                        init_json(url + '/' + page);
                    }
                });


        
    //添加到购物车
    $(document).on("click",'.add',function(){
        var codeid=$(this).attr('codeid');
        $.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/addShopCart/'+codeid+'/1',function(data){
            if(data.code==1){
                addsuccess('添加失败');
            }else if(data.code==0){
                addsuccess('添加成功');             
            }return false;
        });
    });
    function addsuccess(dat){
        $("#pageDialogBG .Prompt").text("");
        var w=($(window).width()-255)/2,
            h=($(window).height()-45)/2;
        $("#pageDialogBG").css({top:h,left:w,opacity:0.8});
        $("#pageDialogBG").stop().fadeIn(1000);
        $("#pageDialogBG .Prompt").append('<s></s>'+dat);
        $("#pageDialogBG").fadeOut(1000);
        //购物车数量
        $.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
            $("#btnCart").append('<em>'+data.num+'</em>');
        });
    }
    //跳转页面
    var gt='.goodsList span,.goodsList h2,.goodsList .Progress-bar';
    $(document).on('click',gt,function(){
        var id=$(this).attr('id');
        if(id){
            window.location.href="<?php echo WEB_PATH; ?>/mobile/mobile/item/"+id;
        }           
    });

});
    //分类悬浮js
/*  
    window.onscroll = function() {
        var w = document.documentElement.scrollTop || document.body.scrollTop;
        var fldh = document.getElementById("fldh");
        if (w >= 200) {
            fldh.style.position = "fixed";
            fldh.style.top = "49px";
            fldh.style.width = "100%";
        }else{
            fldh.style.position = "relative";
        }

    }
    */
    </script>
</body>

</html>
<div id="pageDialogBG" class="pageDialogBG">
    <div class="Prompt"></div>
</div>
<!--
<ul class="contact-public">
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg(" qq "); ?>&site=qq&menu=yes">
联
<br>
系
<br>
客
<br>服</a>
</ul>
-->
<input name="hidLineLink" type="hidden" id="hidLineLink" value="<?php echo WEB_PATH; ?>/mobile/mobile/" />
<script>
  wx.config({
    debug: false,
    appId: "<?php  echo $wechat['appid']; ?>",
    timestamp: <?php  echo $signPackage["timestamp"]; ?>,
    nonceStr: '<?php  echo $signPackage["nonceStr"]; ?>',
    signature: '<?php  echo $signPackage["signature"]; ?>',
  jsApiList: ["checkJsApi", "onMenuShareAppMessage", "onMenuShareTimeline", "onMenuShareWeibo", "onMenuShareQQ"]
  });
wx.ready(function () {
var n = $("#hidLineLink").val();
    wx.onMenuShareTimeline({
        title: "梦想还是要有的，因为一定会实现！", // 分享标题
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/app.png", // 分享图标
        success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
    wx.onMenuShareAppMessage({
        title: "梦想还是要有的，因为一定会实现！", // 分享标题
        desc: "请您相信，美好的事情永远会真实地在这里发生。快来试试吧，比买彩票还过瘾！所有的幸运，只需1元！", // 分享描述
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/app.png", // 分享图标
        type: '', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
         success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
    wx.onMenuShareQQ({
        title: "梦想还是要有的，因为一定会实现！", // 分享标题
        desc: "请您相信，美好的事情永远会真实地在这里发生。快来试试吧，比买彩票还过瘾！所有的幸运，只需1元！", // 分享描述
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/app.png", // 分享图标
        success: function () { 
           // 用户确认分享后执行的回调函数
        },
        cancel: function () { 
           // 用户取消分享后执行的回调函数
        }
    });
    wx.onMenuShareWeibo({
        title: "梦想还是要有的，因为一定会实现！", // 分享标题
        desc: "请您相信，美好的事情永远会真实地在这里发生。快来试试吧，比买彩票还过瘾！所有的幸运，只需1元！", // 分享描述
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/app.png", // 分享图标
        success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
});
</script>