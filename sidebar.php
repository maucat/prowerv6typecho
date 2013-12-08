<aside id="sidebar">

    <?php if ($this->options->aboutText): ?>
    <section class="widget">
        <h3><?php _e('关于我'); ?></h3>
        <?php $this->options->aboutText() ?>
    </section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if ($this->options->weiboShow): ?>
    <section class="widget">
        <h3><?php _e('微博'); ?></h3>
        <?php $this->options->weiboShow() ?>
    </section>
    <?php endif; ?>

    <?php if ($this->is('post')): ?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRelatedPosts', $this->options->sidebarBlock)): ?>
        <section class="widget">
            <h3><?php _e('相关文章'); ?></h3>
            <?php $this->related(5)->to($relatedPosts); ?>
            <ul>
            <?php while ($relatedPosts->next()): ?>
                <li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </section>
        <hr class="solid" />
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><?php $comments->author(false); ?>：<a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(35, '...'); ?></a></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?>
    <section class="widget">
    		<h3 class="widget-title"><?php _e('标签云'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=20')->to($tags); ?>
            <?php if($tags->have()): ?>
            <?php while($tags->next()): ?>
            <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>, <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink(); ?>" class="size-<?php $tags->split(5, 10, 20, 30); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
        </ul>
	</section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowLinks', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('友情链接'); ?></h3>
        <ul>
            <?php Links_Plugin::output("SHOW_TEXT", 5); ?>
        </ul>
    </section>
    <hr class="solid" />
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
	</section>
    <hr class="solid" />
    <?php endif; ?>
</aside>
