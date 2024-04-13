<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2022 Feb 08 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE_ATRIB' => '产品属性',  
    'TABLE_HEADING_DOWNLOAD' => '可下载产品：',  
    'TABLE_TEXT_FILENAME' => '文件名：',  
    'TABLE_TEXT_MAX_DAYS' => '过期天数：',  
    'TABLE_TEXT_MAX_COUNT' => '最大下载次数：',  
    'TEXT_WARNING_OF_DELETE' => '<span class="alert">此选项有与之关联的产品和值 - 删除它不安全。<br>注意：此选项值的任何相关下载文件都不会从服务器上删除。</span>',  
    'TEXT_OK_TO_DELETE' => '此选项没有与之关联的产品和值 - 可以安全删除它。',  
    'ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE_SPECIFIC' => '可能的重复选项值已添加："<b>%1$s</b>" %2$s 对于选项名称 "%3$s"（值ID：%4$s）',  
    'TEXT_DOWNLOADS_DISABLED' => '注意：下载已禁用',  
    'TABLE_TEXT_MAX_DAYS_SHORT' => '天数：',  
    'TABLE_TEXT_MAX_COUNT_SHORT' => '最大：',  
    'TEXT_SORT' => '排序：',  
    'TEXT_OPTION_VALUE_COMMENTS' => '评论：',  
    'TEXT_OPTION_VALUE_SIZE' => '显示大小：',  
    'TEXT_OPTION_VALUE_MAX' => '最大长度：',  
    'TEXT_ATTRIBUTES_IMAGE' => '属性图片样本：',  
    'TEXT_ATTRIBUTES_IMAGE_DIR' => '属性图片目录：',  
    'TEXT_ATTRIBUTES_FLAGS' => '属性<br>标志：',  
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => '仅用于<br>显示目的：',  
    'TEXT_ATTRIBUTES_IS_FREE' => '当产品免费时<br>属性也免费：',  
    'TEXT_ATTRIBUTES_DEFAULT' => '默认属性<br>被标记为已选中：',  
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => '应用与产品<br>相同的折扣：',  
    'TEXT_PRODUCT_OPTIONS_INFO' => '编辑产品选项以进行其他设置',  
    'TEXT_OPTION_VALUE_COPY_ALL' => '<strong>复制到所有产品，其中选项名称和值...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => '选择产品上已经存在的一个选项名称和值，然后将另一个选项名称和值复制到所有具有此现有选项名称和值的产品上',  
    'TEXT_SELECT_OPTION_FROM' => '匹配的选项名称：',  
    'TEXT_SELECT_OPTION_VALUES_FROM' => '匹配的选项值：',  
    'TEXT_SELECT_OPTION_TO' => '要添加的选项名称：',  
    'TEXT_SELECT_OPTION_VALUES_TO' => '要添加的选项值：',  
    'TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID' => '留空表示对所有产品进行操作，或<br>输入一个分类ID以更新该分类下的产品',  
    'TEXT_OPTION_VALUE_COPY_OPTIONS_TO' => '<strong>将选项名称/值复制到具有现有选项名称的产品...</strong>',  
    'TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO' => '选择一个在产品上已经存在的选项名称和值，将其添加到所有产品上，或仅添加到所选分类中具有选定选项名称的产品上。  
                                                   <br><strong>示例：</strong>将选项名称：颜色 选项值：红色 添加到所有具有选项名称：尺寸的产品上  
                                                   <br><strong>示例：</strong>将选项名称：颜色 选项值：绿色（从产品ID：34中获取默认值）添加到所有具有选项名称：尺寸的产品上  
                                                   <br><strong>示例：</strong>将选项名称：颜色 选项值：绿色（从产品ID：34中获取默认值）添加到分类ID：65下所有具有选项名称：尺寸的产品上  
            ',  
    'TEXT_SELECT_OPTION_TO_ADD_TO' => '要添加的选项名称至：',  
    'TEXT_SELECT_OPTION_FROM_ADD' => '要添加的选项名称：',  
    'TEXT_SELECT_OPTION_VALUES_FROM_ADD' => '要添加的选项值：',  
    'TEXT_SELECT_OPTION_FROM_PRODUCTS_ID' => '从产品ID#获取新的默认属性值，留空则不使用默认值：',  
    'TEXT_INFO_FROM' => '从：',  
    'TEXT_INFO_TO' => '到：',
    'ERROR_OPTION_VALUES_COPIED' => '错误：重复的选项名称和选项值',  
    'ERROR_OPTION_VALUES_COPIED_MISMATCH' => '错误：选择的选项名称和选项值不匹配',  
    'ERROR_OPTION_VALUES_NONE' => '错误：没有找到要复制的内容',  
    'SUCCESS_OPTION_VALUES_COPIED' => '复制成功！',  
    'ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID' => '错误：缺少产品ID#的选项名称/值',  
    'TEXT_OPTION_VALUE_DELETE_ALL' => '<strong>从所有产品中删除匹配的属性，其中选项名称和值...</strong>',  
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => '选择一个当前存在于产品上的选项名称和值，或者选择您想从所有产品中或某个类别中的所有产品中删除的选项',  
    'TEXT_SELECT_DELETE_OPTION_FROM' => '匹配的选项名称：',  
    'TEXT_SELECT_DELETE_OPTION_VALUES_FROM' => '匹配的选项值：',  
    'ERROR_OPTION_VALUES_DELETE_MISMATCH' => '错误：选择的选项名称和选项值不匹配',  
    'SUCCESS_OPTION_VALUES_DELETE' => '成功：已删除：',  
    'LABEL_FILTER' => '选择选项名称以过滤值',  
    'TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES' => '显示 <b>%d</b> 到 <b>%d</b>（共 <b>%d</b> 个选项值）',  
    'TEXT_SHOW_ALL' => '显示全部',
];

return $define;
