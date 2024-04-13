<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '商店管理员',  
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => '<strong>成功</strong> 更新属性排序',  
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => '<strong>成功</strong> 更新产品价格排序值',  
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => '<strong>成功</strong> 将产品浏览量重置为0',  
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => '<strong>成功</strong> 将产品订购量重置为0',  
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => '<strong>成功</strong> 重置所有主分类ID，用于关联产品和定价',  
    'SUCCESS_UPDATE_COUNTER' => '<strong>成功</strong> 更新计数器为：',  
    'SUCCESS_DISCOUNT_ALL' => '<strong>成功</strong> 所有产品打折：',  
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>错误：</strong> 未找到匹配的配置键...',  
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>错误：</strong> 未输入配置键或文本进行搜索... 搜索已终止',  
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>更新点击计数器</strong><br>为新的值：',  
    'TEXT_INFO_ALL_PRODUCT_DISCOUNT' => '<strong>所有产品打折（请填入大于0小于等于2的数字或者小数）</strong><br>如填写0.95,即为打九五折，如填写1.10即为涨价10%：',  
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>更新所有产品价格排序</strong><br>以便按显示价格排序：',  
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>重置所有产品浏览量</strong><br>将产品浏览量计数重置为0：',  
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>重置所有产品订购量</strong><br>将产品订购量计数重置为0：',  
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>重置所有产品主分类ID</strong><br>用于关联产品和定价：',  
    'TEXT_NEW_ORDERS_ID' => '新订单ID',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>设置下一个订单号</strong><br>注意：您不能将订单号设置为数据库中已存在的订单号更小的值。',  
    'TEXT_MSG_NEXT_ORDER' => '下一个订单号已设置为 %s',  
    'TEXT_MSG_NEXT_ORDER_MAX' => '由于已存在的订单数据，当前下一个订单号为：%s',  
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => '由于数据库限制，您不能将下一个订单号设置为高于 2000000000 的值。请选择一个较小的值。',  
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>优化数据库</strong>以移除已删除记录占用的空间。<br>在繁忙的数据库上，可以选择每月或每周运行一次。<br>(最好在非高峰时段运行。)',  
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => '正在进行数据库表优化。这可能需要几分钟。请稍候。完成后将重新显示前一个菜单...',  
    'SUCCESS_DB_OPTIMIZE' => '数据库优化 - 已处理的表：',  
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>清理调试日志文件</strong><br><strong>注意：</strong>Zen Cart 记录 PHP 错误信息用于调试目的，并且许多支付模块可以设置记录调试数据以诊断通信问题。<br>点击此清理选项将*永久*删除与 PHP 错误和支付模块相关的*所有*调试日志，这些日志位于 /logs/ 文件夹中。',  
    'SUCCESS_CLEAN_DEBUG_FILES' => '调试日志文件已清理',
];

return $define;
