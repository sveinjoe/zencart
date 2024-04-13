<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Rabatt-Coupon');  
 define('MODULE_ORDER_TOTAL_COUPON_HEADER', TEXT_GV_NAMES . '/Rabatt-Coupon');  
 define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Rabatt-Coupon');  
 define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM); // 注意：TEXT_GV_REDEEM 应该是另一个已经定义的常量，需要确保它也有相应的德语翻译  
   
 //-bof-one_page_checkout-lat9  *** 1 von 1 ***  
 if (defined ('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Bitte geben Sie Ihren Coupon-Code in das Feld für Rabatt-Codes unten ein. Ihr Coupon wird auf die Gesamtsumme angewendet und wird in der Anzeige Ihrer Bestellung angezeigt, nachdem Sie auf die rechts nebenstehende Schaltfläche geklickt haben oder Ihre Bestellung übermittelt haben. Bitte beachten Sie: Sie können nur einen Coupon pro Bestellung verwenden.</p>');  
 } else {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Bitte geben Sie Ihren Coupon-Code in das Feld für Rabatt-Codes unten ein. Ihr Coupon wird auf die Gesamtsumme angewendet und wird in Ihrem Warenkorb angezeigt, nachdem Sie auf "Weiter" geklickt haben. Bitte beachten Sie: Sie können nur einen Coupon pro Bestellung verwenden.</p>');  
 }  
 //-eof-one_page_checkout-lat9  *** 1 von 1 ***  
   
 define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Ihr aktueller Einlösungscode: ');  
 define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'ENTFERNEN');  
 define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Um einen Rabatt-Coupon von dieser Bestellung zu entfernen, bitte den Coupon-Code durch folgenden Text ersetzen: ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . '</p>');  
 define('TEXT_REMOVE_REDEEM_COUPON', 'Rabatt-Coupon wurde aufgrund einer Anfrage entfernt!');  
 define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', 'Das Einstellung "Include tax" auf "true" zu setzen, sollte nur erfolgen, wenn "recalculate" auf "None" steht.');
