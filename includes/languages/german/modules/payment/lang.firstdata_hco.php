<?php
$define = [
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE' => 'First Data Hosted Checkout Zahlungsseiten',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE' => 'Kreditkarte',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE' => 'Die Transaktion konnte nicht abgeschlossen werden. Bitte versuchen Sie eine andere Karte oder kontaktieren Sie Ihre Bank für weitere Informationen.',  
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE' => 'Beim Verarbeiten der Transaktion ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
];

if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">First Data GGe4 Händler Login</a>' .  
            (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Production' ? '<br><br>Für TEST KARTEN bitte folgen Sie <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers" rel="noreferrer noopener" target="_blank">Verwendung von Test Kreditkarten</a>' : '') .  
            '<br><br><strong>EINSTELLUNGEN</strong><br>Die Einstellung "Receipt Link URL" in Ihrer First Data Payment Page Konfiguration muss auf <u>' . zen_catalog_href_link('checkout_process') . '</u> zeigen.<br>' .  
            'Anschließend erhalten Sie die Payment Page ID, Transaktionsschlüssel und Antwortschlüssel von First Data und tragen Sie diese hier ein. Sie können diese finden, indem Sie sich in Ihr First Data Konto einloggen, Payment Pages auswählen, auf die gewünschte Page ID klicken und zum Abschnitt "Sicherheit" navigieren.';
    } else {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = 'Hosted Checkout Zahlungsseiten stehen allen First Data, Global Gateway e4 und Linkpont Händlern zur Verfügung.<br><br>Ihr First Data Kundenbetreuer kann Sie bei allen erforderlichen Kontoänderungen nterstützen, um Hosted Checkout (HCO) in Ihrem Konto zu aktivieren.<br><br><a rel="noreferrer noopener" target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Klicken Sie hier, um für ein First Data Hosted Checkout Konto anzumelden</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://globalgatewaye4.firstdata.com/">Klicken Sie hier, um sich in die First Data GGe4 Händlerbereich zu login</a>';
    }
}

return $define;
