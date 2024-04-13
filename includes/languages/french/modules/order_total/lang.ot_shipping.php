<?php
// 注意：待修复 - 在下一次更新中将最后两个字符串移至共享文件中
$define = [
'MODULE_ORDER_TOTAL_SHIPPING_TITLE' => 'Livraison',
'MODULE_ORDER_TOTAL_SHIPPING_DESCRIPTION' => 'Coût de livraison de la commande',
'FREE_SHIPPING_TITLE' => 'Livraison gratuite',
'FREE_SHIPPING_DESCRIPTION' => 'Livraison gratuite pour les commandes de plus de %s',
];

return $define;

// 注释解释：
// 注意：待修复 - 这是一个待修复的问题，提示开发者在下次更新时，将最后两个字符串（'FREE_SHIPPING_TITLE' 和 'FREE_SHIPPING_DESCRIPTION'）移至一个共享文件中，以便于管理和维护。
// 'MODULE_ORDER_TOTAL_SHIPPING_TITLE' 的值是 'Livraison'，意思是“配送”。
// 'MODULE_ORDER_TOTAL_SHIPPING_DESCRIPTION' 的值是 'Coût de livraison de la commande'，意思是“订单的配送费用”。
// 'FREE_SHIPPING_TITLE' 的值是 'Livraison gratuite'，意思是“免费配送”。
// 'FREE_SHIPPING_DESCRIPTION' 的值是 'Livraison gratuite pour les commandes de plus de %s'，意思是“对于超过%s的订单，提供免费配送”。这里的 %s 是一个占位符，它会被实际的值所替代。