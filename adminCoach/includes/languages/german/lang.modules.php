<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE_MODULES_PAYMENT' => '支付模块',  
    'HEADING_TITLE_MODULES_SHIPPING' => '配送模块',  
    'HEADING_TITLE_MODULES_ORDER_TOTAL' => '订单总计模块',  
    'TABLE_HEADING_ORDERS_STATUS' => '订单状态',  
    'TEXT_MODULE_DIRECTORY' => '模块目录：',  
    'ERROR_MODULE_FILE_NOT_FOUND' => '错误：由于缺少语言文件，模块未加载：',  
    'TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED' => '警告："' . STORE_NAME . '"的管理设置已更改',  
    'TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED' => '这是来自"' . STORE_NAME . '"的自动电子邮件，通知您管理设置已更改：' . "\n\n" . '注意：[%s]模块的管理设置已被Zen Cart管理员用户%s更改。' . "\n\n" . '如果您没有发起这些更改，建议您立即验证设置。' . "\n\n" . '如果您已经知道这些更改，可以忽略此自动电子邮件。',  
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED' => '这是来自"' . STORE_NAME . '"的自动电子邮件，通知您管理设置已更改：' . "\n\n" . '注意：管理设置已更改。[%s]模块已由Zen Cart管理员用户%s安装。' . "\n\n" . '如果您没有发起这些更改，建议您立即验证设置。' . "\n\n" . '如果您已经知道这些更改，可以忽略此自动电子邮件。',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED' => '这是来自"' . STORE_NAME . '"的自动电子邮件，提醒您有关您管理设置的一个更改：' . "\n\n" . '注意：管理设置已被更改。[%s]模块已被Zen Cart管理员用户%s移除。' . "\n\n" . '如果您没有发起这些更改，建议您立即验证设置。' . "\n\n" . '如果您已经知道这些更改，您可以忽略此自动电子邮件。',  
  
    'TEXT_DELETE_INTRO' => '您确定要删除此模块吗？',  
      
    'TEXT_WARNING_SSL_EDIT' => '警告：<a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">出于安全原因，在您的管理员配置为SSL之前，此模块的编辑功能已被禁用</a>。',  
      
    'TEXT_WARNING_SSL_INSTALL' => '警告：<a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">出于安全原因，在您的管理员配置为SSL之前，此模块的安装功能已被禁用</a>。',  
      
    'TEXT_POSITIVE_INT' => '%s 必须是一个大于或等于0的整数',  
      
    'TEXT_POSITIVE_FLOAT' => '%s 必须是一个大于或等于0的小数',
];

return $define;
