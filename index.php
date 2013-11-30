<?php
/**
 * 根据Prower V6移植的主题
 * 
 * @package Prower V6 for Typecho
 * @author maucat
 * @version 1.2
 * @link http://soont.com
 */
 
 $this->need('header.php');
 ?>


<div id="main">
    <article id="post_list">
    <?php while($this->next()): $format = PostFormat_Plugin::getFormat(); ?>
	<section class="post">
<?php if ($format == 'video') : ?>
<span class="icon icon_video" title="视频"></span>
<?php elseif ($format == 'audio') : ?>
<span class="icon icon_audio" title="音乐"></span>
<?php elseif ($format == 'gallery') : ?>
<span class="icon icon_gallery" title="相册"></span>
<?php elseif ($format == 'aside') : ?>
<span class="icon icon_aside" title="日志"></span>
<?php else : ?>
<span class="icon icon_aside" title="文章"></span>
<?php endif; ?>

	<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<time class="time" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y.m.d'); ?></time>
            <p>format: <?php echo $format ?></p>
            <?php if ($format == 'video') : ?>
            <p>这是video</p>
            <?php endif; ?>

            <div class="post-content">
    			<?php $this->content('阅读详细 &raquo;'); ?>
            </div>
        </section>
    <?php endwhile; ?>
    </article>

    <nav class="navigation">
    	<span class="icon icon_page" title="分页"></span>
        <?php $this->pageNav('&laquo;', '&raquo;'); ?>
    </nav>
</div> <!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
