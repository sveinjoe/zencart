<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE' => 'Authorize.net (AIM)',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND' => 'CURL-Funktionen nicht gefunden - für das Authorize.net AIM Zahlungsmodul erforderlich',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE' => 'Kreditkarte',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE' => 'Kartenart:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER' => 'Karteninhaber:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER' => 'Kartennummer:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES' => 'Ablaufdatum:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV' => 'CVV-Nummer:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK' => 'Was ist das?',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER' => '* Der Name des Karteninhabers muss mindestens ' . CC_OWNER_MIN_LENGTH . ' Zeichen lang sein.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER' => '* Die Kreditkartennummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV' => '* Die 3- oder 4-stellige CVV-Nummer muss von der Rückseite der Kreditkarte eingegeben werden.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE' => 'Ihre Kreditkarte konnte aus diesem Grund nicht autorisiert werden. Bitte korrigieren Sie die Informationen und versuchen Sie es erneut, oder kontaktieren Sie uns für weitere Hilfe.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR' => 'Kreditkartenfehler!',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR' => 'Die Zahlung konnte aufgrund eines Kommunikationsfehlers nicht verarbeitet werden. Sie können es erneut versuchen oder uns kontaktieren, um Unterstützung zu erhalten.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT' => 'Rückerstattung durchführen',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR' => 'Fehler: Sie haben eine Rückerstattung angefordert, aber das Bestätigungsfeld nicht aktiviert.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT' => 'Fehler: Sie haben eine Rückerstattung angefordert, aber einen ungültigen Betrag eingegeben.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR' => 'Fehler: Sie haben eine Rückerstattung angefordert, aber die letzten 4 Ziffern der Kreditkartennummer nicht eingegeben.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED' => 'Rückerstattung wurde eingeleitet. Transaktions-ID: %s - Autorisierungscode: %s',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR' => 'Fehler: Sie haben eine Erfassung angefordert, aber das Bestätigungskästchen nicht aktiviert.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT' => 'Erfassung durchführen',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT' => 'Fehler: Sie haben eine Erfassung angefordert, aber müssen einen Betrag eingeben.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Fehler: Sie müssen eine Transaktions-ID angeben.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED' => 'Guthabenerfassung wurde eingeleitet. Betrag: %s. Transaktions-ID: %s - Autorisierungscode: %s',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT' => 'Stornierung durchführen',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR' => 'Fehler: Sie haben eine Stornierung angefordert, aber das Bestätigungskästchen nicht aktiviert.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED' => 'Stornierung wurde eingeleitet. Transaktions-ID: %s - Autorisierungscode: %s ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE' => '<strong>Rückerstattung von Transaktionen</strong>',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND' => 'Sie können hier Geld auf die Kreditkarte des Kunden zurückerstatten:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK' => 'Aktivieren Sie dieses Kästchen, um Ihre Absicht zu bestätigen: ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT' => 'Eingabe des Betrags, die Sie zurückerstatten möchten',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT' => 'Eingabe der letzten 4 Ziffern der Kreditkarte, für die Sie eine Rückerstattung durchführen.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID' => 'Eingeben der ursprünglichen Transaktions-ID:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS' => 'Notizen (werden in der Bestellungshistorie angezeigt):',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Rückerstattung ausgestellt',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX' => 'Sie können eine Bestellung bis zu dem bereits abgebuchtem Betrag zurückerstatten. Sie müssen die letzten 4 Ziffern der Kreditkartennummer aus der ursprünglichen Bestellung angeben.<br>Rückerstattungen müssen innerhalb von 120 Tagen ab dem Datum der ursprünglichen Transaktion ausgestellt werden.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE' => '<strong>Transaktionen erfassen</strong>',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE' => 'Sie können hier zuvor autorisierte Gelder erfassen:',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Geben Sie den zu erfassenden Betrag ein: ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK' => 'Markieren Sie dieses Feld, um Ihre Absicht zu bestätigen: ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID' => 'Eingeben der ursprünglichen Transaktions-ID: ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notizen (werden in der Bestellungshistorie angezeigt):',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Vorherig autorisierte Gelder wurden erfasst.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX' => 'Erfassungen müssen innerhalb von 30 Tagen ab dem Datum der ursprünglichen Autorisierung erfolgen. Sie können eine Bestellung nur einmal erfassen.<br>Bitte sicherstellen, dass der angegebene Betrag korrekt ist.<br>Wenn Sie das Feld für den Betrag leer lassen, wird stattdessen der ursprüngliche Betrag verwendet.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE' => '<strong>Transaktionen annullieren</strong>',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID' => 'Sie können eine noch nicht abgeschlossene Transaktion oder eine noch nicht erfasste Autorisierung annullieren.<br>Eingeben der noch nicht abgeschlossene Transaktions-ID oder der noch nicht erfasste Autorisierungs-ID:',

    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK' => 'Markieren Sie dieses Feld, um Ihre Absicht zu bestätigen:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS' => 'Anmerkungen (werden in der Auftragsgeschichte angezeigt):',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaktion abgebrochen',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX' => 'Stornierungen müssen abgeschlossen sein, bevor die ursprüngliche Transaktion in der täglichen Batch-Verarbeitung abgeschlossen ist.',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Händler Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br><br>Test Informationen:<br><b>Automatisch genehmigte Kreditkartennummern:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Hinweis:</b> Diese Kreditkartennummern werden im Live Modus abgelehnt und im Test Modus genehmigt zurückgegeben. Für das Ablaufdatum kann jedes zukünftiges Datum verwendet werden und für den CVV Code jede 3- oder 4-stellige (AMEX) Nummer.<br><br><b>Automatisch abgelehnte Kreditkartennummer:</b><br><br>Karten #: 4222222222222<br><br>Diese Kartennummer kann verwendet werden, um ablehnungsmeldungen zu Testzwecken zu erhalten.<br><br>' : '') . '<br><br>Für detaillierte Einrichtungshinweise lesen Sie bitte <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">den AIM Setup FAQ Artikel</a>.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Hier klicken, um ein Konto zu eröffnen</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Händlerbereich</a><br><br><strong>Anforderungen:</strong><br><hr>*<strong>Authorize.net Konto</strong> (siehe Link oben zum Anmelden)<br>*<strong>CURL ist erforderlich</strong> und MUSS von Ihrem Hostinganbieter mit SSL-Unterstützung in PHP kompiliert sein<br>*<strong>Authorize.net Benutzername und Transaktionsschlüssel</strong> erhältlich in Ihrem Händlerbereich<br><br>Detaillierte Einrichtungsanleitungen finden Sie in <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">der AIM Setup FAQ Artikel</a>.';
}

return $define;
