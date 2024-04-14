<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2020 Aug 20 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '发送一个' . '%%TEXT_GV_NAME%%' . '给顾客',  
    'TEXT_FROM' => '来自：',  
    'TEXT_TO' => '发送至邮箱：',  
    'TEXT_TO_CUSTOMERS' => '发送给顾客列表：',  
    'TEXT_TO_EMAIL' => '或者发送至一个电子邮箱：',  
    'TEXT_TO_EMAIL_NAME' => '姓名（可选）：',  
    'TEXT_TO_EMAIL_INFO' => '从上面的下拉菜单中选择一个列表，或者使用下面的字段来发送单个电子邮件。',  
    'TEXT_SUBJECT' => '主题：',  
    'TEXT_AMOUNT' => '%%TEXT_GV_NAME%%' . '价值：',  
    'ERROR_GV_AMOUNT' => '请输入一个数字，使用小数点表示小数部分，例如：25.00。',  
    'TEXT_AMOUNT_INFO' => '%%ERROR_GV_AMOUNT%%',  
    'TEXT_HTML_MESSAGE' => 'HTML消息：',  
    'TEXT_MESSAGE' => '纯文本消息：',  
    'TEXT_MESSAGE_INFO' => '<p>可选地，在标准的' . '%%TEXT_GV_NAME%%' . '电子邮件文本之前插入一条特定的消息。</p>',  
    'NOTICE_EMAIL_SENT_TO' => '通知：%1s封电子邮件已发送至%2s',  
    'ERROR_NO_CUSTOMER_SELECTED' => '错误：没有选择顾客。',  
    'ERROR_NO_AMOUNT_ENTERED' => '错误：礼品卡价值无效。',  
    'ERROR_NO_SUBJECT' => '错误：未输入电子邮件主题。',  
    'TEXT_GV_ANNOUNCE' => '我们很高兴为您提供一个' . '%%TEXT_GV_NAME%%' . '价值%s。',  
    'TEXT_GV_TO_REDEEM_TEXT' => '使用以下链接来兑换' . '%%TEXT_GV_NAME%%' . "\n\n " . '%1$s%2$s' . "\n\n" . '或者访问' . STORE_NAME . "在" . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . '在结账-支付页面输入代码%2$s。',  
    'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s">点击这里来兑换' . '%%TEXT_GV_NAME%%' . '</a>或者访问<a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a>并在结账-支付页面输入代码<strong>%2$s</strong>。',
];

return $define;
