        </div>

<footer id="footer">

<div id="footer_box">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowfooterLinks', $this->options->sidebarBlock)): ?>
    <div id="linkcat">
            <?php Links_Plugin::output($pattern='<a href="{url}" title="{title}" target="_blank">{name}</a>', $links_num=0, $sort=NULL); ?>
    </div>
    <?php endif; ?>
</div>

   <p> &copy; 2012-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>.
    <?php _e('Design by <a href="http://prower.cn" target="_blank">prower</a>'); ?>.
    <?php _e('Alter by <a href="http://vimarch.com" target="_blank">maucat</a>'); ?>.
    </p>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
