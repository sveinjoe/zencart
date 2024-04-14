<?php
// $Id: easypopulate_4.php, v4.0.37.7.ZC 06-30-2019 mc12345678 $

// $display_output defines

// file uploads display - output via $display_output
define('EASYPOPULATE_4_DISPLAY_SPLIT_LOCATION','您还可以从您的 %s 目录中下载您的分割文件<br />');  
define('EASYPOPULATE_4_DISPLAY_HEADING','<br /><h3><u>导入结果</u></h3><br />');  
define('EASYPOPULATE_4_DISPLAY_UPLOADED_FILE_SPEC','<p class=smallText>文件已上传。<br />临时文件名: %s<br /><b>用户文件名: %s</b><br />大小: %s<br />'); // 开始段落  
define('EASYPOPULATE_4_DISPLAY_UPLOADED_FILE_TOO_LARGE', '<br /><b>上传的文件过大（%1$d 字节）并超过了最大文件上传大小限制 %2$d 字节。如有必要，请分割文件、增加大小限制或检查设置。</b>');  
define('EASYPOPULATE_4_DISPLAY_LOCAL_FILE_SPEC','<p class=smallText><b>文件名: %s</b><br />'); // 开始段落  
  
// 上传结果展示 - 通过 $display_output 输出  
define('EASYPOPULATE_4_DISPLAY_RESULT_DELETED','<br /><font color="fuchsia"><b>已删除！- %2$s：</b> %1$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_DELETE_NOT_FOUND','<br /><font color="darkviolet"><b>未找到！- %2$s：</b> %1$s - 无法删除...</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_NOT_FOUND', '<br /><font color="red"><b>已跳过！- %3$s：</b> %1$s - 未为此%2$s产品提供分类</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_ID_NOT_FOUND', '<br /><font color="red"><b>已跳过！- 分类 ID：</b>%1$s - 未找到！</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_NAME_LONG','<br /><font color="red"><b>已跳过！- %4$s：</b> %1$s - 分类名称："%2$s" 超过最大长度：%3$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_EXPORT_NO_OPTION_VALUE', '无选项值（文件、文本）');  
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_URL_LONG','<br /><font color="red"><b>警告！- %4$s：</b> %1$s - URL: "%2$s" 超过最大长度：%3$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_MANUFACTURER_NAME_LONG','<br /><font color="red"><b>制造商已跳过！- 制造商：</b> %1$s - 制造商名称超过最大长度：%2$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_MODEL_LONG','<br /><font color="red"><b>已跳过！- %3$s：</b> %1$s - 产品型号超过最大长度：%2$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_NAME_LONG','<br /><font color="red"><b>警告！- %4$s：</b> %1$s - 产品名称：“%2$s”超过最大长度：%3$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_NEW_PRODUCT', '<br /><font color="green"><b>新产品！- %2$s：</b> %1$s</font> | ');  
define('EASYPOPULATE_4_DISPLAY_RESULT_NEW_PRODUCT_FAIL', '<br /><font color="red"><b>添加新产品失败！- %2$s：</b> %1$s - SQL错误。请检查上传目录下的Easy Populate错误日志</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_UPDATE_PRODUCT', '<br /><font color="mediumblue"><b>已更新！- %2$s：</b> %1$s</font> | ');  
define('EASYPOPULATE_4_DISPLAY_RESULT_NO_CATEGORY_UPDATE', '<br /><font color="blue"><b>无需更新！- %1$s：</b> 不包含支持更新的信息。已移至下一条记录。</font> | ');  
define('EASYPOPULATE_4_DISPLAY_RESULT_UPDATE_PRODUCT_FAIL', '<br /><font color="red"><b>更新产品失败！- %2$s：</b> %1$s - SQL错误。请检查上传目录下的Easy Populate错误日志</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_NO_MODEL', '<br /><font color="red"><b>记录中没有%1$s字段数据。此行未导入</b></font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_IMPORT', '文件导入到数据库或查看下方更多信息。');  
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_COMPLETE','<br /><b>文件上传成功</b>：%1$s %2$s');  
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_EMPTY','<br /><b>已点击上传按钮，但未选择任何文件。请点击“浏览...”以选择要上传的文件。</b>');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_NO_CSV', '文件不是CSV文件。请查看下方选项。');  
define('EASYPOPULATE_4_DISPLAY_RESULT_ARTISTS_NAME_EMPTY', '<br /><font color="red"><b>已跳过！- 艺术家名称：</b> %1$s - 使用主键：%2$s时未提供</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_ARTISTS_NAME_LONG','<br /><font color="red"><b>已跳过！- 艺术家名称：</b> %1$s - 超过最大长度：%2$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_RECORD_COMPANY_NAME_EMPTY', '<br /><font color="red"><b>已跳过！- 唱片公司名称：</b> %1$s - 使用主键：%2$s时未提供</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_RECORD_COMPANY_NAME_LONG','<br /><font color="red"><b>已跳过！- 唱片公司名称：</b> %1$s - 超过最大长度：%2$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_MUSIC_GENRE_NAME_EMPTY', '<br /><font color="red"><b>已跳过！- 音乐流派名称：</b> %1$s - 使用主键：%2$s时未提供</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_MUSIC_GENRE_NAME_LONG','<br /><font color="red"><b>已跳过！- 音乐流派名称：</b> %1$s - 超过最大长度：%2$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_SBA_DETAIL_NOT_FOUND','<br /><font color="red"><b>已跳过！- %2$s上的属性条目：</b>%1$s - 未找到！</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NEW','<br /><font color="green"><b>新属性！- %1$s：</b> %2$s, <b>选项：</b> %3$s, <b>值：</b> %4$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_UPDATE','<br /><font color="blue"><b>已更新属性！- %1$s：</b> %2$s <b>选项：</b> %3$s, <b>值：</b> %4$s</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_SKIPPED', '<br /><font color="red"><b>已跳过！- 主键：%1$s：</b>%2$s - 未找到！无法应用属性。</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NO_PRIMARY_KEY', '<br /><font color="red"><b>已跳过！- 主键：%1$s：</b> - 文件中未找到！无法导入属性。</font>');  
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NEW_PRODUCT_OPTION_NO_PRODUCTS_OPTIONS_TYPE', '<br /><font color="blue"><b>警告！- 主键：%1$s：</b>%2$S - 文件没有v_products_attributes_type字段。使用默认值%3$d。</font>');  
  
