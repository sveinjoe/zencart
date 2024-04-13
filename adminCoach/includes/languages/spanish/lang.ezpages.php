<?php
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Nov 13 Modified in v1.5.8a $
*/

$define = [
    'HEADING_TITLE' => 'EZ-页面',  
    'TABLE_HEADING_PAGES' => '页面标题',  
    'TABLE_HEADING_VSORT_ORDER' => '侧边栏排序',  
    'TABLE_HEADING_HSORT_ORDER' => '页脚排序',  
    'TEXT_PAGES_TITLE' => '页面标题：',  
    'TEXT_PAGES_HTML_TEXT' => 'HTML内容：',  
    'TEXT_PAGES_STATUS_CHANGE' => '状态更改：%s',  
    'TEXT_INFO_DELETE_INTRO' => '您确定要删除这个页面吗？',  
    'SUCCESS_PAGE_INSERTED' => '成功：页面已插入。',  
    'SUCCESS_PAGE_UPDATED' => '成功：页面已更新。',  
    'SUCCESS_PAGE_REMOVED' => '成功：页面已删除。',  
    'SUCCESS_PAGE_STATUS_UPDATED' => '成功：页面的状态已更新。',  
    'ERROR_PAGE_TITLE_REQUIRED' => '错误：需要页面标题。',  
    'ERROR_UNKNOWN_STATUS_FLAG' => '错误：未知的状态标志。',  
    'ERROR_MULTIPLE_HTML_URL' => '错误：您已定义了多个设置，但每个链接只能定义一个设置...<br>请只定义：HTML内容 -或- 内部链接地址 -或- 外部链接地址',  
    'TABLE_HEADING_STATUS_HEADER' => '头部：',  
    'TABLE_HEADING_STATUS_SIDEBOX' => '侧边栏：',  
    'TABLE_HEADING_STATUS_FOOTER' => '页脚：',  
    'TABLE_HEADING_STATUS_TOC' => '目录：',  
    'TABLE_HEADING_CHAPTER' => '章节：',  
    'TABLE_HEADING_VISIBLE' => '可见：',  
    'TABLE_HEADING_PAGE_OPEN_NEW_WINDOW' => '在新窗口中打开：',  
    'TABLE_HEADING_PAGE_IS_SSL' => '页面是SSL：',  
    'TABLE_HEADING_PAGE_IS_VISIBLE' => '页面可见：',  
    'TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION' => ' 即使在头部、页脚或侧边栏中未显示，页面也会显示<br>  
    (如果Visible、Header、Footer和Sidebox的所有设置都关闭，则尝试查看页面的访问者将收到“页面未找到”的响应。)',  
    'TEXT_DISPLAY_NUMBER_OF_PAGES' => '显示 <b>%d</b> 到 <b>%d</b> （共 <b>%d</b> 页）',  
    'IMAGE_NEW_PAGE' => '新建页面',  
    'TEXT_INFO_PAGES_ID' => 'ID：',
    'TEXT_INFO_PAGES_ID_SELECT' => '选择一个页面...',  
    'TEXT_HEADER_SORT_ORDER' => '排序：',  
    'TEXT_SIDEBOX_SORT_ORDER' => '排序：',  
    'TEXT_FOOTER_SORT_ORDER' => '排序：',  
    'TEXT_TOC_SORT_ORDER' => '排序：',  
    'TEXT_CHAPTER' => '上一/下一章：',  
    'TABLE_HEADING_CHAPTER_PREV_NEXT' => '章节：&nbsp;<br>',  
    'TEXT_HEADER_SORT_ORDER_EXPLAIN' => '在生成单行的头部页面时使用的头部排序顺序；排序顺序应大于零，以在行类型列表中启用此页面',  
    'TEXT_SIDEBOX_ORDER_EXPLAIN' => '当页面以垂直链接列出时使用的侧边栏排序顺序；排序顺序应大于零，以在垂直列表中启用它，否则它将被视为特殊用途的HTML文本',  
    'TEXT_FOOTER_ORDER_EXPLAIN' => '在生成单行页脚页面时使用的页脚排序顺序；排序顺序应大于零，以在行类型列表中启用此页面',  
    'TEXT_TOC_SORT_ORDER_EXPLAIN' => '在生成页面时使用的目录（目录）排序顺序，这些页面根据个别需求定制为单行（头部/页脚等）或垂直；排序顺序应大于零，以在列表中启用此页面',  
    'TEXT_CHAPTER_EXPLAIN' => '章节与目录（目录）排序顺序一起使用，用于在上一个/下一个显示。目录中的链接将包含与此章节号匹配的页面，并将按目录排序顺序显示',  
    'TEXT_ALT_URL' => '内部链接URL：',  
    'TEXT_ALT_URL_EXPLAIN' => '如果已指定，则将忽略页面内容，并使用此内部替代URL来创建链接<br>示例到评论：index.php?main_page=reviews<br>示例到我的帐户：index.php?main_page=account 并标记为SSL',  
    'TEXT_ALT_URL_EXTERNAL' => '外部链接URL：',
    'TEXT_ALT_URL_EXTERNAL_EXPLAIN' => '如果已指定，页面内容将被忽略，将使用此 EXTERNAL 备用 URL 来创建链接<br>外部链接示例：http://www.sashbox.net',  
    'TEXT_SORT_CHAPTER_TOC_TITLE_INFO' => '显示顺序：',  
    'TEXT_SORT_CHAPTER_TOC_TITLE' => '章节/目录',  
    'TEXT_SORT_HEADER_TITLE' => '页眉',  
    'TEXT_SORT_SIDEBOX_TITLE' => '侧边栏',  
    'TEXT_SORT_FOOTER_TITLE' => '页脚',  
    'TEXT_SORT_PAGE_TITLE' => '页面标题',  
    'TEXT_SORT_PAGE_ID_TITLE' => '页面 ID, 标题',  
    'TEXT_PAGE_TITLE' => '标题：',  
    'TEXT_WARNING_MULTIPLE_SETTINGS' => '警告：多个链接定义',
];

return $define;
