<?php
/**
 * additional_images module, modal version.  This module 'lists' thumbnails of each
 * additional image at the bottom of the modal.
 * 
 * BOOTSTRAP v3.5.0
 *
 * Prepares list of additional product images to be displayed in template
 *
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Wed Jan 6 12:47:43 2016 -0500 Modified in v1.5.5 $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$images_array = [];

// do not check for additional images when turned off
if ($products_image !== '' && $flag_show_product_info_additional_images !== '0') {
    $products_image_info = pathinfo($products_image);

    $products_image_extension = $products_image_info['extension'];  //-Note, does not include the leading '.'!
    $products_image_base = $products_image_info['filename'];
    $products_image_directory = $products_image_info['dirname'];

    // -----
    // Additional images in subdirectories require an intervening '_' to match.
    //
    if ($products_image_directory === '.') {
        $products_image_base .= '?';
        $products_image_directory = '';
    } else {
        $products_image_base .= '_';
        $products_image_directory .= '/';
    }

    $products_image_directory = DIR_WS_IMAGES . $products_image_directory;

    // Check for additional matching images
    foreach (glob($products_image_directory . $products_image_base . '*.' . $products_image_extension) as $file) {
        $images_array[] = $file;
    }
}

$zco_notifier->notify('NOTIFY_MODULES_ADDITIONAL_PRODUCT_IMAGES_LIST', NULL, $images_array);

// Build output based on images found
$num_images = count($images_array);
$list_box_contents = [];
$title = '';

if ($num_images !== 0) {
    $row = 0;
    $col = 0;
    $slideNumber = 1;
    foreach ($images_array as $base_image) {
        $thumb = '<a id="carousel-selector-' . $slideNumber . '" data-slide-to="' . $slideNumber . '" data-target="#productImagesCarousel">';
        $thumb .= zen_image($base_image, $products_name, SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT);
        $thumb .= '</a>';
        $slideNumber++;

        // List Box array generation:
        $list_box_contents[$row][$col] = [
            'params' => 'class="list-inline-item"',
            'text' => $thumb
        ];
        $col++;
    } // end for loop
} // endif
