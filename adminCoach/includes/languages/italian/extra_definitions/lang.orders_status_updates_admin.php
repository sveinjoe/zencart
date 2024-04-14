<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zcwilt 2020 Jun 02 New in v1.5.8-alpha $
*/

$define = [
    'OSH_EMAIL_SEPARATOR' => '----------------------------------------------------------',  
    'OSH_EMAIL_TEXT_SUBJECT' => '订单更新',  
    'OSH_EMAIL_TEXT_ORDER_NUMBER' => '订单号：',  
    'OSH_EMAIL_TEXT_INVOICE_URL' => '订单详情：',  
    'OSH_EMAIL_TEXT_DATE_ORDERED' => '下单日期：',  
    'OSH_EMAIL_TEXT_COMMENTS_UPDATE' => '<em>您的订单备注是：</em>',  
    'OSH_EMAIL_TEXT_STATUS_UPDATED' => '您的订单状态已更新：' . "\n",  
    'OSH_EMAIL_TEXT_STATUS_NO_CHANGE' => '您的订单状态没有改变：' . "\n",  
    'OSH_EMAIL_TEXT_STATUS_LABEL' => '<strong>当前状态：</strong> %s' . "\n\n",  
    'OSH_EMAIL_TEXT_STATUS_CHANGE' => '<strong>旧状态：</strong> %1$s, <strong>新状态：</strong> %2$s' . "\n\n",  
    'OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY' => '如果您有任何问题，请回复此邮件。' . "\n",
];

return $define;
