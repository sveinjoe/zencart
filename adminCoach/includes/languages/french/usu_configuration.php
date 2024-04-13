<?php
/**
 * Part of Ultimate URLs for Zen Cart, v3.1.0+.
 *
 * Note: For versions prior to v3.0.0, these language values were present in /admin/includes/languages/english/modules/plugin/usu.php.
 *
 * @copyright Copyright 2019, 2023  Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */
// -----
// These _TITLE/_DESCRIPTION values are recorded in the database for an initial installation of the USU plugin.
//
define('USU_ENABLED_TITLE', '启用备用 URL？');  
define('USU_ENABLED_DESCRIPTION', '这是一个全局设置，可以启用（<b>true</b>）或禁用（<b>false</b>）备用 URL 的生成。');  
  
define('USU_DEBUG_TITLE', '启用调试日志？yyyymmmdd-hhmmss.log</code>）。<br><br>启用调试可能会导致创建大量的日志文件，并可能对服务器性能产生不利影响。仅在绝对必要时启用此选项！');  
  
define('USU_CPATH_TITLE', '生成 cPath 参数');  
define('USU_CPATH_DESCRIPTION', 'Zen Cart 默认会为产品页面生成 cPath 参数。这些参数用于保持链接的产品处于正确的分类中。在自动模式下，只有在需要时才会添加 cPath。');  
  
define('USU_END_TITLE', '备用 URL 以何结尾');  
define('USU_END_DESCRIPTION', '如果您希望您的 URL 以某个特定后缀结尾，请在此处添加。常见的后缀有 \'.html\', \'.htm\'。将此字段留空则不会在生成的 URL 中添加后缀。');  
  
define('USU_FORMAT_TITLE', '备用 URL 的格式');  
define('USU_FORMAT_DESCRIPTION', '您可以从常见生成格式列表中选择。<br><br><b>原始：</b><ul><li><i>分类：</i> category-name-c-34</li><li><i>产品：</i> product-name-p-54</li></ul><b>分类父级：</b><ul><li><i>分类：</i> parent-category-name-c-34</li><li><i>产品：</i> parent-product-name-p-54</li></ul>');  
  
define('USU_CATEGORY_DIR_TITLE', '将分类显示为目录');  
define('USU_CATEGORY_DIR_DESCRIPTION', '您可以从常见生成格式列表中选择。<br><b>关闭：</b> 禁用将分类显示为目录<br><br><b>简短：</b> 使用“备用 URL 的格式”中的设置<br><br><b>完整：</b> 使用完整的分类路径<br><br>');  
  
define('USU_REMOVE_CHARS_TITLE', '移除有问题的字符');
define('USU_REMOVE_CHARS_DESCRIPTION', '这允许您从生成的URL中移除某些有问题的字符。<br><br><i>非字母数字：</i> 移除所有非字母数字字符<br><i>标点符号：</i> 移除所有标点符号');  
  
define('USU_FILTER_PCRE_TITLE', '输入PCRE过滤规则');  
define('USU_FILTER_PCRE_DESCRIPTION', '此设置使用PCRE规则来过滤URL。<br><br>在字符转换和移除特殊字符之前执行此过滤器。如果您想在URL中使用短横线 -，请使用单个空格。在正则表达式中，要转义一个字符，请使用 \\\\ 而不是单个 \\。<br><br>格式<b>必须</b>为：<b>find1=>replace1,find2=>replace2</b>。');  
  
define('USU_FILTER_SHORT_WORDS_TITLE', '过滤短词');  
define('USU_FILTER_SHORT_WORDS_DESCRIPTION', '此设置将过滤“短”词，即长度小于或等于指定值的词，从任何生成的URL中。使用值<b>0</b>以包含<em>所有</em>词。');  
  
define('USU_FILTER_PAGES_TITLE', '将备用URL限制为以下页面');  
define('USU_FILTER_PAGES_DESCRIPTION', '您可以在这里指定哪些页面将被重写，从而限制要重写的页面。如果没有指定页面，则所有页面都将被重写。<br><br>格式是逗号分隔的列表（中间有空格也可以），并且<b>必须</b>为：<b>page1,page2,page3</b> 或 <b>page1, page2, page3</b>');  
  
define('USU_ENGINE_TITLE', '选择URL引擎');  
define('USU_ENGINE_DESCRIPTION', '选择要使用的URL引擎。');  
  
define('USU_REDIRECT_TITLE', '启用自动重定向？');  
define('USU_REDIRECT_DESCRIPTION', '这将激活自动重定向代码，并为旧URL到新URL发送301头信息。');  
  
define('USU_VERSION_TITLE', '插件版本');  
define('USU_VERSION_DESCRIPTION', '当前安装的<em>USU</em>插件版本。');