// $messageStack 定义  
// 检查 - 消息堆栈警告 - 通过$messageStack输出  
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_MISSING','<b>Easy Populate "上传文件夹"缺失！</b><br />您的上传文件夹不见了。您的配置显示上传文件夹名为<b>%1$s</b>，位于<b>%2$s</b>。<br>');  
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_NOT_WRITABLE','<b>Easy Populate "上传文件夹"不可写！</b><br />您的上传文件夹不可写。文件夹权限<b>%1$s</b>必须根据服务器设置设为"777"或"755"。<br>在继续之前，您必须更正文件夹权限。<br>');  
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_PERMISSIONS_SUCCESS','Easy Populate 成功调整了您的上传文件夹权限！您现在可以使用 Easy Populate 上传文件...');  
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_PERMISSIONS_SUCCESS_777','Easy Populate 成功调整了您的上传文件夹权限，但该文件夹现在可以被公开访问。请确保您在此目录中添加了index.html文件，以防止公开浏览/下载您的Easy Populate文件。');
define('EASYPOPULATE_4_MSGSTACK_MODELSIZE_DETECT_FAIL','Easy Populate无法确定您的产品表中products_model字段允许的最大尺寸。请确保您的模型数据字段长度不超过Zen Cart为每个产品设定的默认值32个字符。不遵循此警告可能会导致您的数据出现意外情况。');  
define('EASYPOPULATE_4_MSGSTACK_ERROR_SQL', '发生了SQL错误。请检查您的输入数据中是否有字段内的制表符并删除它们。如果此错误持续出现，请将您的错误日志转发给Easy Populate维护者');  
define('EASYPOPULATE_4_MSGSTACK_DROSS_DELETE_FAIL', '<b>产品数据残留删除失败！</b> 请在您的uploads目录中的debug日志中查看更多信息。');  
define('EASYPOPULATE_4_MSGSTACK_DROSS_DELETE_SUCCESS', '产品数据残留删除成功！');  
define('EASYPOPULATE_4_MSGSTACK_DROSS_DETECTED', '<b>检测到%1$s个部分删除的产品！</b> 请点击<a href="%2$s">此处</a>删除这些残留，以防止Zen Cart出现不希望有的行为。<br />您看到这条信息是因为表格中存在对不再存在的产品的引用，这通常是由于产品删除不完整导致的。这会在某些情况下导致Zen Cart行为异常。');  
define('EASYPOPULATE_4_MSGSTACK_DATE_FORMAT_FAIL', '%1$s不是有效的日期格式。如果您上传除原始格式（例如从Excel）以外的任何日期，将会导致日期混乱。请在Easy Populate配置中修复此问题，更正您的日期格式。');  
define('EASYPOPULATE_4_ORDERS_DROPDOWN_FIRST', '订单类型');  
define('EASYPOPULATE_4_ORDERS_FULL', '完整订单');  
define('EASYPOPULATE_4_ORDERS_NEWFULL', '新完整订单');  
define('EASYPOPULATE_4_ORDERS_NO_ATTRIBS', '无属性订单');  
define('EASYPOPULATE_4_ORDERS_ATTRIBS', '仅属性订单');  
define('EASYPOPULATE_4_ORDERS_DROPDOWN_TITLE', '<b>可筛选的订单导出：</b><br/>');

