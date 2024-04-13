<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 20 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);  
 define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Gutscheine für Rabatte');  
 define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);  
 define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Anwenden Betrag: ');  
 define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);  
 define('TEXT_INVALID_REDEEM_AMOUNT', 'Es scheint, dass der Betrag, den Sie versuchen zu verwenden, und Ihr Guthaben von Geschenkgutscheine nicht übereinstimmen. Bitte versuchen Sie es erneut.');  
 define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Verfügbares Guthaben: ');  
   
 //-bof-one_page_checkout-lat9  *** 1 von 1 ***  
 if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Um Guthaben von Geschenkgutscheine in Ihrem Konto zu verwenden, geben Sie den Betrag, die Sie anwenden möchten, in das Feld mit der Beschriftung "Anwenden Betrag" ein. Sie müssen eine Zahlungsmethode auswählen und anschließend unten auf der Seite auf die Bestätigungsbutton klicken, um das Guthaben auf Ihre Bestellung anzuwenden.</p><p>Wenn Sie ein <em>neues</em> Geschenkgutschein einlösen, geben Sie die Nummer in das Feld neben "Rabattcode" ein. Der einlösbare Betrag wird zu Ihrem Guthaben hinzugefügt, wenn Sie auf den rechten Button klicken.</p>');  
 } else {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Um Guthaben von Geschenkgutscheine in Ihrem Konto zu verwenden, geben Sie den Betrag, die Sie anwenden möchten, in das Feld mit der Beschriftung "Anwenden Betrag" ein. Sie müssen eine Zahlungsmethode auswählen und anschließend auf die Weiterbutton klicken, um das Guthaben auf Ihren Warenkorb anzuwenden.</p><p>Wenn Sie ein <em>neues</em> Geschenkgutschein einlösen, geben Sie die Nummer in das Feld neben "Einlösungscode" ein. Der einlösbare Betrag wird zu Ihrem Guthaben hinzugefügt, wenn Sie auf den Weiterbutton klicken.</p>');  
 }  
 //-eof-one_page_checkout-lat9  *** 1 von 1 ***  
 define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', 'Einstellung Include tax = true sollte nur erfolgen, wenn recalculate = None');
