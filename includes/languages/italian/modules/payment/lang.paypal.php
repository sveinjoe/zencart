<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'Pagamenti PayPal Standard',  
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'Pagamenti PayPal Website Standard',  
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/it_IT/i/logo/PayPal_mark_37x23.gif',  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Pagamento con PayPal',  
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Risparmia tempo. Pagare in modo sicuro. <br>Pagare senza divulgare i tuoi dati finanziari.',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Tutti gli articoli nel tuo carrello (vedi dettagli nel negozio e sulla ricevuta del negozio).',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME . ' Acquisto',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Spese Uniche legate a ',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Spese aggiuntive',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Spese di gestione e altre commissioni applicabili',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Sconti',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Crediti applicati, inclusi coupon sconto, buoni regalo, ecc.',  
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Si prega di notare che questo modulo non è più consigliato.  Consulta <a href="https://docs.zen-cart.com/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">questa pagina</a> per maggiori informazioni.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Nome:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Cognome:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Nome Azienda:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Nome dell\'indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Città:',

    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Stato dell\'indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'CAP dell\'indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Paese dell\'indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Email del pagatore:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'ID Ebay:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID Pagatore:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Stato Pagatore:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Stato dell\'indirizzo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Tipo di pagamento:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Stato del pagamento:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Motivo in sospeso:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Fattura:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Data del pagamento:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Valuta:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Importo lordo:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Commissione di pagamento:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Tasso di cambio:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articoli del carrello:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Tipo di transazione:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID Transazione:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID Transazione Padre:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Commenti di sistema: '
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard</strong> (Servizio PayPal più vecchio, meno affidabile di Express Checkout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Gestisci il tuo account PayPal.</a><br><br><b>Istruzioni di Configurazione:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Registrati per un account PayPal - clicca qui.</a><br>2. Nel tuo account PayPal, sotto "Profilo",<ul><li>imposta il tuo URL <strong>Preferenze di Notifica di Pagamento Istantaneo</strong> a:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(Se è già inserito un altro URL valido, puoi lasciarlo così.)<br><span class="alert">Assicurati che la casella per abilitare IPN è selezionata!</span><br><br></li><li>in <strong>Preferenze Pagamenti Sito Web</strong> imposta il tuo URL <strong>Ritorno Automatico</strong> a:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... e clicca "installa" sopra per abilitare il supporto PayPal Standard... e "modifica" per indicare a Zen Cart le tue impostazioni PayPal.</li>') . '</ul><hr><strong>Requisiti:</strong><br><br>*<strong>Account PayPal</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">clicca per configurare</a>)<br>*<strong>CURL con SSL</strong> è consigliato<br>*<strong>Porta 80 (e porta 443 se SSL è abilitato)</strong> è usata per comunicazione <strong>*bidirezionale*</strong> con il gateway, quindi deve essere aperta sul router/firewall del tuo host.<br>*<strong>Impostazioni</strong> all\'interno del tuo account PayPal devono essere configurate come sopra descritto.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