// install - msg stack alerts - output via $messageStack
define('EASYPOPULATE_4_MSGSTACK_INSTALL_DELETE_SUCCESS','冗余文件 <b>%1$s</b> 已从 <b>YOUR_ADMIN%2$s</b> 目录删除。');  
define('EASYPOPULATE_4_MSGSTACK_INSTALL_DELETE_FAIL','Easy Populate 无法从 <b>YOUR_ADMIN%2$s</b> 目录删除冗余文件 <b>%1$s</b>。请手动删除此文件。');  
define('EASYPOPULATE_4_MSGSTACK_INSTALL_CHMOD_FAIL','<b>请在修复您的上传目录问题后，再次运行 Easy Populate 安装。</b>');  
define('EASYPOPULATE_4_MSGSTACK_INSTALL_CHMOD_SUCCESS','<b>配置变量安装成功！</b>');  
define('EASYPOPULATE_4_MSGSTACK_INSTALL_KEYS_FAIL','<b>Easy Populate 配置缺失。</b>请点击 %1$s安装 EP4%2$s 安装您的配置。');  
  
// 文件处理 - 消息栈警告 - 通过 $messageStack 输出  
define('EASYPOPULATE_4_MSGSTACK_FILE_EXPORT_SUCCESS', '文件 <b>%1$s.csv</b> 成功导出！文件已准备好在您的 /%2$s 目录中下载。');

// $specials_print defines
// results of specials in $specials_print
define('EASYPOPULATE_4_SPECIALS_HEADING', '<b><u>特价汇总</u></b><p class=smallText>'); // 打开段落  
define('EASYPOPULATE_4_SPECIALS_PRICE_FAIL', '<font color="red"><b>跳过！ - %3$s：</b> %1$s | %2$s - 特价高于正常价格...</font><br />');  
define('EASYPOPULATE_4_SPECIALS_NEW', '<font color="green"><b>新上架！ - %5$s：</b> %1$s</font> | %2$s | %3$s | <font color="green"><b>%4$s</b></font> |<br />');  
define('EASYPOPULATE_4_SPECIALS_UPDATE', '<font color="mediumblue"><b>已更新！ - %5$s：</b> %1$s</font> | %2$s | %3$s | <font color="green"><b>%4$s</b></font> |<br />');  
define('EASYPOPULATE_4_SPECIALS_DELETE', '<font color="fuchsia"><b>已删除！ - %3$s：</b> %1$s</font> | %2$s |<br />');  
define('EASYPOPULATE_4_SPECIALS_DELETE_FAIL', '<font color="darkviolet"><b>未找到！ - %2$s：</b> %1$s - 无法删除特价...</font><br />');  
define('EASYPOPULATE_4_SPECIALS_FOOTER', '</p>'); // 关闭段落  
  
