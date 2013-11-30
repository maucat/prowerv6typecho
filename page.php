<?php $this->need('header.php'); ?>

	<div class="page">
		<span class="icon icon_aside" title="关于"></span>
		<header id="post_header">
			<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
		</header>
		<article id="post_content">
    		    <?php $this->content(); ?>
		</article>
	</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
