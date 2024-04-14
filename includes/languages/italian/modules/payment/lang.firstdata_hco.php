<?php
$define = [
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE' => 'Pagine di pagamento First Data Hosted Checkout',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE' => 'Carta di credito',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE' => 'La transazione non è potuta essere completata. Si prega di provare con una altra carta o di contattare la propria banca per ulteriori informazioni.',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE' => 'Si è verificato un errore durante il processamento della transazione. Si prega di riprovare.',
];

if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">Login Commerciante First Data GGe4</a>' .  
            (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Production' ? '<br><br>Per CARTE DI TEST fare riferimento a <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers" rel="noreferrer noopener" target="_blank">Utilizzo di Carte di Credito di Test</a>' : '') .  
            '<br><br><strong>IMPOSTAZIONI</strong><br>La tua impostazione "URL Collegamento Ricevuta" nella tua configurazione di Pagina di Pagamento First Data deve essere puntata a <u>' . zen_catalog_href_link('checkout_process') . '</u><br>' .  
            'Quindi ottenere l\'ID Pagina di Pagamento, Chiave di Transazione e Chiave di Risposta da First Data e inserirli qui. Possono essere trovati effettuando il login nel tuo account First Data, scegliendo Pagine di Pagamento, e cliccando sul desiderato ID Pagina e navigando nella sezione Sicurezza.';
    } else {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = 'Le pagine di pagamento Hosted Checkout sono disponibili a tutti i commercianti di First Data, Global Gateway e4 e Linkpont.<br><br>  
             Il rappresentante del tuo account First Data può aiutarti a effettuare qualsiasi cambiamento necessario al tuo account per attivare Hosted Checkout (HCO).<br><br>  
             <a rel="noreferrer noopener" target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Clicca qui per registrarti per un account Hosted Checkout First Data</a><br><br>  
             <a rel="noreferrer noopener" target="_blank" href="https://globalgatewaye4.firstdata.com/">Clicca per accedere alla zona commerciale GGe4 di First Data</a>';
    }
}

return $define;
