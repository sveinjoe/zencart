<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2022 Aug 05 Modified in v1.5.8-alpha2 $
*/

$define = [
    'HEADING_TITLE' => '分类/产品',  
    'HEADING_TITLE_GOTO' => '跳转到：',  
    'TABLE_HEADING_IMAGE' => '图片',  
    'TABLE_HEADING_CATEGORIES_PRODUCTS' => '分类/产品',  
    'TABLE_HEADING_QUANTITY' => '数量',  
    'TABLE_HEADING_CATEGORIES_SORT_ORDER' => '排序',  
    'TEXT_PRODUCTS_STATUS_ON_OF' => ' 的 ',  
    'TEXT_PRODUCTS_STATUS_ACTIVE' => ' 活跃 ',  
    'TEXT_CATEGORIES' => '分类：',  
    'TEXT_PRODUCTS' => '产品：',  
    'TEXT_INFO_HEADING_DELETE_CATEGORY' => '删除分类',  
    'TEXT_DELETE_CATEGORY_INTRO' => '您确定要删除这个分类吗？',  
    'TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS' => '<strong>警告：</strong> 删除主分类ID的关联产品将无法正常定价。在删除包含关联产品的分类之前，您应首先确保将产品的主分类ID重置为另一个分类',  
    'TEXT_DELETE_WARNING_CHILDS' => '<b>警告：</b> 此分类下仍有%u个子分类！',  
    'TEXT_DELETE_WARNING_PRODUCTS' => '<b>警告：</b> 此分类下仍有%u个产品！',  
    'TEXT_INFO_HEADING_MOVE_CATEGORY' => '移动分类',  
    'TEXT_MOVE_CATEGORIES_INTRO' => '请选择您希望<b>%s</b>所在的分类',  
    'TEXT_MOVE_PRODUCT' => '移动产品<br><strong>ID#%1$u %2$s</strong><br>从当前分类<br><strong>ID#%3$u %4$s</strong><br>到：',  
    'TEXT_INFO_HEADING_DELETE_PRODUCT' => '删除产品/链接',
    'TEXT_DELETE_PRODUCT_INTRO' => '删除此产品到类别的链接或完全删除产品。<br>为了更方便地将产品链接到多个类别或取消链接，您还可以使用<a href="index.php?cmd=' . FILENAME_PRODUCTS_TO_CATEGORIES . '&amp;products_filter=%u">多类别链接管理器</a>。<br><br><strong>已链接的类别</strong>已预先选中，准备删除。<br><strong>主类别</strong>（<span class="text-danger">高亮显示</span>）已取消选中，以防止意外删除。<br><br>要完全删除一个产品，请选择包括主类别在内的所有类别。',  
    'TEXT_INFO_HEADING_MOVE_PRODUCT' => '移动产品',  
    'TEXT_MOVE_PRODUCTS_INTRO' => '将此产品从当前类别移动到所选类别。<br>如果当前类别也是产品的主类别，那么主类别也将更新为所选类别。<br>',  
    'TEXT_INFO_CURRENT_CATEGORIES' => '当前类别：',  
    'TEXT_INFO_HEADING_COPY_TO' => '复制到',  
    'TEXT_INFO_CURRENT_PRODUCT' => '当前产品：',  
    'TEXT_HOW_TO_COPY' => '复制方法：',  
    'TEXT_COPY_AS_LINK' => '将此产品作为链接添加到上面所选的另一个类别',  
    'TEXT_COPY_AS_DUPLICATE' => '在上面所选的类别中创建一个此产品的副本',  
    'TEXT_COPY_METATAGS' => '将元标签复制到副本？',  
    'TEXT_COPY_LINKED_CATEGORIES' => '将链接的类别复制到副本？',  
    'TEXT_COPY_EDIT_DUPLICATE' => '打开副本产品进行编辑',  
    'TEXT_COPY_AS_DUPLICATE_ATTRIBUTES' => '从产品ID#%u复制的属性到副本产品ID#%u',  
    'TEXT_COPY_AS_DUPLICATE_METATAGS' => '从产品ID#%u复制的语言ID#%u的元标签到副本产品ID#%u',  
    'TEXT_COPY_AS_DUPLICATE_CATEGORIES' => '从产品ID#%u复制的链接类别ID#%u到副本产品ID#%u',  
    'TEXT_COPY_AS_DUPLICATE_DISCOUNTS' => '从产品ID#%u复制的折扣到副本产品ID#%u',
    'TEXT_DUPLICATE_IDENTIFIER' => '复制',  
    'TEXT_INFO_HEADING_ATTRIBUTE_FEATURES' => '产品ID#的属性更改',  
    'TEXT_PRODUCTS_ATTRIBUTES_INFO' => '属性特性为：',  
    'TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS' => '下载：',  
    'TEXT_INFO_ATTRIBUTES_FEATURES_DELETE' => '删除<strong>所有</strong>产品属性为：<br>',  
    'TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT' => '从<br>复制属性到另一个<strong>产品</strong>',  
    'TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY' => '从<br>复制属性到另一个<strong>类别</strong>',  
    'TEXT_COPY_ATTRIBUTES' => '复制到副本的产品属性？',  
    'TEXT_COPY_DISCOUNTS_ONLY' => '仅用于具有数量折扣的复制产品...',  
    'TEXT_COPY_DISCOUNTS' => '复制到副本的产品数量折扣？',  
    'TEXT_INFO_HEADING_STATUS_CATEGORY' => '更改类别状态为：',  
    'TEXT_CATEGORIES_STATUS_INTRO' => '将此类别的状态更改为：',  
    'TEXT_CATEGORIES_STATUS_OFF' => '禁用',  
    'TEXT_CATEGORIES_STATUS_ON' => '启用',  
    'TEXT_PRODUCTS_STATUS_INFO' => '更改所有包含的产品状态为：',  
    'TEXT_PRODUCTS_STATUS_OFF' => '禁用',  
    'TEXT_PRODUCTS_STATUS_ON' => '启用',  
    'TEXT_PRODUCTS_STATUS_NOCHANGE' => '不变',  
    'TEXT_CATEGORIES_STATUS_WARNING' => '<strong>警告...</strong><br>注意：在类别中禁用产品（无论是链接产品还是主产品）将导致该产品的所有实例在所有类别中被禁用。',  
    'TEXT_SUBCATEGORIES_STATUS_INFO' => '更改所有子类别状态为：',  
    'TEXT_SUBCATEGORIES_STATUS_OFF' => '禁用',  
    'TEXT_SUBCATEGORIES_STATUS_ON' => '启用',  
    'TEXT_SUBCATEGORIES_STATUS_NOCHANGE' => '不变',  
    'WARNING_PRODUCTS_IN_TOP_INFO' => '警告：您在顶级类别中有产品。这将导致目录中的定价不正常工作。找到的产品：',
    'TEXT_COPY_MEDIA_MANAGER' => '复制媒体？',  
    'SUCCESS_ATTRIBUTES_DELETED' => '属性已成功删除',  
    'TEXT_SORT_CATEGORIES_NAME_DESC' => '分类名称（降序）',  
    'TEXT_SORT_CATEGORIES_ID' => '分类ID',  
    'TEXT_SORT_CATEGORIES_ID_DESC' => '分类ID（降序）',  
    'TEXT_SORT_CATEGORIES_STATUS' => '分类状态（禁用）',  
    'TEXT_SORT_CATEGORIES_STATUS_DESC' => '分类状态（启用）',  
    'TEXT_SORT_PRODUCTS_MODEL_DESC' => '产品型号（降序）',  
    'TEXT_SORT_PRODUCTS_STATUS' => '状态（禁用）, 名称',  
    'TEXT_SORT_PRODUCTS_STATUS_DESC' => '状态（启用）, 名称',  
    'TEXT_SORT_PRODUCTS_ID' => '产品ID',  
    'TEXT_SORT_PRODUCTS_ID_DESC' => '产品ID（降序）',  
    'TEXT_SORT_PRODUCTS_WEIGHT' => '重量',
];

return $define;
