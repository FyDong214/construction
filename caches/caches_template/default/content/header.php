<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>iconfont.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>

<?PHP
if($child){
   $child_arrary=explode(',',$arrchildid);
        $to_url=$CATEGORYS[$child_arrary[0]][url];
  echo "<script>window.location.href='".$to_url."'</script>";
	}
?>
</head>
<body>
<div class="body-top">
    <div class="content">
		<ul class="nav">
			<li>
				<a onclick="SetHome(window.location)" style="cursor:pointer">设为首页</a>
			</li>
			<li>
				<a href=# rel="sidebar" onclick="javascript:addFavorite()"  style="cursor:pointer">加入收藏</a>
			</li>
			<li>手机版</li>
			<li>桌面下载</li>
			<li>论坛登录</li>
			<li>站点导航</li>
			<li class="login" style="margin-left: 100px;">
				<div class="login lh24 blue">
					<span class="rt">
						<script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="40" frameborder="0" scrolling="no"></iframe>')</script>
					</span>
				</div>
			</li>
		</ul>
    <!-- <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                      <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_header')?>
<script type="text/javascript">
$(function(){
	startmarquee('announ',22,1,500,3000);
})
</script> -->
			<!-- <div class="login lh24 blue"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a><span class="rt"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span></div> -->
           
			
		<div class="nav-right" style="overflow: hidden;">
			<div style="width: 129px; color: #fff;line-height: 42px;margin: 0 15px;">
				<?php echo date('Y',time($updatetime));?>年<?php echo date('m',time($updatetime));?>月<?php echo date('d',time($updatetime));?>日
				星期<span id="dateCN"><?php echo date('N',time($updatetime));?></span>
			</div>
			<div style=" color: #fff;line-height: 42px;margin: 0 0px;">
				<span id="address" style="display: inline-block"></span>
				<span id="wendu" style="display: inline-block"></span>℃
			</div>
			<div class="tab" id="search">
					<?php $j=0?>
					<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
					<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
					<?php $j++;?>
						<!-- <a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?> -->
					<?php $n++;}unset($n); ?>
					<?php unset($j);?>
				</div>
			<div class="bd search" style="float: right">
				<form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
					<input type="hidden" name="m" value="search"/>
					<input type="hidden" name="c" value="index"/>
					<input type="hidden" name="a" value="init"/>
					<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
					<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
					<input type="text" class="text search" name="q" id="q"/>
					<i class="iconfont icon-sousuo search"></i>
					<input type="submit" value="" class="button mybutton" />
				</form>
			</div>
		</div>
	</div>
</div>
<div class="header">
	<ul class="header-logo">
		<li class="head_1"></li>
		<li class="head_2"></li>
		<li class="head_3"></li>
		<li class="member-search">
			<a href="<?php echo APP_PATH;?>index.php?m=member&siteid=1">在线投稿</a>
		</li>
	</ul>

    <div class="banner"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
    <div class="bk3"></div>
    <div class="nav-bar">
    	<map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul class="nav-site">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line con-line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>
    </div> 
	
	<?php if($top_parentid) { ?>
    <div class="subnav">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><span> | </span>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<!-- <a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=album">视频专辑</a> <span> | </span> -->
    	<!-- <?php if($modelid) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=search&catid=<?php echo $catid;?>">搜索</a><?php } ?> -->
    </div>
	<?php } ?>
</div>
</div>
<script type="text/javascript">

	var date = $('#dateCN').html();
	switch (date) {
		case "1": $('#dateCN').html('一'); break;
		case "2": $('#dateCN').html('二'); break;
		case "3": $('#dateCN').html('三'); break;
		case "4": $('#dateCN').html('四'); break;
		case "5": $('#dateCN').html('五'); break;
		case "6": $('#dateCN').html('六'); break;
		case "7": $('#dateCN').html('七'); break;
	}

	// 获取所在地
	$(function(){

		var latlon=null;
		var city;
		//ajax获取用户所在经纬度
		$.ajax({
			url:"http://api.map.baidu.com/location/ip?ak=SFSupwuY95NMgI7eDE99NqYx7WpNqDKp&coor=bd09ll",
			type:"POST",
			dataType:"jsonp",
			success:function(data){
				latlon=data.content.point.y+","+data.content.point.x;
				//ajax根据经纬度获取省市区
				$.ajax({
					type: "POST",
					dataType: "jsonp",
					url: 'http://api.map.baidu.com/geocoder/v2/?ak=SFSupwuY95NMgI7eDE99NqYx7WpNqDKp&callback=renderReverse&location='+latlon+'&output=json&pois=0',
					success: function (json) {
						if(json.status==0){
							// console.log(json.result.addressComponent.province+"-"+json.result.addressComponent.city+"-"+json.result.addressComponent.district);
							$('#address').html(json.result.addressComponent.city)
							city = json.result.addressComponent.city
							$.ajax({
								type: "get",
								url:"http://wthrcdn.etouch.cn/weather_mini?city="+city,
								async: true,
								dataType:"jsonp",
								jsonp: "callback",
								jsonpCallback: "handler1",
								success:function(data){
									// console.log(data.data.wendu)
									$('#wendu').html(data.data.wendu);
								}
							})
						}
					}
				});
			},
			error:function(){
				$('#address').html('北京市')
			}
		});


	})
	

	// 设为首页
	function SetHome(url){
		if (document.all) {
			document.body.style.behavior='url(#default#homepage)';
			document.body.setHomePage(url);
		}else{
			alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
		}
	}
	
	// 加为收藏
	function addFavorite() {
		var url = window.location;
		var title = document.title;
		var ua = navigator.userAgent.toLowerCase();
		if (ua.indexOf("360se") > -1) {
				alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
			}
			else if (ua.indexOf("msie 8") > -1) {
				window.external.AddToFavoritesBar(url, title); //IE8
			}
			else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
			}
			else if (window.sidebar) {
				window.sidebar.addPanel(title, url, "");
			}
			else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
			}
	}
		
</script>