<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />
    <link rel="shortcut icon" href="<?php $this->options->siteUrl('favicon.ico'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<header id="header">
	<div id="header_box">
		<hgroup>
                    <?php if ($this->options->logoUrl): ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                        </a>
                    <?php endif; ?>
                    
			<h1 id="wordlogo"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
			<h2><?php $this->options->description() ?></h2>
		</hgroup>
		<div id="toolbar">
			<div id="rss"><a href="<?php $this->options->feedUrl(); ?>" title="RSS Feed">RSS</a></div>
                <form id="searchform" method="post" action="./">
                    <input type="text" name="s" id="s" size="30" placeholder="<?php _e('Search'); ?>" autocomplete="off" required />
                    <button type="submit"><?php _e('搜索'); ?></button>
                </form>
		</div>
	</div>
</header>
<nav id="menu">
                    <div class="nav">
                    <ul>
                        <li<?php if($this->is('index')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                        <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                        <?php while($categorys->next()): ?>
                        <li<?php if($this->is('category', $categorys->slug)): ?> class="active"<?php endif; ?>><a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?></a></li>
                        <?php endwhile; ?>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <li<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div><!--/.nav -->
</nav>
<div id="content">
