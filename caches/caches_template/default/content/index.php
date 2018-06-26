<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main">
    <div class="top-news">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=188913612b73685e8e51c0468e66e1f3&action=lists&catid=18&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','limit'=>'4',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <h4 class="blue_<?php if($n==1) { ?>t<?php } else { ?>l<?php } ?><?php if($n==2) { ?>t<?php } else { ?>l<?php } ?>"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
        <!-- <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p> -->
        <!-- <div class="bk20 hr"><hr /></div> -->
        <?php $n++;}unset($n); ?>  
        <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=18" class="more">更多头条>></a>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   

    </div>
	<div class="col-left">
    	<div class="news-hot" style="margin-right: 0;">
        	<div class="content" style="padding: 0 29px;">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=64e7254e0d0b0c78d87ca32988fecb7b&action=lists&catid=6&order=id+DESC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'12',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php if(($n-1)%4==0) { ?>
                <h3 class="blue_b"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],46,'');?></a></h3>
             <?php } else { ?>
                <h5 class="blue_i"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></h5>
                <!-- <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p> -->
                <!-- <div class="bk20 hr"><hr /></div> -->
            <?php } ?>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
        </div>
        <div class="slide">
            <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dad00c5c303d2d2b113af066178745b1&action=lists&catid=8&order=id+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>">
                            <img src="<?php echo thumb($r['thumb'],650,450);?>" alt="<?php echo $r['title'];?>" width="650" height="450" />
                        </a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="bk10"></div>
        	<!-- <div class="box extend">
            	<div class="col-left">争议</div>
                <div class="col-auto">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=62e5ac893abc3866a6bda2553c0a156a&pos=index_block_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
                <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/10.js"></script>
            </div> -->
        </div>
        <div class="bk10"></div>
        <div style="width: 690px;border: 1px solid #cf0101"></div>
        <!-- <div class="box">
        		<h5>图片新闻</h5>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
            <ul class="content news-photo picbig">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"/></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div> -->
        <div class="center-content">
                <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
                <?php $num++?>
                <?php if($r['catid']==6 || $r['catid']==8 || $r['catid']==10 || $r['catid']==12 || $r['catid']==13 || $r['catid']==14 || $r['catid']==15 || $r['catid']==16 || $r['catid']==17 || $r['catid']==18) continue;?>
                <div class="box cat-area" <?php if($num%2!=0) { ?>style=" margin: 20px 20px 0 0"<?php } ?>>
                        <h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>
                     <div class="content">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                     <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                         <p>
                             <img src="<?php echo thumb($v[thumb],90,0);?>" width="176" height="110"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                        </p>
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7643f9f0365837bba31ff76577769f74&action=lists&catid=%24r%5Bcatid%5D&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'4',));}?>
        
                        <ul class="list lh24 f14">
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                        <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>
                <?php $n++;}unset($n); ?>
                <div class="advertices">
                        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
                </div>
        </div>
        <div class="center-logo"></div>
        <div class="bk10"></div>
        <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
        <?php $num++?>
        <?php if($r['catid']==6 || $r['catid']==8 || $r['catid']==9 || $r['catid']==10 || $r['catid']==11 || $r['catid']==18) continue;?>
        <div class="box cat-area con" style="    margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
        		<h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>
             <div class="content">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             	<p>
             		<img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                </p>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7643f9f0365837bba31ff76577769f74&action=lists&catid=%24r%5Bcatid%5D&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'4',));}?>

                <ul class="list lh24 f14">
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
		<?php $n++;}unset($n); ?>
    </div>
    <!-- <div class="col-auto">
    	<div class="box">
        	 <h5 class="title-2">公告<a href="" class="more">&nbsp;</a></h5>
             <div class="content">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>
                <ul class="list lh24 f14">
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>
                   <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        	<h5 class="title-2">专题<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
            <div class="content special">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=d0da2a95c4fd410d9fde0a59d59f48fc&action=lists&siteid=%24siteid&elite=1&listorder=3&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'3','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<?php if($n!=1) { ?><div class="hr bk15"></div><?php } ?>
                <p style="margin:0">
             		<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="90" height="70" /></a>
                    <strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'18');?></a></strong><br /><?php echo str_cut($r['description'],50);?>
                </p>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2"><span class="rt fn f12 tab SwapTab"><span class="fb">热点</span> | <span >评论</span> | <span>关注</span></span>排行</h5>
            <div class="tab-content">
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=55e75bfad540869982aca092575756e4&action=bang&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array()).'55e75bfad540869982aca092575756e4');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            </div>
        </div><div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">调查问卷<a href="<?php echo APP_PATH;?>index.php?m=vote&c=index&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
 
