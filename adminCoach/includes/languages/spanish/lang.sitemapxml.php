<?php
/**
 * Sitemap XML Feed
 *
 * @package Sitemap XML Feed
 * @copyright Copyright 2005-2016 Andrew Berezin eCommerce-Service.com
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @link http://www.sitemaps.org/
 * @version $Id: sitemapxml.php, v 3.8 07.07.2016 12:39:33 AndrewBerezin $
 */
global $current_page;   //- Needed for zc158 since language files are now loaded by a class

$define = [
    'HEADING_TITLE' => 'XML站点地图',  
    'TEXT_SITEMAPXML_TIPS_HEAD' => '提示',  
    'TEXT_SITEMAPXML_TIPS_TEXT' => '<p>要了解如何管理此软件的站点地图的更多信息，请<a href="' . zen_href_link($current_page, zen_get_all_get_params()) . '">重新加载</a>此页面。</p>',  
    'TEXT_SITEMAPXML_INSTRUCTIONS_HEAD' => '创建/更新您的站点地图',  
    'TEXT_SITEMAPXML_CHOOSE_PARAMETERS_REBUILD' => '重建所有sitemap*.xml文件！',  
      
    'ERROR_SITEMAPXML_TOKEN_INVALID_HDR' => '无法创建站点地图',  
    'ERROR_SITEMAPXML_TOKEN_INVALID_MESSAGE' => '您提供的执行令牌(%1$s)包含无效字符。',  
      
    'TEXT_SITEMAPXML_ROBOTS_HDR' => '你的网站的 <code>robots.txt</code> 文件',
    'SUCCESS_SITEMAPXML_ROBOTS_TXT_OK' => '你的网站 <code>robots.txt</code> 正在向搜索引擎展示 <code>%1$s</code> Sitemap XML!',
    'WARNING_SITEMAPXML_NO_ROBOTS_FILE' => '你的网站没有 <code>robots.txt</code> 文件! 搜索引擎将无法找到你的sitemap文件.',
    'WARNING_SITEMAPXML_NO_ROBOTS_TEXT' => '你的网站 <code>robots.txt</code> 这个文件并没有向搜索引擎指定sitemap所在的路径。建议你添加你的站点地图到robots.txt文件中，格式为：<code>Sitemap: %1$s</code>。',

    'TEXT_SITEMAPXML_PLUGINS_LIST' => '站点地图插件',
    'TEXT_SITEMAPXML_PLUGINS_LIST_SELECT' => '选择要生成的站点地图',  
      
    'TEXT_SITEMAPXML_FILE_LIST' => '站点地图文件列表',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FNAME' => '名称',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FSIZE' => '大小',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FTIME' => '最后修改时间',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FPERMS' => '权限',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_TYPE' => '类型',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_ITEMS' => '项目',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_COMMENTS' => '备注',  
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_ACTION' => '操作',  
      
    'TEXT_SITEMAPXML_IMAGE_POPUP_ALT' => '在新窗口中打开站点地图',
    'TEXT_SITEMAPXML_RELOAD_WINDOW' => '刷新文件列表',  
  
    'TEXT_SITEMAPXML_FILE_LIST_COMMENTS_READONLY' => '只读！！！',  
    'TEXT_SITEMAPXML_FILE_LIST_COMMENTS_IGNORED' => '已忽略',  
      
    'TEXT_SITEMAPXML_FILE_LIST_TYPE_URLSET' => 'Url集',  
    'TEXT_SITEMAPXML_FILE_LIST_TYPE_SITEMAPINDEX' => '站点地图索引',  
    'TEXT_SITEMAPXML_FILE_LIST_TYPE_UNDEFINED' => '未定义！！！',  
      
    'TEXT_ACTION_VIEW_FILE' => '查看',  
    'TEXT_ACTION_TRUNCATE_FILE' => '截断',  
    'TEXT_ACTION_TRUNCATE_FILE_CONFIRM' => '您真的要截断文件 %s 吗？',  
    'TEXT_ACTION_DELETE_FILE' => '删除',  
    'TEXT_ACTION_DELETE_FILE_CONFIRM' => '您真的要删除文件 %s 吗？',  
      
    'TEXT_MESSAGE_FILE_ERROR_OPENED' => '打开文件 %s 时出错',  
    'TEXT_MESSAGE_FILE_TRUNCATED' => '文件 %s 已截断',  
    'TEXT_MESSAGE_FILE_DELETED' => '文件 %s 已删除',  
    'TEXT_MESSAGE_FILE_ERROR_DELETED' => '删除文件 %s 时出错',
];

if (defined('SITEMAPXML_SITEMAPINDEX')) {
    $sitemapindex_http_link = HTTP_CATALOG_SERVER . DIR_WS_CATALOG . SITEMAPXML_SITEMAPINDEX . '.xml';
    $define['SITEMAPXML_SITEMAPINDEX_HTTP_LINK'] = $sitemapindex_http_link;
    $define['TEXT_SITEMAPXML_TIPS_TEXT'] =  
    '<p>您可以在<strong><a href="https://sitemaps.org/" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Sitemaps.org]</a></strong>上阅读有关站点地图的所有相关信息。</p>  
    <p>一旦您的站点地图生成后，您需要确保它们被搜索引擎注意到：</p>  
    <ol>  
        <li>注册或登录到您的账户：<strong><a href="https://www.google.com/webmasters/tools/home" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Google]</a></strong> 或 <strong><a href="https://ssl.bing.com/webmaster" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Bing]</a></strong>。</li>  
        <li>通过搜索引擎的提交界面<strong><a href="https://www.google.com/webmasters/tools/home" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Google]</a></strong>.</li>  
        <li>在您的<a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'robots.txt' . '" target="_blank" class="splitPageLink">robots.txt</a>文件中指定站点地图的位置（<a href="https://sitemaps.org/protocol.php#submit_robots" target="_blank" rel="noopener noreferrer" class="splitPageLink">more...</a>）: <code>Sitemap: ' . $sitemapindex_http_link . '</code></li>  
    </ol>'.'  
    <p>为了<em>自动</em>更新站点地图，您需要通过您的主机控制面板设置 Cron 任务。</p>  
    <p>要在 cron 任务中运行生成（例如，在早上5点），您需要创建与以下示例类似的内容。</p>  
    <samp>0 5 * * * GET \'https://您的域名/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\'</samp><br>  
    <samp>0 5 * * * wget -q \'https://您的域名/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\' -O /dev/null</samp><br>  
    <samp>0 5 * * * curl -s \'https://您的域名/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\'</samp><br>  
    <samp>0 5 * * * php -f &lt;商店路径&gt;/cgi-bin/sitemapxml.php rebuild=yes%2$s</samp><br>';
}
return $define;
