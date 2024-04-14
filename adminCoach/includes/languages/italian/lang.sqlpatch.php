<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 26 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'SQL查询执行器',  
    'HEADING_INFO' => 'SQL查询执行器允许您通过将脚本粘贴到文本区域或上传包含脚本的文本文件来直接在数据库上运行SQL查询。它主要用于插件字段的手动安装以及您自己的更正/添加。',  
    'HEADING_WARNING_INSTALLSCRIPTS' => '此工具<b>不应</b>用于执行Zen Cart数据库升级脚本：请使用Zen Cart安装器，按照文档操作。',  
    'HEADING_WARNING' => '<p>在使用此工具执行任何数据库操作之前，请确保您有一个经过验证的数据库备份，并且知道如何恢复它。<br>如果您正在安装第三方修改/插件，请注意，您这样做需要自行承担风险。Zen Cart&reg; 不保证第三方贡献者提供的脚本的安全性。</p><p>在将脚本用于您的实时商店之前，请始终在开发服务器上测试每个脚本！</p>',  
    'TEXT_QUERY_RESULTS' => '查询结果：',  
    'TEXT_ENTER_QUERY_STRING' => '输入要执行的查询<br>：&nbsp;&nbsp;<br><br>确保每个语句<br>以分号“;”结束',  
    'TEXT_QUERY_FILENAME' => '上传文件：',  
    'ERROR_NOTHING_TO_DO' => '错误：没有要执行的操作 - 未指定查询或查询文件。',  
    'SQLPATCH_HELP_TEXT' => 'SQL查询执行器允许您通过将脚本粘贴到文本区域或上传包含脚本的文本文件来直接在数据库上运行SQL查询。',  
    'REASON_TABLE_ALREADY_EXISTS' => '无法创建表%s，因为它已存在',  
    'REASON_TABLE_DOESNT_EXIST' => '无法删除表%s，因为它不存在。',  
    'REASON_TABLE_NOT_FOUND' => '无法执行，因为表%s不存在。',  
    'REASON_CONFIG_KEY_ALREADY_EXISTS' => '无法插入配置键"%s"，因为它已存在',  
    'REASON_COLUMN_ALREADY_EXISTS' => '无法添加列%s，因为它已存在。',
    'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => '无法删除列 %s，因为它不存在。',  
    'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => '无法更改列 %s，因为它不存在。',  
    'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => '无法插入prod-type-layout的configuration_key "%s"，因为它已经存在。',  
    'REASON_INDEX_DOESNT_EXIST_TO_DROP' => '无法删除表 %s 上的索引 %s，因为它不存在。',  
    'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => '无法删除表 %s 上的主键，因为它不存在。',  
    'REASON_INDEX_ALREADY_EXISTS' => '无法将索引 %s 添加到表 %s，因为它已经存在。',  
    'REASON_PRIMARY_KEY_ALREADY_EXISTS' => '无法向表 %s 添加主键，因为已经存在一个主键。',  
    'REASON_NO_PRIVILEGES' => '用户 ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' 没有对数据库 ' . DB_DATABASE . ' 的 %s 权限。',  
    'ERROR_RENAME_TABLE' => 'RENAME TABLE 命令不被SQLpatch工具支持。请使用phpMyAdmin代替。',  
    'ERROR_LINE_INCOMPLETE' => '查询不完整：缺少结束的分号。',  
    'TEXT_EXECUTE_SUCCESS' => '成功：已处理 %u 条语句。',  
    'ERROR_EXECUTE_FAILED' => '查询失败：已处理 %u 条语句。',  
    'ERROR_EXECUTE_IGNORED' => '注意：忽略了 %u 条语句。有关更多详细信息，请参阅数据库表 "upgrade_exceptions"。',  
    'TEXT_UPLOADQUERY_SUCCESS' => '成功：通过文件上传处理了 %u 条语句',  
    'ERROR_UPLOADQUERY_FAILED' => '查询失败：通过文件上传处理了 %u 条语句',  
    'ERROR_UPLOADQUERY_IGNORED' => '注意：通过文件上传忽略了 %u 条语句。有关更多详细信息，请参阅数据库表 "upgrade_exceptions"。',
];

return $define;
