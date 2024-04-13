<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2022 Jun 04 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '订单',  
    'HEADING_TITLE_DETAILS' => '订单详情 (#%u)',  
    'HEADING_TITLE_SEARCH' => '订单ID:',  
    'HEADING_TITLE_STATUS' => '状态:',  
    'HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS' => '产品名称或ID:XX或型号',  
    'HEADING_TITLE_SEARCH_ALL' => '搜索：',  
    'HEADING_TITLE_SEARCH_PRODUCTS' => '产品搜索：',  
    'TEXT_RESET_FILTER' => '清除搜索过滤器',  
    'TABLE_HEADING_PAYMENT_METHOD' => '支付方式<br>配送方式',  
    'TABLE_HEADING_ORDERS_ID' => 'ID',  
    'TEXT_BILLING_SHIPPING_MISMATCH' => '账单地址和配送地址不匹配',  
    'TABLE_HEADING_ZONE_INFO' => '区域',  
    'TABLE_HEADING_ORDER_TOTAL' => '订单总金额',  
    'TABLE_HEADING_DATE_PURCHASED' => '购买日期',  
    'TABLE_HEADING_TYPE' => '订单类型',  
    'TABLE_HEADING_QUANTITY' => '数量',  
    'TABLE_HEADING_UPDATED_BY' => '更新者',  
    'ENTRY_CUSTOMER' => '客户：',  
    'ENTRY_CUSTOMER_ADDRESS' => '客户地址：<br><i class="fa fa-2x fa-user"></i>',  
    'ENTRY_SHIPPING_ADDRESS' => '配送地址：<br><i class="fa fa-2x fa-truck"></i>',  
    'ENTRY_BILLING_ADDRESS' => '账单地址：<br><i class="fa fa-2x fa-credit-card"></i>',  
    'ENTRY_PAYMENT_METHOD' => '支付方式：',  
    'ENTRY_CREDIT_CARD_TYPE' => '信用卡类型：',  
    'ENTRY_CREDIT_CARD_OWNER' => '信用卡所有者：',  
    'ENTRY_CREDIT_CARD_NUMBER' => '信用卡号码：',  
    'ENTRY_CREDIT_CARD_CVV' => '信用卡CVV号：',  
    'ENTRY_CREDIT_CARD_EXPIRES' => '信用卡过期时间：',  
    'TEXT_ADDITIONAL_PAYMENT_OPTIONS' => '点击进行更多支付处理选项',  
    'ENTRY_SHIPPING' => '配送：',  
    'ENTRY_STATUS' => '状态：',  
    'ENTRY_NOTIFY_CUSTOMER' => '通知客户：',  
    'ENTRY_NOTIFY_COMMENTS' => '附加评论：',  
    'TEXT_INFO_HEADING_DELETE_ORDER' => '删除订单',  
    'TEXT_INFO_DELETE_INTRO' => '您确定要删除这个订单吗？',  
    'TEXT_INFO_RESTOCK_PRODUCT_QUANTITY' => '重新入库产品数量',
    'TEXT_DATE_ORDER_CREATED' => '创建日期：',  
    'TEXT_DATE_ORDER_LAST_MODIFIED' => '最后修改日期：',  
    'TEXT_INFO_PAYMENT_METHOD' => '支付方式：',  
    'TEXT_ALL_ORDERS' => '所有订单',  
    'EMAIL_SEPARATOR' => '------------------------------------------------------',  
    'EMAIL_TEXT_SUBJECT' => '订单更新',  
    'EMAIL_TEXT_ORDER_NUMBER' => '订单编号：',  
    'EMAIL_TEXT_INVOICE_URL' => '订单详情：',  
    'EMAIL_TEXT_DATE_ORDERED' => '订单日期：',  
    'EMAIL_TEXT_COMMENTS_UPDATE' => '<em>您的订单备注如下：</em>',  
    'EMAIL_TEXT_STATUS_UPDATED' => '您的订单已更新为以下状态：' . "\n",  
    'EMAIL_TEXT_STATUS_LABEL' => '<strong>新状态：</strong> %s' . "\n\n",  
    'EMAIL_TEXT_STATUS_PLEASE_REPLY' => '如果您有任何问题，请回复此邮件。' . "\n",  
    'ERROR_ORDER_DOES_NOT_EXIST' => '错误：订单不存在。',  
    'SUCCESS_ORDER_UPDATED' => '成功：订单已成功更新。',  
    'WARNING_ORDER_NOT_UPDATED' => '警告：没有需要更改的内容。订单未更新。',  
    'TEXT_INFO_ATTRIBUTE_FREE' => '&nbsp;-&nbsp;<span class="alert">免费</span>',  
    'TEXT_DOWNLOAD' => '下载',  
    'TEXT_DOWNLOAD_TITLE' => '订单下载状态',  
    'TEXT_DOWNLOAD_STATUS' => '状态',  
    'TEXT_DOWNLOAD_FILENAME' => '文件名',  
    'TEXT_DOWNLOAD_MAX_DAYS' => '天数',  
    'TEXT_DOWNLOAD_MAX_COUNT' => '次数',  
    'TEXT_DOWNLOAD_AVAILABLE' => '可用',  
    'TEXT_DOWNLOAD_EXPIRED' => '已过期',  
    'TEXT_DOWNLOAD_MISSING' => '服务器上不存在',  
    'TEXT_EXTENSION_NOT_UNDERSTOOD' => '不支持的文件扩展名 %s',  
    'TEXT_FILE_NOT_FOUND' => '文件未找到',  
    'IMAGE_ICON_STATUS_CURRENT' => '状态 - 可用',  
    'IMAGE_ICON_STATUS_EXPIRED' => '状态 - 已过期',  
    'IMAGE_ICON_STATUS_MISSING' => '状态 - 缺失',  
    'SUCCESS_ORDER_UPDATED_DOWNLOAD_ON' => '下载已成功启用',
    'SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF' => '下载已成功禁用',  
    'TEXT_MORE' => '... 更多',  
    'TEXT_INFO_IP_ADDRESS' => 'IP地址：',  
    'TEXT_DELETE_CVV_FROM_DATABASE' => '从数据库中删除CVV',  
    'TEXT_DELETE_CVV_REPLACEMENT' => '已删除',  
    'TEXT_MASK_CC_NUMBER' => '隐藏此号码',  
    'TEXT_INFO_EXPIRED_DATE' => '过期日期：<br>',  
    'TEXT_INFO_EXPIRED_COUNT' => '过期计数：<br>',  
    'TABLE_HEADING_CUSTOMER_COMMENTS' => '客户<br>评论',  
    'TEXT_COMMENTS_YES' => '客户评论 - 是',  
    'TEXT_COMMENTS_NO' => '客户评论 - 否',  
    'TEXT_CUSTOMER_LOOKUP' => '<i class="fa fa-search"></i> 查找客户',  
    'TEXT_INVALID_ORDER_STATUS' => '<span class="alert">(无效订单状态)</span>',  
    'BUTTON_TO_LIST' => '订单列表',  
    'SELECT_ORDER_LIST' => '跳转到订单：',  
    'TEXT_MAP_CUSTOMER_ADDRESS' => '映射客户地址',  
    'TEXT_MAP_SHIPPING_ADDRESS' => '映射配送地址',  
    'TEXT_MAP_BILLING_ADDRESS' => '映射账单地址',  
    'TEXT_EMAIL_LANGUAGE' => '订单语言：%s',  
    'SUCCESS_EMAIL_SENT' => '已将电子邮件%s发送给客户',  
    'WARNING_PAYMENT_MODULE_DOESNT_EXIST' => "该订单的支付模块（%s）已不存在。",  
    'WARNING_PAYMENT_MODULE_NOTIFICATIONS_DISABLED' => '该订单的支付模块（%s）的配置已更改。无法对此订单进行退款、授权、捕获或撤销操作。',
];

return $define;
