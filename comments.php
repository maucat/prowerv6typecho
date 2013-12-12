<div id="comments">
    <span class="icon icon_comment" title="评论"></span>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php if (($this->options->commentsPageBreak)): ?>
    <nav class="navigation">
	<span class="icon icon_page" title="分页"></span>
        <?php $comments->pageNav('&laquo;', '&raquo;'); ?>
    </nav>
    <?php endif; ?>
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
    
    	<h3 id="response"><?php _e('发表评论'); ?> <small><?php $comments->cancelReply(); ?></small></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="comment-form-author">
                <label for="author" class="required"><?php _e('昵称'); ?>*</label>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" />
    		</p>
    		<p class="comment-form-email">
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('电子邮件'); ?>*</label>
    			<input type="email" name="mail" id="email" class="text" value="<?php $this->remember('mail'); ?>" />
    		</p>
    		<p class="comment-form-url">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://example.com'); ?>" value="<?php $this->remember('url'); ?>" />
    		</p>
            <?php endif; ?>
    		<p class="comment-form-comment">
                <!-- <label for="textarea" class="required"><?php _e('内容'); ?></label> -->
                <textarea id="comment" rows="8" cols="45" name="text" class="textarea"><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <input id="submit" type="submit" name="submit" class="submit" value="<?php _e('提交评论'); ?>" />
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
