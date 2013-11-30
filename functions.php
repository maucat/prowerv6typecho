<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    $weiboShow = 
      new Typecho_Widget_Helper_Form_Element_Textarea(
        'weiboShow', NULL, NULL, _t('微博秀'), 
        _t('将从新浪<a href="http://weibo.com/tool/weiboshow" target="_blank">微博秀小工具</a>获取的代码填在这里, 即可显示微博秀. (也可填入其他微博的代码)'));
    $form->addInput($weiboShow);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
