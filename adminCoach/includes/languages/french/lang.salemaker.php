<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'SaleMaker',                  // 标题：SaleMaker  
    'TEXT_SALEMAKER_NAME' => '促销名称:',               // Sale Name: 促销名称:  
    'TEXT_SALEMAKER_DEDUCTION' => '折扣:',               // Deduction: 折扣:  
    'TEXT_SALEMAKER_DEDUCTION_TYPE' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类型:&nbsp;&nbsp;',       // Type: 类型:  
    'TEXT_SALEMAKER_PRICERANGE_FROM' => '产品价格范围:',   // Products Price Range: 产品价格范围:  
    'TEXT_SALEMAKER_PRICERANGE_TO' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',   // To: 至  
    'TEXT_SALEMAKER_SPECIALS_CONDITION' => '如果产品为特价:',  // If a product is a Special: 如果产品为特价:  
    'TEXT_SALEMAKER_DATE_START' => '开始日期:',             // Start Date: 开始日期:  
    'TEXT_SALEMAKER_DATE_END' => '结束日期:',               // End Date: 结束日期:  
    'TEXT_SALEMAKER_CATEGORIES' => '<b>或</b>选择此促销适用的类别:', // Or check the categories to which this sale applies: 或选择此促销适用的类别:  
    'TEXT_SALEMAKER_POPUP' => '<a href="javascript:session_win();"><span class="errorText"><b>点击此处获取Salemaker的帮助</b></span></a>',  // 点击此处获取Salemaker的帮助  
    'TEXT_SALEMAKER_ENTIRE_CATALOG' => '如果您希望此促销应用于<b>所有产品</b>，请勾选此框:', // Check this box if you want the sale to be applied to all products: 如果您希望此促销应用于所有产品，请勾选此框:  
    'TEXT_SALEMAKER_TOP' => '整个目录',                 // Entire catalog: 整个目录  
    'TEXT_INFO_DATE_STATUS_CHANGE' => '最后状态更改:',     // Last Status Change: 最后状态更改:  
    'TEXT_INFO_SPECIALS_CONDITION' => '特价条件:',          // Specials Criteria: 特价条件:  
    'TEXT_INFO_DEDUCTION' => '折扣:',                    // Deduction: 折扣:  
    'TEXT_INFO_PRICERANGE_FROM' => '价格范围:',            // Price Range: 价格范围:  
    'TEXT_INFO_PRICERANGE_TO' => '至',                   // to: 至  
    'TEXT_INFO_DATE_START' => '开始:',                    // Starts: 开始:  
    'TEXT_INFO_DATE_END' => '结束:',                      // Expires: 结束:  
    'SPECIALS_CONDITION_DROPDOWN_0' => '忽略特价 - 应用于产品价格并替换特价', // Ignore Specials Price - Apply to Product Price and Replace Special  
    'SPECIALS_CONDITION_DROPDOWN_1' => '忽略促销条件 - 当存在特价时不应用促销', // Ignore Sale Condition - No Sale Applied When Special Exists  
    'SPECIALS_CONDITION_DROPDOWN_2' => '将促销折扣应用于特价 - 否则应用于价格', // Apply Sale Deduction to Specials Price - Otherwise Apply to Price  
    'TEXT_INFO_HEADING_COPY_SALE' => '复制促销',           // Copy Sale: 复制促销  
    'TEXT_INFO_COPY_INTRO' => '为副本输入名称<br>&nbsp;&nbsp;"%s"', // Enter a name for the copy of<br>&nbsp;&nbsp;"%s"  
    'TEXT_INFO_HEADING_DELETE_SALE' => '删除促销',         // Delete Sale: 删除促销  
    'TEXT_INFO_DELETE_INTRO' => '您确定要删除此促销吗?',   // Are you sure you want to delete this sale? 您确定要删除此促销吗?  
    'TEXT_MORE_INFO' => '(更多信息)',                    // (More Info): (更多信息)
    'TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES' => '&nbsp;警告：%s 个促销已经包含此分类',
];

return $define;
