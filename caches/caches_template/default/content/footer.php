<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer" style="overflow: visible;padding: 0;width: 100%;">
<style>
	div.info .lists,div.info .lists>ul{overflow: hidden;}
	div.info .lists>ul>li{float: left;padding:3px 5px;}
	div.info .lists>ul>li>b{font-size: 13px;position: relative;top: 0px;left: 5px;font-weight: normal;}
</style>
<div class="info">
		<div class="lists" style="margin: 15px 0;">
			<ul style="width: 574px;margin: 0 auto;">
				<li>客户端<b>|</b></li>
				<li>供稿服务<b>|</b></li>
				<li>网站地图<b>|</b></li>
				<li>站点导航<b>|</b></li>
				<li>用户注册<b>|</b></li>
				<li>栏目合作<b>|</b></li>
				<li>诚聘英才<b>|</b></li>
				<li>手机版网站<b>|</b></li>
				<li>微信二维码</li>
			</ul>
			<ul style="width: 737px;margin: 0 auto;">
				<li>中央机构<b>|</b></li>
				<li>人大机构<b>|</b></li>
				<li>国家主席<b>|</b></li>
				<li>国务院<b>|</b></li>
				<li>最高人民法院<b>|</b></li>
				<li>最高人民检察院<b>|</b></li>
				<li>政协机构<b>|</b></li>
				<li>民族党派<b>|</b></li>
				<li>群众团体<b>|</b></li>
				<li>驻外机构<b>|</b></li>
				<li>友情链接</li>
			</ul>
			<ul style="width: 759px;margin: 0 auto;">
				<li>中国互联网违法和不良信息举报中心<b>|</b></li>
				<li>中国互联网视听节目服务自律公约<b>|</b></li>
				<li>网络110报警服务<b>|</b></li>
				<li>12321垃圾信息举报中心<b>|</b></li>
				<li>中国新闻网站联盟</li>
			</ul>
		</div>
	<div style="margin-bottom: 15px;">
		<p>主办单位：中国建设频道 &nbsp;&nbsp; 承办单位：中国建设频道 &nbsp;&nbsp; 技术支持：内蒙古汇联科技有限公司</p>
		<p>版权所有 &nbsp; 中国互联网新闻电话：86-10-88828027 &nbsp; 京ICP证 040089号</p>
		<p>网络传播视听节目许可证号：0105123 &nbsp; 京公网安备 110108006329号 &nbsp; 京网文[2011]0252-085号</p>
	</div>
	<div style="margin-bottom: 15px;">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
</div>
<!-- Powered by <strong><a href="http://www.phpcms.cn" target="_blank">PHPCMS</a></strong> <em><?php echo get_pc_version(1);?></em> &copy; 2017 <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?> -->
</div>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>