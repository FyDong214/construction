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
                <h3 class="blue_b"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],44,'');?></a></h3>
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
        <div style="width: 640px;border: 1px solid #cf0101"></div>
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
                <!-- 视频新闻 -->
                <?php if($r['catid']==9) { ?>
                <div class="box cat-area spetwo" <?php if($num%2!=0) { ?>style=" margin: 20px 20px 0 0"<?php } ?>>
                    <h5 class="title-1">
                        <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                        <!-- <a href="<?php echo $r['url'];?>" class="more">更多>></a> -->
                    </h5>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1830f8ca1568954884abf95f61c0f2ac&action=category&catid=%24r%5Bcatid%5D&num=100&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'100',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                    <a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a>
                    
                    <?php $n++;}unset($n); ?>
                    <div class="content">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79a1f32b644f2dbb6f54c04f3ba3488c&action=lists&catid=%24r%5Bcatid%5D&order=listorder+ASC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC','thumb'=>'1','limit'=>'1',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <p>
                                    <img src="<?php echo thumb($v[thumb],90,0);?>" width="176" height="110"/>
                                   <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                               </p>
                             <?php $n++;}unset($n); ?>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b678d9bb93907d0ad037f10078831001&action=lists&catid=%24r%5Bcatid%5D&order=listorder+ASC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'4',));}?>
                               <ul class="list lh24 f14">
                               <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                   <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                               <?php $n++;}unset($n); ?>
                               </ul>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                           </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <?php } ?>

                <!-- 质量安全 -->
                <?php if($r['catid']==11 ) { ?>
                <div class="box cat-area spetwo" <?php if($num%2!=0) { ?>style=" margin: 20px 20px 0 0; position: relative;"<?php } ?>>
                        <h5 class="title-1">
                            <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                            <!-- <a href="<?php echo $r['url'];?>" class="more">更多>></a> -->
                        </h5>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6154cc5c44f30f593de2b6581878ddcf&action=category&catid=11&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <span class="cate" id="cate_1"><?php echo $rr['catname'];?>
                            <i>+</i>
                        </span>
                       
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e8a83b6703cb0429894d9a324c8c36e2&action=category&catid=%24r%5Bcatid%5D&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
                        <ul id="children" class="cate-children">
                            <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                            <li><?php echo $rr['catname'];?></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <div class="content" id="content_1">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db83920ffce6e751c3a0c5441e3f2452&action=lists&catid=24&order=listorder+ASC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'24','order'=>'listorder ASC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <p>
                                <img src="<?php echo thumb($v[thumb],90,0);?>" width="176" height="110"/>
                                <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                            </p>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8cfc426fdbe1026440f2eb4f2382db58&action=lists&catid=24&order=listorder+ASC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'24','order'=>'listorder ASC','limit'=>'4',));}?>
                            <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                            </ul>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        <div class="content" id="content_2" style="display: none;">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58fc3e20385861f2b4216f141fbe09c6&action=lists&catid=25&order=listorder+ASC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'25','order'=>'listorder ASC','thumb'=>'1','limit'=>'1',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <p>
                                    <img src="<?php echo thumb($v[thumb],90,0);?>" width="176" height="110"/>
                                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                                </p>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4d220e4087ddc41f740416d128b34b25&action=lists&catid=25&order=listorder+ASC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'25','order'=>'listorder ASC','limit'=>'4',));}?>
                                <ul class="list lh24 f14">
                                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                    <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                                <?php $n++;}unset($n); ?>
                                </ul>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                            <div class="content" id="content_3" style="display: none;">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=81dd79e31b70680d4af69ddbb8ce633d&action=lists&catid=26&order=listorder+ASC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'26','order'=>'listorder ASC','thumb'=>'1','limit'=>'1',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <p>
                                    <img src="<?php echo thumb($v[thumb],90,0);?>" width="176" height="110"/>
                                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                                </p>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c010abd3b8e8b6fca1eb08701a56942&action=lists&catid=26&order=listorder+ASC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'26','order'=>'listorder ASC','limit'=>'4',));}?>
                                <ul class="list lh24 f14">
                                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                    <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                                <?php $n++;}unset($n); ?>
                                </ul>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <?php } ?>
                <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>
                <?php $n++;}unset($n); ?>
                <div class="advertices">
                        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
                </div>
        </div>
        
        <div class="center-logo"></div>
        <div class="bk10"></div>

        <!-- <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $r) { ?>
        <ul>
            <li><a href="<?php echo $CATEGORYS[$r['catid']]['url'];?>"><?php echo $CATEGORYS[$r['catid']]['catname'];?></a></li>
        </ul>
       <?php $n++;}unset($n); ?> -->
       
       
        <div class="bk10"></div>

        <!-- 建筑建材 -->
        <div class="box cat-area con" id="cate_2" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=eadbdd443e6030a7d8cdd79bda3e0981&sql=select+%2A+from+phpcms_category+where+catid+in+%2812%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (12) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
            <h5 class="title-1">
                <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
            </h5>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=deed9a2ee4a184c4a4efc8a62c4aeba7&sql=select+%2A+from+phpcms_category+where+catid+in+%2819%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (19) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
            <div class="cate-div" style="cursor: pointer;">
                <span class="cate" id="jzjc_title"><?php echo $rr['catname'];?>
                    <i>+</i>
                </span>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8c7e9ff040a2cae946ccde47da44918a&sql=select+%2A+from+phpcms_category+where+catid+in+%2819%2C20%2C35%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (19,20,35) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <ul class="cate-children" id="jzjc_zlm">
                    <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                    <li><?php echo $rr['catname'];?></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
            <?php $n++;}unset($n); ?>

            <div id="jzjc_children">
                <!-- 子栏目1 -->
                <div class="content">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7682fcd2843e41f7883b07a7a7fab024&action=lists&catid=19&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'19','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <p>
                        <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                        <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                    </p>
                    <?php $n++;}unset($n); ?>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c42445a78d6c90095a8fe750156a91e5&action=lists&catid=19&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'19','order'=>'id DESC','limit'=>'4',));}?>
                    <ul class="list lh24 f14">
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <!-- 子栏目2 -->
                <div class="content" style="display: none;">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1db88bc983bcf20812720ed6b801ed02&action=lists&catid=20&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'20','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <p>
                        <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                        <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                    </p>
                    <?php $n++;}unset($n); ?>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5602d4894ead526babc30ef807f7b180&action=lists&catid=20&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'20','order'=>'id DESC','limit'=>'4',));}?>
                    <ul class="list lh24 f14">
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <!-- 子栏目3 -->
                <div class="content" style="display: none;">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=25cbedd592ead9e63c9d7f24f29dc0c8&action=lists&catid=35&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'35','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <p>
                        <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                        <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                    </p>
                    <?php $n++;}unset($n); ?>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d70d9a1134c392771dcf805710720b9&action=lists&catid=35&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'35','order'=>'id DESC','limit'=>'4',));}?>
                    <ul class="list lh24 f14">
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div>
        <?php $n++;}unset($n); ?> 
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div> 

        <!-- 企业党工团 -->
        <div class="box cat-area con" id="cate_3" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0852ebedc53d73967b2d5e057ea188f2&sql=select+%2A+from+phpcms_category+where+catid+in+%2813%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (13) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                <h5 class="title-1">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </h5>
    
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=72bd904e65100f68206079241d250dfc&sql=select+%2A+from+phpcms_category+where+catid+in+%2827%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (27) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                <div class="cate-div" style="cursor: pointer;">
                    <span class="cate" id="qydgt_title"><?php echo $rr['catname'];?>
                        <i>+</i>
                    </span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1d46f1bb73aecc4abea2538ce651e27a&sql=select+%2A+from+phpcms_category+where+catid+in+%2827%2C28%2C36%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (27,28,36) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                    <ul class="cate-children" id="qydgt_zlm">
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <li><?php echo $rr['catname'];?></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
    
                <div id="qydgt_children">
                    <!-- 子栏目1 -->
                    <div class="content">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3933892dc2f398177d29070de97a6cf3&action=lists&catid=27&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'27','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d70352ef149b941730affd32d2b831ec&action=lists&catid=27&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'27','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目2 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=440e617d85bf1219c66318b469f7299b&action=lists&catid=28&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'28','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1173a92fd38bd8fd9895bbfa74b0f8d8&action=lists&catid=28&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'28','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目3 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f4e508cf2bed3efdfefc29282b78fc16&action=lists&catid=36&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'36','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ac124def19b0dc3cb05620fddf89981a&action=lists&catid=36&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'36','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <!-- 精准扶贫 -->
        <div class="box cat-area con" id="cate_4" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5c5c88d2fae5b7ed7df0bdf296db62de&sql=select+%2A+from+phpcms_category+where+catid+in+%2814%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (14) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                <h5 class="title-1">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </h5>
    
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=87b6bb32c46df0bd7faffb951975597c&sql=select+%2A+from+phpcms_category+where+catid+in+%2821%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (21) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                <div class="cate-div" style="cursor: pointer;">
                    <span class="cate" id="jzfp_title"><?php echo $rr['catname'];?>
                        <i>+</i>
                    </span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c98f1289300a88b9a99e1a25d987093f&sql=select+%2A+from+phpcms_category+where+catid+in+%2821%2C22%2C23%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (21,22,23) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                    <ul class="cate-children" id="jzfp_zlm">
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <li><?php echo $rr['catname'];?></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
    
                <div id="jzfp_children">
                    <!-- 子栏目1 -->
                    <div class="content">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6019a610a59d157cdab052573e40410c&action=lists&catid=21&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'21','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ae34429d97540059f6acd9983619172f&action=lists&catid=21&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'21','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目2 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=331f58be9a31caa9a40ea37410f15856&action=lists&catid=22&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'22','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec1cfede5effd22a289a1170cd746494&action=lists&catid=22&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目3 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26bdf470f695dae1897f4d07ebac870a&action=lists&catid=23&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'23','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4db28a87435d54bec908cbe2755db343&action=lists&catid=23&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'23','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <!-- 一带一路 -->
        <div class="box cat-area con" id="cate_5" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e9c6a0548ee9d6e6a12040d5b41ed60f&sql=select+%2A+from+phpcms_category+where+catid+in+%2815%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (15) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                <h5 class="title-1">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </h5>
    
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2ab8c6a48a53d9fa9421baa619ec970f&sql=select+%2A+from+phpcms_category+where+catid+in+%2829%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (29) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                <div class="cate-div" style="cursor: pointer;">
                    <span class="cate" id="ydyl_title"><?php echo $rr['catname'];?>
                        <i>+</i>
                    </span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d4b97664dcc3c1937fcd14c93d7310d9&sql=select+%2A+from+phpcms_category+where+catid+in+%2829%2C30%2C37%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (29,30,37) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                    <ul class="cate-children" id="ydyl_zlm">
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <li><?php echo $rr['catname'];?></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
    
                <div id="ydyl_children">
                    <!-- 子栏目1 -->
                    <div class="content">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5aa958195584a8c4262603374ef7c2b8&action=lists&catid=29&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'29','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f21ddd82ea43833ac431c700bd142302&action=lists&catid=29&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'29','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目2 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=07feb6c6ef336648a0203f1200863883&action=lists&catid=30&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'30','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e11af27feeceeb769aef62fe865b2da1&action=lists&catid=30&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'30','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目3 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ea948af195e3ba91b4d82d558cc07f54&action=lists&catid=37&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'37','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28a72280936234ccd7274e27ecf38a50&action=lists&catid=37&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'37','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <!-- 特色小镇 -->
        <div class="box cat-area con" id="cate_6" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=df50d94ac75f71a1cf120a296dca966a&sql=select+%2A+from+phpcms_category+where+catid+in+%2816%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (16) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                <h5 class="title-1">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </h5>
    
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=86c235fbae48a40beef22e769a9c9b36&sql=select+%2A+from+phpcms_category+where+catid+in+%2831%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (31) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                <div class="cate-div" style="cursor: pointer;">
                    <span class="cate" id="tsxz_title"><?php echo $rr['catname'];?>
                        <i>+</i>
                    </span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1ac4389caac16c810a4b39f8c3b55cab&sql=select+%2A+from+phpcms_category+where+catid+in+%2831%2C32%2C38%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (31,32,38) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                    <ul class="cate-children" id="tsxz_zlm">
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <li><?php echo $rr['catname'];?></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
    
                <div id="tsxz_children">
                    <!-- 子栏目1 -->
                    <div class="content">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=466f01efa6c3b70bce6b1e65a49e9083&action=lists&catid=31&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'31','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c5e5711f36b32fb3f21a1bab6ee0980e&action=lists&catid=31&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'31','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目2 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=073222a58470a50d8f4b4d4a53289df7&action=lists&catid=32&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'32','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9f02b4d47ab23209c4dd7e57284fa6b3&action=lists&catid=32&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'32','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目3 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2f6b9c85c887878d9e777895a94a640d&action=lists&catid=38&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'38','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=180bb3a65b896ba2037a4f2f40e12786&action=lists&catid=38&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'38','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <!-- 北大文旅 -->
        <div class="box cat-area con" id="cate_7" style="margin: 20px 5px 10px 0; border-top: 2px solid #cf0101;overflow: hidden;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=202c7af5b501b2395e613d4bc05a7fe0&sql=select+%2A+from+phpcms_category+where+catid+in+%2817%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (17) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                <h5 class="title-1">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </h5>
    
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=63be8a19a75f8b1027ec1198792d3cd3&sql=select+%2A+from+phpcms_category+where+catid+in+%2833%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (33) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                <div class="cate-div" style="cursor: pointer;">
                    <span class="cate" id="bdwl_title"><?php echo $rr['catname'];?>
                        <i>+</i>
                    </span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=99a43616ff4865e1fcbb26a2588bcb17&sql=select+%2A+from+phpcms_category+where+catid+in+%2833%2C34%2C39%29&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where catid in (33,34,39) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                    <ul class="cate-children" id="bdwl_zlm">
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                        <li><?php echo $rr['catname'];?></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
    
                <div id="bdwl_children">
                    <!-- 子栏目1 -->
                    <div class="content">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=468190b4e5b5df34a41ac814c29ec7c2&action=lists&catid=33&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'33','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=81b66a81bdf41a78d5860709006dbbcc&action=lists&catid=33&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'33','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目2 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3043981aef05017946628138c1f39f14&action=lists&catid=34&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'34','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7713d1fd059679606516f6083a72331e&action=lists&catid=34&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'34','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <!-- 子栏目3 -->
                    <div class="content" style="display: none;">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b149aa3de4d167e58eb3508faed18a27&action=lists&catid=39&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'39','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <p>
                            <img src="<?php echo thumb($v[thumb],90,0);?>" width="315" height="180"/>
                            <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong>
                        </p>
                        <?php $n++;}unset($n); ?>
    
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e195b07958f27b7b9d376a575b4a3e02&action=lists&catid=39&order=id+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'39','order'=>'id DESC','limit'=>'4',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
       
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

