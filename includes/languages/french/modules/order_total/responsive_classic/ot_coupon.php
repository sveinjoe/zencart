<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Coupon de réduction');  
 define('MODULE_ORDER_TOTAL_COUPON_HEADER', TEXT_GV_NAMES . '/Coupon de réduction');  
 define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Coupon de réduction');  
 define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM);  
   
 //-bof-one_page_checkout-lat9  *** 1 de 1 ***  
 if (defined ('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Veuillez saisir votre code coupon dans la zone de code de réduction ci-dessous. Votre coupon sera appliqué au total et sera reflété dans l\'affichage de votre commande après avoir cliqué sur le bouton à droite ou soumis votre commande. Veuillez noter : vous ne pouvez utiliser qu\'un seul coupon par commande.</p>');  
 } else {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Veuillez saisir votre code coupon dans la zone de code de réduction ci-dessous. Votre coupon sera appliqué au total et sera reflété dans votre panier après avoir cliqué sur continuer. Veuillez noter : vous ne pouvez utiliser qu\'un seul coupon par commande.</p>');  
 }  
 //-eof-one_page_checkout-lat9  *** 1 de 1 ***  
   
   define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Votre code de réduction actuel : ');  
   define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'SUPPRIMER');  
   define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Pour supprimer un coupon de réduction de cette commande, remplacez le code coupon par : ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . '</p>');  
   define('TEXT_REMOVE_REDEEM_COUPON', 'Coupon de réduction supprimé par demande!');  
   define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', 'Le paramètre Inclure taxe = vrai, ne devrait être utilisé que lorsque recalculer = Aucun');
