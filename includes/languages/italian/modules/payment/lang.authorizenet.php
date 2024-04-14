<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Carta di Credito',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Tipo:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Nome del Proprietario della Carta:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Numero Carta:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Data di Scadenza:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'Numero CVV:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'Cos\'è questo?',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Il nome del proprietario della carta di credito deve essere composto di almeno ' . CC_OWNER_MIN_LENGTH . ' caratteri.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Il numero della carta di credito deve essere composto di almeno ' . CC_NUMBER_MIN_LENGTH . ' caratteri.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Il numero CVV di 3 o 4 cifre deve essere inserito sul retro della carta di credito.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Si è verificato un errore nell\'elaborazione della carta di credito. Si prega di riprovare.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'La tua carta di credito è stata rifiutata. Si prega di provare con un\'altra carta o di contattare la tua banca per maggiori informazioni.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Errore Carta di Credito!',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Login del Commerciante Authorize.net</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Informazioni sul Test:<br><b>Numeri di Carta di Credito per Approvazione Automatica:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Nota:</b> Questi numeri di carta di credito restituiranno un rifiuto in modalità live, e un approvazione in modalità test. È possibile utilizzare qualsiasi futura data per la scadenza e qualsiasi numero di 3 o 4 (AMEX) cifre può essere utilizzato per il codice CVV.<br><br><b>Numero di Carta di Credito per Rifiuto Automatico:</b><br><br>Numero Carta: 4222222222222<br><br>Questo numero di carta può essere utilizzato per ricevere notifiche di rifiuto ai fini del test.' : '') .  '<br><br><strong>IMPOSTAZIONI</strong><br>La vostra impostazione degli URL "risposta", "ricevuta" e "relay" nel vostro Profilo Commerciante Authorize.net può essere lasciata VUOTA, oppure, se necessario, è possibile impostare l\'URL "relay" per puntare a https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Se si verificano problemi con questo, vedere <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'articolo delle FAQ sulla Configurazione SIM</a> per istruzioni dettagliate di impostazione.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Clicca qui per registrare un account</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Clicca per entrare nella zona commerciale di Authorize.net</a><br><br><strong>Requisiti:</strong><br><hr><strong>Account Authorize.net</strong> (vedi il link sopra per registrarsi)<br><strong>Nome utente e chiave di transazione Authorize.net</strong> disponibili nella tua zona commerciale<br><br>Vedere <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'articolo delle domande frequente per la configurazione SIM</a> per istruzioni dettagliate sulla configurazione.';
}
return $define;