define('EP_DESC_PLURAL', '它们');  
define('EP_DESC_SING', '它');  
define('FEATURED_EP_DESC','前缀：%1$s。 %2$s 将通过特色过滤器进行处理。');  
define('PRICEQTY_EP_DESC','前缀：%1$s。 %2$s 将通过价格数量过滤器进行处理。');  
define('PRICEBREAKS_EP_DESC','前缀：%1$s。 %2$s 将通过价格分段过滤器进行处理。');  
define('CATEGORY_EP_DESC','前缀：%1$s。 %2$s 将通过类别过滤器进行处理。');  
define('CATEGORYMETA_EP_DESC','前缀：%1$s。 %2$s 将通过类别元数据过滤器进行处理。');  
define('ATTRIB_BASIC_EP','前缀：%1$s。 %2$s 将通过基本属性过滤器进行处理。');  
define('ATTRIB_DETAILED_EP_DESC','前缀：%1$s。 %2$s 将通过详细属性过滤器进行处理。');  
define('SBA_DETAILED_EP_DESC','前缀：%1$s。 %2$s 将通过详细库存按属性过滤器进行处理。');  
define('SBA_STOCK_EP_DESC','前缀：%1$s。 %2$s 将通过库存按属性库存修改过滤器进行处理。');

define('ORDERS_EP_DESC', '前缀：%1$s。%2$s 将不会被处理以进行导入。');  
define('CATCHALL_EP_DESC', '这包含任何其他文件。%2$s 将像完整数据文件一样被处理。');  
define('ORDERSEXPORT_LINK_SAVE1', 'ORDERSEXPORT_LINK_SAVE1'); // 未给出中文翻译，直接保留了原文  
define('ORDERSEXPORT_LINK_SAVE1B', 'ORDERSEXPORT_LINK_SAVE1B'); // 未给出中文翻译，直接保留了原文  
define('ORDERSEXPORT_LINK_SAVE2', 'ORDERSEXPORT_LINK_SAVE2'); // 未给出中文翻译，直接保留了原文  
define('ORDERSEXPORT_LINK_SAVE3', 'ORDERSEXPORT_LINK_SAVE3'); // 未给出中文翻译，直接保留了原文  
  
// 错误日志定义 - 用于 ep_debug_log.txt  
define('EASYPOPULATE_4_ERRORLOG_SQL_ERROR', 'MySQL 错误 %1$s: %2$s\n执行时：\n%3$s\n');  
  
define('EASYPOPULATE_4_REMOVE_SETTINGS', '卸载 EP4');  
define('EASYPOPULATE_4_CONFIG_SETTINGS', '配置设置');  
define('EASYPOPULATE_4_CONFIG_UPLOAD', '上传目录：');  
define('EASYPOPULATE_4_CONFIG_PRIMARY', '主键：');  
define('EASYPOPULATE_4_CONFIG_TEXT_IMPORT_OVERRIDE', '导入语言覆盖：');  
define('EASYPOPULATE_4_UPDATE_SETTINGS', '更新 EP4 数据库');  
define('EASYPOPULATE_4_DISPLAY_SPLIT_SHORT', '拆分记录：');  
define('EASYPOPULATE_4_DISPLAY_EXEC_TIME', '执行时间：');  
define('EASYPOPULATE_4_DISPLAY_ENABLE_META', '启用产品元标签：');  
define('EASYPOPULATE_4_DISPLAY_ENABLE_MUSIC', '启用产品音乐：');  
define('EASYPOPULATE_4_DISPLAY_CUSTOM_PRODUCT_FIELDS', '自定义产品字段');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_SHORT_DESC', '产品简短描述：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_UNIT_MEAS', '产品计量单位：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_UPC', '产品UPC码：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_GOOGLE_CAT', 'Google 产品类别：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_MSRP', '制造商建议零售价：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_MAP', '制造商广告价格：');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_GP', '按项目分组的定价：');

