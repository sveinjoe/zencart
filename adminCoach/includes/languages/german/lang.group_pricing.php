<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '分组定价',  
    'TABLE_HEADING_GROUP_NAME' => '分组名称',  
    'TABLE_HEADING_GROUP_AMOUNT' => '折扣百分比',  
    'TEXT_HEADING_NEW_PRICING_GROUP' => '新建定价分组',  
    'TEXT_HEADING_EDIT_PRICING_GROUP' => '编辑定价分组',  
    'TEXT_HEADING_DELETE_PRICING_GROUP' => '删除定价分组',  
    'TEXT_NEW_INTRO' => '请为新的分组填写以下信息',  
    'TEXT_DELETE_INTRO' => '您确定要删除这个分组吗？',  
    'TEXT_DELETE_PRICING_GROUP' => '删除定价分组',  
    'TEXT_DELETE_WARNING_GROUP_MEMBERS' => '<b>警告：</b> 仍有 %s 个客户与这个分组相关联!',  
    'TEXT_GROUP_PRICING_NAME' => '分组名称：',  
    'TEXT_GROUP_PRICING_AMOUNT' => '折扣百分比：',  
    'TEXT_CUSTOMERS' => '分组中的客户：',  
    'ERROR_GROUP_PRICING_CUSTOMERS_EXIST' => '错误：该分组中存在客户。请确认您希望从分组中移除所有成员并删除它。',  
    'ERROR_MODULE_NOT_CONFIGURED' => '注意：您有分组定价定义，但您尚未启用分组定价的订单总额模块。<br>请前往 管理->模块->订单总额->会员折扣 (ot_group_pricing) 并安装/配置该模块。',
];

return $define;
