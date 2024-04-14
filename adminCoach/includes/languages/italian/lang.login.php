<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '管理员登录',  
    'HEADING_TITLE_EXPIRED' => '管理员登录 - 密码已过期',  
    'TEXT_SUBMIT' => '提交',  
    'TEXT_ADMIN_PASS' => '管理员密码',  
    'TEXT_ADMIN_OLD_PASSWORD' => '旧密码',  
    'TEXT_ADMIN_NEW_PASSWORD' => '新密码',  
    'TEXT_ADMIN_CONFIRM_PASSWORD' => '确认密码',  
    'ERROR_WRONG_LOGIN' => '您输入的用户名或密码错误。',  
    'ERROR_SECURITY_ERROR' => '尝试登录时发生安全错误。',  
    'TEXT_PASSWORD_FORGOTTEN' => '忘记密码？',  
    'LOGIN_EXPIRY_NOTICE' => '', // 此处为空，未提供翻译内容  
    'ERROR_PASSWORD_EXPIRED' => '注意：您的密码已过期。请选择一个新密码。您的密码<strong>必须包含数字和字母，且至少7个字符。</strong>',  
    'TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED' => '出于安全原因，您的临时密码需要更改。请选择一个新密码。<br>您的密码<strong>必须包含数字和字母，且至少7个字符。</strong>',  
    'SUCCESS_PASSWORD_UPDATED' => '密码已更新',  
    'TEXT_EMAIL_SUBJECT_LOGIN_FAILURES' => '管理员登录失败通知',  
    'TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES' => '重要通知：您的管理账户发生了多次登录失败尝试。为保护您的账户和系统安全，在6次尝试后，账户将被锁定至少30分钟，期间即使您记得密码也无法登录。继续尝试登录将会使账户继续锁定30分钟。在此期间，您无法进行密码重置。给您带来的不便，我们深表歉意。' . "\n\n最后一次登录尝试来自这个IP地址：%s。\n\n\n",
    'EXPIRED_DUE_TO_SSL' => '注意：您的密码已过期，因为您的网站已从非SSL（较不安全）变更为使用SSL保护（更安全）。在SSL保护下更改您的密码是提升安全性的重要步骤。对于给您带来的任何不便，我们深表歉意。标准的密码过期规则仍然适用。',
];

return $define;
