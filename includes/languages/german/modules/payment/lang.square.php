<?php
$define = [
    'MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION' => 'In weniger als 5 Minuten Kreditkartenzahlungen akzeptieren.<br>Keine monatliche Gebühren und keine Einrichtungsgebühren.<br>PCI-konform. Der Kunde nie das Geschäft verlässt!<br>Standardraten sind 2.9% + $0.30 pro Transaktion.<br>Die Gelder werden innerhalb von 1-2 Werktage auf Ihr Bankkonto eingezahlt.<br><br>  
    <a href="https://www.zen-cart.com/partners/square" rel="noopener" target="_blank">Mehr Informationen erhalten, oder ein Konto anmelden</a><br><br>  
    <a href="https://squareup.com/login" rel="noopener" target="_blank">In Ihr Square Konto einloggen</a>',  
    'MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE' => 'Square',  
    'MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE' => 'Kreditkarte',  
    'MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER' => '',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE' => 'Postleitzahl:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER' => 'Kartennummer:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES' => 'Ablaufdatum:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CVV' => 'CVV-Nummer:',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE' => 'Kreditkartentyp:',  
    'MODULE_PAYMENT_SQUARE_TEXT_ERROR' => '(SQ-ERR) Ihre Transaktion konnte aufgrund eines Fehlers nicht abgeschlossen werden: ',  
    'MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION' => 'Ihre Transaktion konnte aufgrund einer Fehlkonfiguration in unserem Geschäft nicht abgeschlossen werden. Bitte diesen Fehler an den Geschäftsinhaber melden: SQ-MISCONF',  
    'MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR' => 'Die Zahlung aufgrund eines Kommunikationfehlers konnte nicht bearbeitet werden. Sie können es erneut versuchen oder uns kontaktieren, um Hilfe zu erhalten.',  
    'MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA' => 'Wir konnten Ihre Transaktion nicht starten, da ein Problem mit die von Ihnen eingegebenen Kartendaten besteht. Bitte die Kartendaten korrigieren, oder diesen Fehler an den Geschäftsinhaber melden: SQ-NONCE-FAILURE',  
    'MODULE_PAYMENT_SQUARE_ERROR_DECLINED' => 'Leider konnte Ihre Zahlung nicht autorisiert werden. Bitte eine andere Zahlungsmethode wählen.',
    'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS' => '<strong>Aktionen</strong>',  
    'MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED' => 'Entschuldigen Sie, die versuchte Aktualisierung der Transaktion ist unerwartet fehlgeschlagen. Bitte die Logs für weitere Details konsultieren.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR' => 'Fehler: Sie haben eine Rückerstattung beantragt, aber das Bestätigungsfeld nicht aktiviert.',  
    'MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT' => 'Fehler: Sie haben eine Rückerstattung beantragt, aber einen ungültigen Betrag eingegeben.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED' => 'Rückerstattung initiiert für ',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR' => 'Fehler: Sie haben eine Erfassung beantragt, aber das Bestätigungsfeld nicht aktiviert.',  
    'MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Fehler: Sie müssen eine Transaktions-ID angeben.',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED' => 'Geld Erfassung initiiert. Transaktions-ID: %s',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR' => 'Fehler: Sie haben eine Stornierung beantragt, aber das Bestätigungsfeld nicht aktiviert.',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED' => 'Stornierung initiiert. Transaktions-ID: %s',
];

// Check current directory to see if SquareWebpay is installed have include lang.square_webPay.php in case it changes before Square is fully removed from zen cart
// This prevents the duplication message as square_webPay defines all below as constants.
if (file_exists(dirname(__FILE__) . '/square_webPay.php') === false && file_exists(dirname(__FILE__) . '/lang.square_webPay.php') === false) {
    $defineExtra = [
        'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY' => '<strong>Zusammenfassung der Transaktion</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE' => '<strong>Rückerstattung der Transaktion</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND' => 'Sie können hier Geld an den Kunden zurückerstatten:',  
        'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK' => 'Markieren Sie dieses Feld, um Ihre Absicht zu bestätigen: ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT' => 'Eingabe des Betrages, die Sie zurückerstatten möchten',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS' => 'Notizen (werden in der Auftragsverlauf angezeigt):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Rückerstattung ausgeführt',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX' => 'Sie können eine Bestellung innerhalb von 120 Tagen zurückerstatten, bis zu dem ursprünglich überwiesenem Betrag. Sie müssen die ursprüngliche Transaktions-ID und Zahlungs-ID angeben.<br>Für weitere <a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">Informationen zu Rückerstattungen von Square</a> besuchen Sie die Square-Website.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT' => 'Rückerstattung durchführen',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE' => '<strong>Erfassung der Transaktion</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE' => 'Sie können hier zuvor autorisierte Gelder erfassen:',  
        'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK' => 'Markieren Sie dieses Feld, um Ihre Absicht zu bestätigen: ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notizen (werden in der Auftragsverlauf angezeigt):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX' => 'Erfassungen müssen innerhalb von 6 Tagen nach der ursprünglichen Autorisierung durchgeführt werden. Sie können eine Bestellung nur einmal erfassen.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT' => 'Erfassen durchführen',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE' => '<strong>Stornierung der Transaktion</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID' => 'Sie können eine Autorisierung annullieren, die noch nicht erfasst wurde.',  
        'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK' => 'Markieren Sie dieses Feld, um Ihre Absicht zu bestätigen:',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS' => 'Notizen (werden in der Auftragsverlauf angezeigt):',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaktion abgebrochen',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT' => 'Annullieren',
    ];
    $define = array_merge($define, $defineExtra);       
}


if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN'] =  
    '<span class="text-danger"><strong>WARNUNG: Zugriffs-Token nicht gesetzt:</strong></span> <br>  
1. Stellen Sie sicher, dass die OAuth-Umleitungs-URL in Ihrem Square-Account "app" auf <u><nobr><pre>' . str_replace(array('index.php?main_page=index' => 'http://'), array('square_handler.php' => 'https://'), zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre></nobr></u> gesetzt ist.<br>  
2. Dann <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Klicken Sie hier, um sich anzumelden und Ihr Konto zu autorisieren</button></a>';
}

return $define;
