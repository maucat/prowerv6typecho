<?php $this->need('header.php'); ?>

    <div id="main">
        <div class="mini_nav"><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('搜索：<strong> %s </strong>'),
            'tag'       =>  _t('标签：<strong> %s </strong>'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></div>
        <?php if ($this->have()): ?>
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
        	<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        	<time class="time" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y.m.d'); ?></time>
                    <div class="post-content">
            			<?php $this->content('阅读详细 &raquo;'); ?>
                    </div>
                <hr class="dashed" />
                </section>
            <?php endwhile; ?>
            </article>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

         <nav class="navigation">
         	<span class="icon icon_page" title="分页"></span>
             <?php $this->pageNav('&laquo;', '&raquo;'); ?>
         </nav>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