<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>
        </div>
    </div> -->
    <div class="bk10"></div>

    <!-- 专题轮播 -->
    <div style="width:100%; height:160px; float:left; overflow:hidden; position: relative;">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=6aa4c062455032cef4b9fc5e8ba02725&action=lists&siteid=%24siteid&elite=1&listorder=2&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'2','limit'=>'7',));}?>

        <ul class="special-topic" id="marquee">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r['thumb'], 224, 112);?>" width="180" height="130" alt="<?php echo $r['title'];?>"/><p class="title"><span><?php echo $r['title'];?></span><br /><?php echo $r['description'];?></p></a></li>
            <?php $n++;}unset($n); ?>
        </ul>

    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <!-- 站点导航 -->
    <div class="nav-net">
        <h5>
            <i class="nav-icon"></i>
            站点导航-国务院部门网站</h5>
        <ul>
            <li>
                <div  class="img_1"></div>
                <h5>中华人民共和国民政部</h5>
            </li>
            <li>
                <div  class="img_2"></div>
                <h5>中华人民共和国国家事务委员会</h5>
            </li>
            <li>
                <div  class="img_3"></div>
                <h5>中华人民共和国工业和信息化部</h5>
            </li>
        </ul>
    </div>

    <!-- 合作伙伴 -->
    <div class="partner" style="margin-bottom: 10px;">
        <h5>
            <i class="partner-icon"></i>
            合作伙伴</h5>
        <ul class="colli imgul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=95165a11c36de3b7c95e43a177fa3743&action=type_list&typeid=53&siteid=%24siteid&linktype=1&order=listorder+ASC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('typeid'=>'53','siteid'=>$siteid,'linktype'=>'1','order'=>'listorder ASC','limit'=>'8',));}?>
            <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
            <li style="padding: 10px 15px;border: 1px solid #cac8bb;margin-right: 20px;"><a href="<?php echo $v['url'];?>"  title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="100" height="45" /></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    
    <!-- 友情链接 -->
	<div class="box blogroll ylink">
        <h5>
            <i class="ylink-icon"></i>
            <!-- <a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>></a> -->
            友情链接
            <!-- <a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a> -->
        </h5>
        <!-- <div class="bk10"></div> -->
        <ul class="colli imgul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=b5eeb1ebb5aa68fea219fc101e0798e1&action=type_list&siteid=%24siteid&linktype=1&typeid=54&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','typeid'=>'54','order'=>'listorder DESC','limit'=>'8',));}?>
            <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=470079e2b0abbacc0c5328e06b9fc98f&action=type_list&siteid=%24siteid&order=listorder+DESC&num=15&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'15',));}?>
	<div class="linka">
		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <?php if($type==0) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
              <?php } else { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a> 
              <?php } ?>
		<?php $n++;}unset($n); ?>
 	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
<script src="<?php echo APP_PATH;?>phpcms/plugin/jquery.bxslider.js"></script>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",650,450,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})

$('#marquee').bxSlider({
    slideWidth: 180,
    minSlides: 5,
    maxSlides: 5,
    moveSlides: 1,
    slideMargin: 15,
    infiniteLoop: true,
});
</script>
<?php include template("content","footer"); ?>