<?php
require_once DIR_FS_CATALOG . DIR_WS_CLASSES . 'class.rich_results.php';
//判断是否产品页面
if(isset($_GET["main_page"]) && $_GET["main_page"] == "product_info" && isset($_GET["products_id"]) && is_numeric($_GET["products_id"])) {
    if(isset($product_info)){
        $rich_result = new rich_results() ;
        $rich_result->set_sku($product_info->fields["products_model"]);
        $arrImages = $product_info->fields["products_image"];
        if(!empty($product_info->fields["products_additional_images"])){
            $arrImages = array($arrImages);
            foreach($product_info->fields["products_additional_images"] as $additional_image){
                $arrImages[] = $additional_image;
            }
        }
        $rich_result->set_images($arrImages);
        $rich_result->set_name($product_info->fields["products_name"]);
        if(!empty($canonicalLink)){
            $rich_result->set_url($canonicalLink);
        }
        if(!empty($categories->fields["categories_name"])){
            $rich_result->set_category($categories->fields["categories_name"]);
        }
        if(!empty($product_info->fields["products_description"])){
            $rich_result->set_description($product_info->fields["products_description"]);
        }
        $rich_result->set_rand_aggregateRating(empty($canonicalLink) ? $_SERVER['REQUEST_URI'] : $canonicalLink);
    }
}
