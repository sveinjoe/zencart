<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zcwilt 2020 Jun 02 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '重置密码',  
    'TEXT_ADMIN_EMAIL' => '管理员电子邮件地址',  
    'TEXT_ADMIN_USERNAME' => '管理员用户名',  
    'TEXT_BUTTON_REQUEST_RESET' => '请求重置',  
    'TEXT_BUTTON_LOGIN' => '登录',  
    'TEXT_BUTTON_CANCEL' => '取消',  
    'ERROR_WRONG_EMAIL' => '您输入的电子邮件地址错误。',  
    'ERROR_WRONG_EMAIL_NULL' => '走开，傻瓜 :-P', // 这句话较为口语化，可能需要根据实际情况进行更恰当的翻译  
    'MESSAGE_PASSWORD_SENT' => '谢谢。如果您输入的电子邮件地址和用户名与我们在数据库中的管理员账户匹配，那么新密码将会发送到该电子邮件地址。<br>请阅读那封电子邮件，然后点击“登录”使用新的临时密码。',  
    'TEXT_EMAIL_SUBJECT_PWD_RESET' => '您请求的更改',  
    'TEXT_EMAIL_MESSAGE_PWD_RESET' => '有人从%s请求了一个新的密码。' . "\n\n" . '您的新临时密码是：' . "\n\n   %s\n\n在登录之前，系统将要求您选择一个新的密码。\n\n这个临时密码在24小时内有效。\n\n\n",  
    'TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET' => '访问警告!',  
    'TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET' => "从%s收到了管理员密码重置的失败尝试\n\n提供的电子邮件地址和/或用户名无效。\n\n如果您的管理员账户共享相同的电子邮件地址，您应该考虑为它们分配唯一的电子邮件地址，以便于重置。",
];

return $define;
