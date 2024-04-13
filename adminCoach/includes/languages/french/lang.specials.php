<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '特价商品',  
    'TEXT_ADD_SPECIAL_SELECT' => '通过选择添加特价商品',  
    'TEXT_ADD_SPECIAL_PID' => '通过产品ID添加特价商品',  
    'TEXT_SEARCH_SPECIALS' => '搜索当前特价商品',  
    'TEXT_SPECIAL_ACTIVE' => '特价活动有效',  
    'TEXT_SPECIAL_INACTIVE' => '特价活动无效',  
    'TEXT_SPECIAL_STATUS_BY_DATE' => '按日期设置状态',  
    'TEXT_SPECIALS_PRODUCT' => '产品：',  
    'TEXT_SPECIALS_SPECIAL_PRICE' => '特价：',  
    'TEXT_SPECIALS_AVAILABLE_DATE' => '特价活动开始日期：',  
    'TEXT_SPECIALS_EXPIRES_DATE' => '特价活动结束日期：',  
    'TEXT_INFO_NEW_PRICE' => '特价：',  
    'TEXT_INFO_ORIGINAL_PRICE' => '原价：',  
    'TEXT_INFO_DISPLAY_PRICE' => '当前显示价格：',  
    'TEXT_INFO_STATUS_CHANGED' => '状态已更改：',  
    'TEXT_INFO_HEADING_DELETE_SPECIALS' => '删除特价商品',  
    'TEXT_INFO_DELETE_INTRO' => '您确定要删除此产品的特价吗？',  
    'WARNING_SPECIALS_PRE_ADD_PID_EMPTY' => '警告：未指定产品ID。',  
    'WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE' => '警告：产品ID#%u已设置为特价。',  
    'WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST' => '警告：产品ID#%u不存在。',  
    'WARNING_SPECIALS_PRE_ADD_PID_GIFT' => '警告：产品ID#%u是' . '%%TEXT_GV_NAME%%' . '。',  
    'TEXT_INFO_HEADING_PRE_ADD_SPECIALS' => '通过产品ID添加特价',  
    'TEXT_INFO_PRE_ADD_INTRO' => '您可以通过产品ID添加特价。对于产品数量较多的商店，如果选择页面加载时间过长或下拉选择变得不方便，此方法可能更为合适。',  
    'TEXT_PRE_ADD_PRODUCTS_ID' => '输入产品ID：',  
    'TEXT_SPECIALS_PRICE_NOTES_HEAD' => '<b>备注：</b>',
    'TEXT_SPECIALS_PRICE_NOTES_BODY' => '<li>特价可能是一个价格（税前）。小数点必须使用"."（点），例如：<b>49.99</b>。计算出的百分比折扣会显示在目录中商品的新价格旁边。</li>  
    <li>特价可能是一个百分比折扣，例如：<b>20%</b>。</li>  
    <li>开始/结束日期不是必须的。如果不希望设置过期日期，可以留空。</li>  
    <li>当设置了日期时，特价状态的启用/禁用会自动根据这些日期进行。</li>', 
];

return $define;
