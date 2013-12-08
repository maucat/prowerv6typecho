<?php $this->need('header.php'); ?>
<div id="main">
    <div class= "post">
    <span class="icon icon_aside" title="文章"></span>
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
