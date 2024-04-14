<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 20 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES); // MODULO_TOTALE_ORDINE_GV_TITOLO  
 define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Buoni Sconto'); // MODULO_TOTALE_ORDINE_GV_INTESTAZIONE  
 define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES); // MODULO_TOTALE_ORDINE_GV_DESCRIZIONE  
 define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Applicare Importo: '); // PROMPT_UTENTE_MODULO_TOTALE_ORDINE_GV  
 define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM); // TESTO_INSERIRE_CODICE_MODULO_TOTALE_ORDINE_GV  
 define('TEXT_INVALID_REDEEM_AMOUNT', 'Sembra che l\'importo che hai provato ad applicare e il saldo del tuo Buono Regalo non corrispondono. Riprova.'); // TESTO_IMPORTO_NON_VALIDO_DA_RIMBORSARE  
 define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Saldo disponibile: '); // SALDO_UTENTE_MODULO_TOTALE_ORDINE_GV  
   
 //-bof-one_page_checkout-lat9  *** 1 di 1 ***  
 if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Per utilizzare i fondi del Buono Regalo già presenti sul tuo account, scrivi l\'importo che vuoi applicare nella casella indicata come \'Applicare Importo\'. Dovrai scegliere un metodo di pagamento, quindi cliccare sul pulsante submit in fondo alla pagina per applicare i fondi al tuo ordine.</p><p>Se stai riscuotendo un <em>nuovo</em> Buono Regalo, scrivi il numero nella casella vicino a "Codice Sconto". L\'importo riscosso sarà aggiunto al tuo account quando cliccherai sul pulsante a destra.</p>'); // ISTRUZIONI_RISCOSSO_MODULO_TOTALE_ORDINE_GV  
 } else {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Per utilizzare i fondi del Buono Regalo già presenti sul tuo account, scrivi l\'importo che vuoi applicare nella casella indicata come \'Applicare Importo\'. Dovrai scegliere un metodo di pagamento, quindi cliccare sul pulsante continuare per applicare i fondi al tuo carrello.</p><p>Se stai riscuotendo un <em>nuovo</em> Buono Regalo, scrivi il numero nella casella vicino a "Codice Rimborso". L\'importo riscosso sarà aggiunto al tuo account quando cliccherai sul pulsante continuare.</p>'); // ISTRUZIONI_RISCOSSO_MODULO_TOTALE_ORDINE_GV_ALTRO  
 }  
 //-eof-one_page_checkout-lat9  *** 1 di 1 ***  
   
 define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', 'Impostare Includi tassa = vero, dovrebbe accadere solo quando ricalcola = Nessuno'); // ERRORE_MODULO_TOTALE_ORDINE_GV_INCLUDERE_TASSE