$(function(){
    $("#cate_1").mouseover(function(){
        $("#children").css("display","block");
    })
    $("#cate_1").mouseout(function(){
        $("#children").css("display","none");
    })
    $("#children").mouseover(function(){
        $("#children").css("display","block");
    })
    $("#children").mouseout(function(){
        $("#children").css("display","none");
    })
})

$(function(){
    $("#children>li:first").click(function(){
        $("#cate_1").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#children>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#children>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#children>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#content_1").css("display","block")
        $("#content_2").css("display","none")
        $("#content_3").css("display","none")
    })
    $("#children>li:nth-child(2)").click(function(){
        $("#cate_1").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#children>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#children>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#children>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#content_2").css("display","block")
        $("#content_1").css("display","none")
        $("#content_3").css("display","none")
    })
    $("#children>li:nth-child(3)").click(function(){
        $("#cate_1").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#children>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#children>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#children>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#content_3").css("display","block")
        $("#content_1").css("display","none")
        $("#content_2").css("display","none")
    })
})
$(function(){
    $(".cate-div").mouseover(function(){
        $(this).children(".cate-children").css("display","block");
    })
    $(".cate-div").mouseout(function(){
        $(this).children(".cate-children").css("display","none");
    })
    $(".cate-children").mouseover(function(){
        $(this).css("display","block");
    })
    $(".cate-children").mouseout(function(){
        $(this).css("display","none");
    })
    $("#cate_2 .cate-children>li:first").click(function(){
        $("#jzjc_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzjc_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#jzjc_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_children>div:first").css("display","block")
        $("#jzjc_children>div:nth-child(2)").css("display","none")
        $("#jzjc_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_2 .cate-children>li:nth-child(2)").click(function(){
        $("#jzjc_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzjc_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#jzjc_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_children>div:first").css("display","none")
        $("#jzjc_children>div:nth-child(2)").css("display","block")
        $("#jzjc_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_2 .cate-children>li:nth-child(3)").click(function(){
        $("#jzjc_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzjc_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzjc_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#jzjc_children>div:first").css("display","none")
        $("#jzjc_children>div:nth-child(2)").css("display","none")
        $("#jzjc_children>div:nth-child(3)").css("display","block")
    })

    $("#cate_3 .cate-children>li:first").click(function(){
        $("#qydgt_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#qydgt_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#qydgt_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_children>div:first").css("display","block")
        $("#qydgt_children>div:nth-child(2)").css("display","none")
        $("#qydgt_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_3 .cate-children>li:nth-child(2)").click(function(){
        $("#qydgt_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#qydgt_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#qydgt_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_children>div:first").css("display","none")
        $("#qydgt_children>div:nth-child(2)").css("display","block")
        $("#qydgt_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_3 .cate-children>li:nth-child(3)").click(function(){
        $("#qydgt_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#qydgt_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#qydgt_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#qydgt_children>div:first").css("display","none")
        $("#qydgt_children>div:nth-child(2)").css("display","none")
        $("#qydgt_children>div:nth-child(3)").css("display","block")
    })

    $("#cate_4 .cate-children>li:first").click(function(){
        $("#jzfp_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzfp_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#jzfp_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_children>div:first").css("display","block")
        $("#jzfp_children>div:nth-child(2)").css("display","none")
        $("#jzfp_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_4 .cate-children>li:nth-child(2)").click(function(){
        $("#jzfp_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzfp_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#jzfp_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_children>div:first").css("display","none")
        $("#jzfp_children>div:nth-child(2)").css("display","block")
        $("#jzfp_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_4 .cate-children>li:nth-child(3)").click(function(){
        $("#jzfp_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#jzfp_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#jzfp_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#jzfp_children>div:first").css("display","none")
        $("#jzfp_children>div:nth-child(2)").css("display","none")
        $("#jzfp_children>div:nth-child(3)").css("display","block")
    })

    $("#cate_5 .cate-children>li:first").click(function(){
        $("#ydyl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#ydyl_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#ydyl_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_children>div:first").css("display","block")
        $("#ydyl_children>div:nth-child(2)").css("display","none")
        $("#ydyl_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_5 .cate-children>li:nth-child(2)").click(function(){
        $("#ydyl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#ydyl_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#ydyl_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_children>div:first").css("display","none")
        $("#ydyl_children>div:nth-child(2)").css("display","block")
        $("#ydyl_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_5 .cate-children>li:nth-child(3)").click(function(){
        $("#ydyl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#ydyl_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#ydyl_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#ydyl_children>div:first").css("display","none")
        $("#ydyl_children>div:nth-child(2)").css("display","none")
        $("#ydyl_children>div:nth-child(3)").css("display","block")
    })

    $("#cate_6 .cate-children>li:first").click(function(){
        $("#tsxz_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#tsxz_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#tsxz_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_children>div:first").css("display","block")
        $("#tsxz_children>div:nth-child(2)").css("display","none")
        $("#tsxz_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_6 .cate-children>li:nth-child(2)").click(function(){
        $("#tsxz_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#tsxz_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#tsxz_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_children>div:first").css("display","none")
        $("#tsxz_children>div:nth-child(2)").css("display","block")
        $("#tsxz_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_6 .cate-children>li:nth-child(3)").click(function(){
        $("#tsxz_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#tsxz_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#tsxz_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#tsxz_children>div:first").css("display","none")
        $("#tsxz_children>div:nth-child(2)").css("display","none")
        $("#tsxz_children>div:nth-child(3)").css("display","block")
    })

    $("#cate_7 .cate-children>li:first").click(function(){
        $("#bdwl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#bdwl_zlm>li:first").css({"background":"#1d71b7","color":"#fff"})
        $("#bdwl_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_children>div:first").css("display","block")
        $("#bdwl_children>div:nth-child(2)").css("display","none")
        $("#bdwl_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_7 .cate-children>li:nth-child(2)").click(function(){
        $("#bdwl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#bdwl_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_zlm>li:nth-child(2)").css({"background":"#1d71b7","color":"#fff"})
        $("#bdwl_zlm>li:nth-child(3)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_children>div:first").css("display","none")
        $("#bdwl_children>div:nth-child(2)").css("display","block")
        $("#bdwl_children>div:nth-child(3)").css("display","none")
    })
    $("#cate_7 .cate-children>li:nth-child(3)").click(function(){
        $("#bdwl_title").prop ('firstChild').nodeValue = this.innerText + "            ";
        $("#bdwl_zlm>li:first").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_zlm>li:nth-child(2)").css({"background":"none","color":"rgba(0,0,0,0.6)"})
        $("#bdwl_zlm>li:nth-child(3)").css({"background":"#1d71b7","color":"#fff"})
        $("#bdwl_children>div:first").css("display","none")
        $("#bdwl_children>div:nth-child(2)").css("display","none")
        $("#bdwl_children>div:nth-child(3)").css("display","block")
    })
})

</script>
<?php include template("content","footer"); ?>