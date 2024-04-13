<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Kreditkarte',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Type:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Karteninhaber:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Kartennummer:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Ablaufdatum:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'CVV-Nummer:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'Was ist das?',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Der Name des Karteninhabers muss mindestens ' . CC_OWNER_MIN_LENGTH . ' Zeichen lang sein.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Die Kreditkartennummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen lang sein.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Die 3- oder 4-stellige CVV-Nummer muss von der Rückseite der Kreditkarte eingetragen werden.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Beim Verarbeiten Ihrer Kreditkarte ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Ihre Kreditkarte wurde abgelehnt. Bitte versuchen Sie eine andere Karte oder kontaktieren Sie Ihre Bank für weitere Informationen.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Kreditkartenfehler!',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Händler Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Test Informationen:<br><b>Automatisch genehmigte Kreditkartennummern:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Hinweis:</b> Diese Kreditkartennummern werden im Live-Modus abgelehnt und im Test-Modus genehmigt zurückgegeben. Für das Ablaufdatum kann jedes zukünftiges Datum verwendet werden, und für die CVV-Code kann jede 3- oder 4-stellige Zahl (AMEX) verwendet werden.<br><br><b>Automatisch abgelehnte Kreditkartennummer:</b><br><br>Kartennummer: 4222222222222<br><br>Diese Kartennummer kann verwendet werden, um ablehnungsmeldungen zu Testzwecken zu erhalten.' : '') . '<br><br><strong>EINSTELLUNGEN</strong><br>In Ihrem Authorize.net Händlerprofil können die Einstellungen für die URLs "Antwort", "Quittung" und "Relay" LEER bleiben, oder falls erforderlich, können Sie die "Relay-URL" auf https://your_domain.com/foldername/index.php?main_page=checkout_process setzen.<br><br>Falls Sie Probleme damit haben, lesen Sie <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">den SIM-Setup FAQ-Artikel</a> für ausführliche Einrichtungsanweisungen.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Klicken Sie hier, um sich für einen Konto zu anmelden</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Klicken Sie hier, um sich in das Merchant-Bereich von Authorize.net einzuloggen</a><br><br><strong>Anforderungen:</strong><br><hr>*<strong>Authorize.net Konto</strong> (siehe Link oben zum Anmelden)<br>*<strong>Authorize.net Benutzername und Transaktionsschlüssel</strong> erhältlich in Ihrem Merchant-Bereich<br><br>Details zur Einrichtung finden Sie in <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">dem FAQ-Artikel zur SIM-Einstellung</a>.';
}
return $define;
