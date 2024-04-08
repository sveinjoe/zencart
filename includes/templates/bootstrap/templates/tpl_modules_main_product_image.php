<?php
/**
 * Module Template
 * 
 * BOOTSTRAP v3.5.0
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2019 Jun 03 Modified in v1.5.7 $
 */
require DIR_WS_MODULES . zen_get_module_directory(FILENAME_MAIN_PRODUCT_IMAGE);
require_once DIR_WS_MODULES . zen_get_module_directory('additional_images.php');
?>

<div id="productMainImage" class="centeredContent back">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators custom-carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<?php
    if ($product_info->fields['products_additional_images']){
        $licount = 1;
        foreach($product_info->fields['products_additional_images'] as $k => $additional_image_src){
?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$licount?>"></li>
<?php
        $licount++;
        }
    }
?>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?=zen_image(addslashes($products_image_medium), addslashes($products_name), MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT, 'class="d-block w-100"')?>
    </div>
<?php
    if ($product_info->fields['products_additional_images']){
        foreach($product_info->fields['products_additional_images'] as $k => $additional_image_src){
?>
    <div class="carousel-item">
      <?=zen_image(addslashes($additional_image_src), addslashes($products_name), MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT, 'class="d-block w-100"')?>
    </div>
<?
        }
    }
?>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon custom-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon custom-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<noscript>
<?php
    echo '<a href="' . zen_href_link(FILENAME_POPUP_IMAGE, 'pID=' . $_GET['products_id']) . '" target="_blank">' . zen_image($products_image_medium, $products_name, MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>';
?>
</noscript>
</div>