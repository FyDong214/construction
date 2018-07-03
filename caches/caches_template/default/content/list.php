<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main">
	<div class="col-left" style="width: 72%;">
    	<div class="crumbs mycrumbs">您所在的位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7d0c08cbac3b7d77b83eba540a9e91b7&action=lists&catid=%24catid&order=id+DESC&page=%24page&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="list lh24 f14 mylist">
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<li>
        <div class="left">
            <img src="<?php echo thumb($r[thumb],90,0);?>" width="140" height="100"/>
        </div>
        <div class="right">
            <p class="title"><a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></p>
            <p class="dec"><?php echo str_cut($r['description'],408);?></p>
        </div>
        <div class="foot">发表于：<?php echo date('Y-m-d H:i:s',$r[inputtime]);?></div>
    </li>
	<li class="bk20 hr" style="height: 3px;margin-bottom: 20px;"></li>
<?php $n++;}unset($n); ?>
        </ul>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
  <div class="col-right myright">
      <div class="title">阅读推荐</div>
      <div class="content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=359191eb83f1f27de33ba4036343fe22&action=lists&catid=19&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id DESC','limit'=>'10',));}?>
        <ul class="list">
        <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <li>
                <i class="triggle"></i>
                <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 50);?></a>
            </li>
        <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="search">
        <div class="tab" id="search">
            <?php $j=0?>
            <?php $search_model = getcache('search_model_'.$siteid, 'search');?>
            <?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
            <?php $j++;?>
                <!-- <a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?> -->
            <?php $n++;}unset($n); ?>
            <?php unset($j);?>
        </div>
        <i class="news-ser"></i>
        <div class="bd">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
                <input type="hidden" name="m" value="search"/>
                <input type="hidden" name="c" value="index"/>
                <input type="hidden" name="a" value="init"/>
                <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
                <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text sertext" name="q" id="q" />
                <i class="iconfont icon-sousuo search"></i>
                <div class="back"></div>
                <input type="submit" value="" class="button listbutton" />
            </form>
        </div>
    </div>
    <div class="adver">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script>
    </div>
  </div>
    <!-- <div class="col-auto">
        <div class="box">
            <h5 class="title-2">频道总排行</h5>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul class="content digg">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">频道本月排行</h5>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2caa10e576ba663010144233732308cd&action=hits&catid=%24catid&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'2caa10e576ba663010144233732308cd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul class="content rank">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span><?php echo number_format($r[monthviews]);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
				<?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div> -->
</div>
<?php include template("content","footer"); ?>