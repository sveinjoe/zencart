<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Coupon Sconto');  
 define('MODULE_ORDER_TOTAL_COUPON_HEADER', TEXT_GV_NAMES . '/Coupon Sconto');  
 define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Coupon Sconto');  
 define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM);  
   
 //-bof-one_page_checkout-lat9  *** 1 di 1 ***  
 if (defined ('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Inserisci il codice coupon nella casella sottostante. Il coupon verrà applicato al totale e sarà riflesso nella visualizzazione del tuo ordine dopo aver cliccato il pulsante a destra o dopo aver inviato il tuo ordine. Attenzione: puoi utilizzare solo un coupon per ordine.</p>');  
 } else {  
   define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Inserisci il codice coupon nella casella sottostante. Il coupon verrà applicato al totale e sarà riflesso nel tuo carrello dopo aver cliccato sul pulsante continuare. Attenzione: puoi utilizzare solo un coupon per ordine.</p>');  
 }  
 //-eof-one_page_checkout-lat9  *** 1 di 1 ***  
   
 define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Codice attuale di riscatto: ');  
 define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'RIMUOVERE');  
 define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Per rimuovere un Coupon Sconto da questo ordine sostituisci il codice coupon con: ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . '</p>');  
 define('TEXT_REMOVE_REDEEM_COUPON', 'Coupon Sconto Rimosso per Richiesta!');  
 define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', 'Impostare Include tax = true, dovrebbe avvenire solo quando recalculate = Nessuno');