define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_EXCLUSIVE', '独家产品模块: ');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_SBA', '按属性库存模块: ');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_CEON', 'CEON URI 重写模块: ');  
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_DPM', '双重定价模块: ');  
define('EASYPOPULATE_4_DISPLAY_USER_DEF_FIELDS', '用户定义的产品字段: ');  
define('EASYPOPULATE_4_DISPLAY_INSTALLED_LANG', '已安装的语言');  
define('EASYPOPULATE_4_DISPLAY_INSTALLED_LANG_DEF', '默认语言: ');  
define('EASYPOPULATE_4_DISPLAY_INT_CHAR_ENC', '内部字符编码: ');  
define('EASYPOPULATE_4_DISPLAY_DB_COLL', '数据库校对: ');  
define('EASYPOPULATE_4_DISPLAY_DB_FLD_LGTH', '数据库字段长度');  
define('EASYPOPULATE_4_DISPLAY_TITLE_UPLOAD', '上传 EP 文件');  
define('EASYPOPULATE_4_DISPLAY_MAX_UP_SIZE', 'HTTP 最大上传文件大小: %1$d 字节 (%2$d M字节)');  
define('EASYPOPULATE_4_DISPLAY_UPLOAD_BUTTON_TEXT', '上传文件');  
define('EASYPOPULATE_4_DD_STATUS_DEFAULT', '状态（活跃）');  
define('EASYPOPULATE_4_DD_STATUS_ACTIVE', '活跃');  
define('EASYPOPULATE_4_DD_STATUS_INACTIVE', '不活跃');  
define('EASYPOPULATE_4_DD_STATUS_ALL', '全部');  
define('EASYPOPULATE_4_DD_DOWNLOAD_DEFAULT', '下载类型');  
define('EASYPOPULATE_4_DD_DOWNLOAD_COMPLETE', '完整产品');  
define('EASYPOPULATE_4_DD_DOWNLOAD_QUANTITY', '型号/价格/数量');  
define('EASYPOPULATE_4_DD_DOWNLOAD_BREAKS', '型号/价格/断点');  
define('EASYPOPULATE_4_DD_DOWNLOAD_COMPLETE_SINGLE', '无关联的完整产品');  
define('EASYPOPULATE_4_DD_FILTER_CATEGORIES', '分类');  
define('EASYPOPULATE_4_DD_FILTER_EXPORT', '导出');

define('EASYPOPULATE_4_ORDERS_DROPDOWN_EXPORT', '导出');  
  
define('EASYPOPULATE_4_DELIMITER_UNKNOWN', '未知的分隔符');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_CSV_DELIMITER_ISSUES', 'CSV文件分隔符问题');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_CSV_DELIMITER_ISSUES_NO_CSV', '文件不是CSV文件，并且存在分隔符问题');  
  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_SPLIT', '分割');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_IMPORT_SYNC', '导入并同步');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_IMPORT', '导入');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_DELETE', '删除文件');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_DOWNLOAD', '下载');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_NONE_SUPPORTED', '<b>不支持的数据文件</b>');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_ERROR_FOLDER_OPEN', '<b>打开上传目录出错：</b>');  
  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TYPE_ERROR','错误：未设置导出类型 - 按退格键返回。');  
  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_FILENAME', '文件名');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_SIZE', '大小');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DATE_TIME', '日期 & 时间');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_TYPE', '类型');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_SPLIT', '分割');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_IMPORT', '导入');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DELETE', '删除');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DOWNLOAD', '下载');

define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_TITLE','<br><u><h3>导出结果</h3></u><br>');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_NUM_RECORDS','<br>导出的记录数: %d<br>');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_MEM_USE','<br>内存使用: %d');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_MEM_PEAK','<br>内存峰值: %d');  
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_EXEC_TIME','<br>执行时间: %d 秒。');  
  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_TITLE','<h3>导入文件处理完成</h3>');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_RECORDS_UPDATE','<br/>更新的记录数: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_RECORDS_IMPORT','<br/>新导入的记录数: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_ERRORS','<br/>检测到的错误数: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_WARNINGS','<br/>检测到的警告数: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_MEM_USE','<br/>内存使用: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_MEM_PEAK','<br/>内存峰值: %d');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_EXEC_TIME','<br/>执行时间: %d 秒。');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_COMPLETE_ISSUES','文件导入完成，但有问题。');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_COMPLETE','文件导入完成。');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_NAME','<br />最长的products_name: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_URL','<br />最长的products_url: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_MODEL','<br />最长的products_model: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_MANUFACTURERS_NAME','<br />最长的manufacturers_name: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_CATEGORIES_NAME','<br />最长的categories_name: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_ARTISTS_NAME','<br />最长的artists_name: %1$s');

define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_MUSIC_GENRE_NAME','<br />最长的音乐流派名称: %1$s');  
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_RECORD_COMPANY_NAME','<br />最长的唱片公司名称: %1$s');
