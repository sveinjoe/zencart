<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 May 05 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '横幅管理器',  
    'TABLE_HEADING_BANNERS' => '横幅',  
    'TABLE_HEADING_GROUPS' => '分组',  
    'TABLE_HEADING_STATISTICS' => '显示次数 / 点击次数',  
    'TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS' => '新窗口',  
    'TABLE_HEADING_BANNER_ON_SSL' => '在SSL上显示',  
    'TABLE_HEADING_BANNER_SORT_ORDER' => '排序<br>顺序',  
    'TEXT_BANNERS_TITLE' => '横幅标题：',  
    'TEXT_BANNERS_URL' => '横幅URL：',  
    'TEXT_BANNERS_GROUP' => '横幅分组：',  
    'TEXT_BANNERS_NEW_GROUP' => '，或在下方输入新的横幅分组',  
    'TEXT_BANNERS_IMAGE' => '图片：',  
    'TEXT_BANNERS_IMAGE_LOCAL' => '，或在下方输入本地文件',  
    'TEXT_BANNERS_IMAGE_TARGET' => '图片目标位置（保存至）：',  
    'TEXT_BANNER_IMAGE_TARGET_INFO' => '<strong>服务器上图片建议的目标位置：</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/',  
    'TEXT_BANNERS_HTML_TEXT_INFO' => '<strong>注意：HTML横幅不会记录横幅的点击次数</strong>',  
    'TEXT_BANNERS_HTML_TEXT' => 'HTML文本：',  
    'TEXT_BANNERS_ALL_SORT_ORDER' => '排序顺序 - banner_box_all',  
    'TEXT_BANNERS_ALL_SORT_ORDER_INFO' => '<strong>注意：banners_box_all侧边栏将按照定义的排序顺序显示横幅</strong>',  
    'TEXT_BANNERS_EXPIRES_ON' => '过期时间：<br>(必须晚于今天)',  
    'TEXT_BANNERS_OR_AT' => '，或在',  
    'TEXT_BANNERS_IMPRESSIONS' => '展示次数/浏览次数。',  
    'TEXT_BANNERS_SCHEDULED_AT' => '计划时间：<br>(必须晚于今天)',  
    'TEXT_BANNERS_BANNER_NOTE' => '<b>横幅注意事项：</b><ul><li>使用图片或HTML文本作为横幅 - 不可同时使用两者。</li><li>HTML文本优先级高于图片</li><li>HTML文本不会记录点击次数，但会记录展示次数</li><li>具有绝对图片URL的横幅不应显示在安全页面上</li></ul>',
    'TEXT_BANNERS_INSERT_NOTE' => '<b>图片说明:</b><ul><li>上传目录必须设置正确的用户（写入）权限！</li><li>如果您不是将图片上传到 web 服务器（即，您使用的是本地（服务器端）图片），请不要填写\'保存到\'字段。</li><li>\'保存到\'字段必须是一个存在的目录，并以斜杠结尾（例如，banners/）。</li></ul>',  
    'TEXT_BANNERS_EXPIRY_NOTE' => '<b>过期说明:</b><ul><li>两个字段中只能提交一个</li><li>如果横幅不自动过期，则留空这些字段</li></ul>',  
    'TEXT_BANNERS_SCHEDULE_NOTE' => '<b>计划说明:</b><ul><li>如果设置了计划，横幅将在该日期激活。</li><li>所有计划中的横幅在日期到来之前都将标记为不活跃，到达日期后将标记为活跃。</li></ul>',  
    'TEXT_BANNERS_STATUS' => '横幅状态:',  
    'TEXT_BANNERS_ACTIVE' => '活跃',  
    'TEXT_BANNERS_NOT_ACTIVE' => '不活跃',  
    'TEXT_INFO_BANNER_STATUS' => '<strong>注意:</strong> 横幅状态将根据计划日期和展示次数进行更新',  
    'TEXT_BANNERS_OPEN_NEW_WINDOWS' => '横幅在新窗口中打开',  
    'TEXT_INFO_BANNER_OPEN_NEW_WINDOWS' => '<strong>注意:</strong> 横幅将在新窗口中打开',  
    'TEXT_BANNERS_ON_SSL' => 'SSL 上的横幅',  
    'TEXT_INFO_BANNER_ON_SSL' => '<strong>注意:</strong> 横幅可以在安全页面上显示，不会出错',  
    'TEXT_BANNERS_DATE_ADDED' => '添加日期:',  
    'TEXT_BANNERS_SCHEDULED_AT_DATE' => '计划于: <b>%s</b>',  
    'TEXT_BANNERS_EXPIRES_AT_DATE' => '过期于: <b>%s</b>',  
    'TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS' => '过期于: <b>%s</b> 次展示',  
    'TEXT_BANNERS_STATUS_CHANGE' => '状态变更: %s',  
    'TEXT_BANNERS_LAST_3_DAYS' => '最近3天',  
    'TEXT_INFO_DELETE_INTRO' => '您确定要删除这个横幅吗？',  
    'TEXT_INFO_DELETE_IMAGE' => '删除横幅图片',
    'SUCCESS_BANNER_INSERTED' => '成功：横幅已插入。',  
    'SUCCESS_BANNER_UPDATED' => '成功：横幅已更新。',  
    'SUCCESS_BANNER_REMOVED' => '成功：横幅已删除。',  
    'SUCCESS_BANNER_STATUS_UPDATED' => '成功：横幅的状态已更新。',  
    'ERROR_BANNER_TITLE_REQUIRED' => '错误：需要横幅标题。',  
    'ERROR_BANNER_GROUP_REQUIRED' => '错误：需要横幅组。',  
    'ERROR_IMAGE_DOES_NOT_EXIST' => '错误：图片不存在。',  
    'ERROR_IMAGE_IS_NOT_WRITEABLE' => '错误：无法删除图片。',  
    'ERROR_UNKNOWN_STATUS_FLAG' => '错误：未知的状态标志。',  
    'ERROR_BANNER_IMAGE_REQUIRED' => '错误：需要横幅图片。',  
    'ERROR_UNKNOWN_BANNER_OPEN_NEW_WINDOW' => '错误：无法将横幅设置为在新窗口中打开',  
    'ERROR_UNKNOWN_BANNER_ON_SSL' => '错误：无法将横幅设置为使用 SSL',  
    'TEXT_LEGEND_BANNER_ON_SSL' => '显示 SSL',  
    'TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS' => '新窗口',  
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON' => '在新窗口中打开 - 已启用',  
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF' => '在新窗口中打开 - 已禁用',  
    'IMAGE_ICON_BANNER_ON_SSL_ON' => '在安全页面上显示 - 已启用',  
    'IMAGE_ICON_BANNER_ON_SSL_OFF' => '在安全页面上显示 - 已禁用',  
    'SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED' => '成功：横幅在新窗口中打开的状态已更新。',  
    'SUCCESS_BANNER_ON_SSL_UPDATED' => '成功：横幅在 SSL 上显示的状态已更新。'
];

return $define;
