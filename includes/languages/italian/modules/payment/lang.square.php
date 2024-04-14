<?php
$define = [
    'MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION' => 'Accetta carte di credito in meno di 5 minuti.<br>Nessuna tassa mensile e nessun costo di installazione.<br>PCI Compliant. Il cliente non abbandona mai il tuo negozio!<br>Tariffe standard sono del 2.9% + $0.30 per transazione.<br>Il pagamento viene depositato sul tuo conto bancario in 1-2 giorni lavorativi.<br><br>  
    <a href="https://www.zen-cart.com/partners/square" rel="noopener" target="_blank">Ottieni ulteriori informazioni, o Registrati per un account</a><br><br>  
    <a href="https://squareup.com/login" rel="noopener" target="_blank">Accedi al tuo account Square</a>',  
    'MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE' => 'Square',  
    'MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE' => 'Carta di Credito',  
    'MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER' => '',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE' => 'Codice Postale:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER' => 'Numero Carta:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES' => 'Scadenza Carta:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CVV' => 'Numero CVV:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE' => 'Tipo Carta di Credito:',  
    'MODULE_PAYMENT_SQUARE_TEXT_ERROR' => '(SQ-ERR) La tua transazione non è potuta essere completata a causa di un errore: ',  
    'MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION' => 'La tua transazione non è potuta essere completata a causa di una configurazione errata nel nostro negozio. Si prega di segnalare questo errore al Gestore del Negozio: SQ-MISCONF',  
    'MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR' => 'Impossibile elaborare il pagamento a causa di un errore di comunicazione. Puoi riprovare o contattarci per assistenza.',  
    'MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA' => 'Non abbiamo potuto avviare la tua transazione a causa di un problema con i dati della carta inserita. Si prega di correggere i dati della carta, o segnalare questo errore al Gestore del Negozio: SQ-NONCE-FAILURE',  
    'MODULE_PAYMENT_SQUARE_ERROR_DECLINED' => 'Spiacente, il pagamento non è stato autorizzato. Si prega di selezionare un metodo di pagamento alternativo.',

    'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS' => '<strong>Azioni</strong>',  
    'MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED' => 'Siamo spiacenti, l\'aggiornamento della transazione è fallito inaspettatamente. Per maggiori dettagli vedere i log.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR' => 'Errore: Hai richiesto un rimborso ma non hai selezionato la casella di Conferma.',  
    'MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT' => 'Errore: Hai richiesto un rimborso ma hai inserito un importo non valido.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED' => 'Rimborso effettuato di ',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR' => 'Errore: Hai richiesto una cattura ma non hai selezionato la casella di Conferma.',  
    'MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Errore: Devi specificare un ID Transazione.',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED' => 'Cattura fondi iniziata. ID Transazione: %s',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR' => 'Errore: Hai richiesto una cancellazione ma non hai selezionato la casella di Conferma.',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED' => 'Cancellazione iniziata. ID Transazione: %s',
];

// Check current directory to see if SquareWebpay is installed have include lang.square_webPay.php in case it changes before Square is fully removed from zen cart
// This prevents the duplication message as square_webPay defines all below as constants.
if (file_exists(dirname(__FILE__) . '/square_webPay.php') === false && file_exists(dirname(__FILE__) . '/lang.square_webPay.php') === false) {
    $defineExtra = [
        'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY' => '<strong>Riepilogo Transazione</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE' => '<strong>Rimborso Transazione</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND' => 'Potete rimborsare il pagamento al cliente qui:',  
        'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK' => 'Selezionare questa casella per confermare la vostra intenzione: ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT' => 'Inserire l\'importo che si desidera rimborsare',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS' => 'Note (sarà visualizzata nella Cronologia Ordine):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Rimborso Emitto',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX' => 'Potete rimborsare un ordine entro 120 giorni, fino all\'importo originario pagato. Deve essere fornito l\'ID della transazione originale e l\'ID del pagamento<br>Visitare il sito Square per maggiori <a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">informazioni sul rimborso Square</a>.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT' => 'Esegui Rimborso',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE' => '<strong>Cattura Transazione</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE' => 'Potete catturare fondi precedentemente autorizzati qui:',  
        'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK' => 'Selezionare questa casella per confermare la vostra intenzione: ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Note (sarà visualizzata nella Cronologia Ordine):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX' => 'La cattura deve essere eseguita entro 6 giorni dall\'autorizzazione originale. Potete catturare un ordine SOLO UNA VOLTA.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT' => 'Esegui Cattura',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE' => '<strong>Annullamento Transazione</strong>',

        'MODULE_PAYMENT_SQUARE_ENTRY_VOID' => 'Potete annullare una autorizzazione che non è ancora stata catturata.',  
        'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK' => 'Spuntare questa casella per confermare la vostra intenzione:',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS' => 'Note (appariranno nella Cronologia degli Ordini):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transazione Annullata',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT' => 'Annulla',
    ];
    $define = array_merge($define, $defineExtra);       
}


if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN'] =  
    '<span class="text-danger"><strong>ATTENZIONE: Access Token non impostato:</strong></span> <br>  
    1. Assicurati che l\'URL di reindirizzamento OAuth nel tuo account Square "app" è impostato su <u><nobr><pre>' . str_replace(array('index.php?main_page=index' => 'http://'), array('square_handler.php' => 'https://'), zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre></nobr></u><br>  
    2. Quindi <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Clicca qui per effettuare il login e autorizzare il tuo account</button></a>';
}

return $define;
