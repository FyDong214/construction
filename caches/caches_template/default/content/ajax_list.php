<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="ajax_list" >  
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1beb59d3c1e3c4e7decf6c448c494338&action=lists&catid=10&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>  
    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>  
    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>  
    <?php $n++;}unset($n); ?>  
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
    </div>  
    <div class="pager ajaxhomelist">  
        <?php echo $pages;?>  
    </div>  
    <script type="text/javascript">  
        $(function(){  
                var curr_page = parseInt($('.ajaxhomelist span').text());  
                $('.ajaxhomelist a').click(function(event){  
                    event.preventDefault();  
                    _page = $(this).text();  
                    if(_page == "下一页") _page = curr_page+1;  
                    if(_page == "上一页") _page = curr_page-1;  
                    $('.contain_ajaxhomelist').load(  
                        "<?php echo siteurl($siteid);?>/index.php?a=homeajaxlist&page="+_page,  
                        function(){  
                                    //这个是让页面滚动到列表上方  
                                    $("html,body").animate({scrollTop:$("#conter").offset().top},1000);  
                                
                        });  
                });          
        });  
    </script>  
        