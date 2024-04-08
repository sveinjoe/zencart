<?php
/**
 * Module Template
 * 
 * BOOTSTRAP v3.4.0
 *
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_specials_default.php 2935 2006-02-01 11:12:40Z birdbrain $
 */
$zc_show_special_products = false;
require DIR_WS_MODULES . zen_get_module_directory('centerboxes/' . FILENAME_SPECIALS_INDEX);
?>
<!-- bof: specials -->
<?php
if ($zc_show_special_products === true) {
?>
<div id="specialsDefault" class="mb-3 centerBoxWrapper">
<?php
    if (!empty($title)) {
        echo $title;
    }
?>
    <div id="specialsCenterbox-card-body" class="text-center row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
<?php
    if (is_array($list_box_contents)) {
        for ($row = 0, $n = count($list_box_contents); $row < $n; $row++) {
            $params = '';
            for ($col = 0, $j = count($list_box_contents[$row]); $col < $j; $col++) {
?>
                <div class="p-1">
<?php
                $r_params = $list_box_contents[$row][$col]['params'];
                if (isset($list_box_contents[$row][$col]['text'])) {
                    echo '<div' . $r_params . '>' . $list_box_contents[$row][$col]['text'] . '</div>';
                }
?>
                </div>
<?php
            }
        }
    }
?>
    </div>
</div>
<?php
}
?>
<!-- eof: specials -->
