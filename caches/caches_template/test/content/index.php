<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="content">
    <div class="nav2"></div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f1096699cd8296ad477846bb203fa4ff&action=category&siteid=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','limit'=>'20',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $row) { ?>

    <div class="panel panel-danger">
        <div class="panel-heading article">
            <a href="<?php echo $row['url'];?>"><?php echo $row['catname'];?></a>
        </div>
        <div class="list-group">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=403859b17b178757869339c7a5056038&action=lists&catid=%24row%5Bcatid%5D&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$row[catid],'order'=>'id DESC','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $art) { ?>
            <a href="<?php echo $art['url'];?>" class="list-group-item"><?php echo $art["title"];?></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<?php include template("content","footer"); ?>