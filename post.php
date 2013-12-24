<?php $this->need('header.php'); ?>
<div id="main">
    <div class= "post">
    <?php $format = PostFormat_Plugin::getFormat(); ?>
            <?php if ($format == 'video') : ?>
                <span class="icon icon_video" title="视频"></span>
            <?php elseif ($format == 'audio') : ?>
                <span class="icon icon_audio" title="音乐"></span>
            <?php elseif ($format == 'gallery') : ?>
                <span class="icon icon_gallery" title="相册"></span>
            <?php elseif ($format == 'aside') : ?>
                <span class="ico-aside" title="日志"></span>
            <?php elseif ($format == 'link') : ?>
                <span class="ico-link" title="链接"></span>
            <?php elseif ($format == 'quote') : ?>
                <span class="ico-quote" title="引语"></span>
            <?php elseif ($format == 'status') : ?>
                <span class="ico-status" title="心情"></span>
            <?php elseif ($format == 'chat') : ?>
                <span class="ico-chat" title="聊天"></span>
            <?php else : ?>
                <span class="icon icon_aside" title="文章"></span>
            <?php endif; ?>
        <header id="post_header">
                <h1><?php $this->title() ?></h1>
                <time class="time" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y.m.d H:i'); ?></time>
        </header>
        <article id="post_content">
                <?php $this->content(); ?>
        </article>
        <footer id="post_footer">
                <span class="icon icon_tag" title="标签"></span>
                <span class="label">
                    <?php $this->tags('</span> <span class="label">', true, '无标签'); ?>
                </span>
        </footer>
    </div>
	<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
